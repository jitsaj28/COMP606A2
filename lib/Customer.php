<?php 
class CustomerDetails
{
	public $_title;
	 function  _construct($title)
	{
	$this->_title = $title;
	}
	function GetTitle()
	{
	echo $this->_title;
	}
}
   
 class Customer extends DBConnection
{
	private $_sql;
    private $_result;
	
	function AddCustomer($txtName,$txtAddress,$txtemail,$txtmobileno,$txtuname,$txtupass)
  {
		$c= parent::db_con(); 
	
        $_sql = "INSERT INTO tbl_customerdetails (name, address, emailid, mobileno, status, uname, upass) VALUES ('".$txtName."','".$txtAddress."','".$txtemail."','".$txtmobileno."','1','".$txtuname."','".$txtupass."')";
	
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
	
    function InsertJob($jtitle,$jdesc,$jcost,$jddate) 
    {
		$date = date("d-M-Y");
		$cid =   $_SESSION['Customer_ID'];
        $con= parent::db_con(); 
        $this->_sql = "INSERT INTO tbl_jobdesc (jtitle,jdesc,jcost,jadate,jddate,cid,tradeid) VALUES ('".$jtitle."','".$jdesc."','".$jcost."','".$date."','".$jddate."','".$cid."','0')";
        $this->_result = mysqli_query( $con,$this->_sql);
        mysqli_close($con);
        return ($this->_result);
    }
   

	function get_jobdetails($type)
	{

		  $con= parent::db_con(); 
		
        $this->_sql = "select * from tbl_jobdesc  where  tradeid ='0'";
        $this->_result = mysqli_query($con,$this->_sql);
        $array = array(); 
        while($row = mysqli_fetch_assoc( $this->_result ))  
           {  
                $array[] = $row;  
           } 
        mysqli_close($con);  
        return $array;  
	}
	
	function gettrademandetails()
	{
	
		
		$con= parent::db_con(); 
		$cid = $_SESSION['Customer_ID'];
		$this->_sql = "SELECT a.jtitle,a.jdesc, a.jcost, a.jadate, a.jddate,b.lcost,b.mcost,b.tid,b.edate,c.name,b.id as TradeID,a.id as JobID,b.sdate from tbl_jobdesc a inner join tbl_trade b on a.id = b.jid  INNER join tbl_tradesmandetails c on b.tid = c.id where a.cid='".$cid."' and a.tradeid ='0'";
        $this->_result = mysqli_query($con,$this->_sql);
        $array = array(); 
        while($row = mysqli_fetch_assoc( $this->_result ))  
           {  
                $array[] = $row;  
           } 
        mysqli_close($con);  
        return $array;
	}
	function GetConfirmed()
	{
	
		$con= parent::db_con(); 
		$cid =   $_SESSION['Customer_ID'];
		$this->_sql = "SELECT a.jtitle,a.jdesc, a.jcost, a.jadate, a.jddate,b.lcost,b.mcost,b.tid,b.edate,c.name,b.id as TradeID,a.id as JobID ,a.tradeid,b.sdate from tbl_jobdesc a inner join tbl_trade b on a.id = b.jid  INNER join tbl_tradesmandetails c on b.tid = c.id where a.cid='".$cid."'   group by a.tradeid";
        $this->_result = mysqli_query($con,$this->_sql);
        $array = array(); 
        while($row = mysqli_fetch_assoc( $this->_result ))  
           {  
                $array[] = $row;  
           } 
        mysqli_close($con);  
        return $array;
	}
    
	
		function GrandQuote($JobID,$TradeID)
		{
				$con= parent::db_con(); 
				$sql = "update  tbl_jobdesc  set tradeid='".$TradeID."' where id='".$JobID."'";
				$result = mysqli_query($con,$sql);
				mysqli_close($con);
				return ($result);
		}
	
    
	
}
    

?>