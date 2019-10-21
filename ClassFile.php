<?php 

    session_start();
	
class person
{
const DB_HOSTNAME = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'trade';
    public $_db_connect;
    private $_sql;
    private $_result;
    private $_row;
	
    public $_name ;
    public $_age ;

    function db_con()
    {
        $this->_db_connect = mysqli_connect(self::DB_HOSTNAME,self::DB_USERNAME,self::DB_PASSWORD,self::DB_NAME) or die(mysql_error());
		return($this->_db_connect);
    }
    function InsertJob($jtitle,$jdesc,$jcost,$jddate) 
    {
		$date = date("d-M-Y");
		$cid =   $_SESSION['Customer_ID'];
        $this->db_con(); 
        $this->_sql = "INSERT INTO tbl_jobdesc (jtitle,jdesc,jcost,jadate,jddate,cid,tid) VALUES ('".$jtitle."','".$jdesc."','".$jcost."','".$date."','".$jddate."','".$cid."','0')";
        $this->_result = mysqli_query($this->_db_connect,$this->_sql);
        mysqli_close($this->_db_connect);
        return ($this->_result);
    }
   
function InsertaApplyQ($mcost,$lcost,$ddate,$id)
{
		$tid = $_SESSION['Trademan_ID'];
        $this->db_con(); 
        $this->_sql = "INSERT INTO tbl_trade (tid, jid, lcost, mcost, edate) VALUES ('".$tid."','".$id."','".$lcost."','".$mcost."','".$ddate."')";
        $this->_result = mysqli_query($this->_db_connect,$this->_sql);
		  
        mysqli_close($this->_db_connect);
        return ($this->_result);
}
	function get_jobdetails($type)
	{
	if($type=='trade')
	{
	$this->_sql = "select * from tbl_jobdesc where tid != '0'  ";
	}
	else
	{
	$this->_sql = "select * from tbl_jobdesc  ";
	}
		$this->db_con();
        $this->_sql = "select * from tbl_jobdesc  ";
        $this->_result = mysqli_query($this->_db_connect,$this->_sql);
        $array = array(); 
        while($row = mysqli_fetch_assoc( $this->_result ))  
           {  
                $array[] = $row;  
           } 
        mysqli_close($this->_db_connect);  
        return $array;  
	}
    
}
    

class AddUsers extends person
{
function AddCustomer($txtName,$txtAddress,$txtemail,$txtmobileno,$txtuname,$txtupass)
  {
		$c= parent::db_con(); 
	
        $_sql = "INSERT INTO tbl_customerdetails (name, address, emailid, mobileno, status, uname, upass) VALUES ('".$txtName."','".$txtAddress."','".$txtemail."','".$txtmobileno."','1','".$txtuname."','".$txtupass."')";
	
       $_result = mysqli_query($c,$_sql);
		  
        mysqli_close($c);
        return ($_result);

}
function AddTrademan($txtName,$txtAddress,$txtemail,$txtmobileno,$txtuname,$txtupass)
  {
		$c= parent::db_con(); 
	
        $_sql = "INSERT INTO tbl_tradesmandetails (name, address, emailid, mobileno, status, uname, upass) VALUES ('".$txtName."','".$txtAddress."','".$txtemail."','".$txtmobileno."','1','".$txtuname."','".$txtupass."')";
	
       $_result = mysqli_query($c,$_sql);
		  
        mysqli_close($c);
        return ($_result);

}
function CheckUser($uname,$upass)
{
$c= parent::db_con(); 

$_sql = "select * from tbl_customerdetails where uname='".$uname."'  and upass='".$upass."' ";
        $Result = mysqli_query($c,$_sql);
      if(mysqli_num_rows($Result)>0)
	  {
        while($row = mysqli_fetch_assoc( $Result ))  
           {  
                $_SESSION['Customer_ID'] = $row['id'];  
           } 
		   return ("1");
	}
	else
	{
	return ("0");
	}
        mysqli_close($c);  

}
function CheckTrademan($uname,$upass)
{
$c= parent::db_con(); 

$_sql = "select * from tbl_tradesmandetails where uname='".$uname."'  and upass='".$upass."' ";
        $Result = mysqli_query($c,$_sql);
      if(mysqli_num_rows($Result)>0)
	  {
        while($row = mysqli_fetch_assoc( $Result ))  
           {  
                $_SESSION['Trademan_ID'] = $row['id'];  
           } 
		   return ("1");
	}
	else
	{
	return ("0");
	}
        mysqli_close($c);  

}
}
?>