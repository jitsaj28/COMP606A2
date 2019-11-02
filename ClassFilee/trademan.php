<?php 

   
class trademan extends DBConnection
{
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

function AddTrademan($txtName,$txtAddress,$txtemail,$txtmobileno,$txtuname,$txtupass)
  {
		$c= parent::db_con(); 
	
        $_sql = "INSERT INTO tbl_tradesmandetails (name, address, emailid, mobileno, status, uname, upass) VALUES ('".$txtName."','".$txtAddress."','".$txtemail."','".$txtmobileno."','1','".$txtuname."','".$txtupass."')";
	
       $_result = mysqli_query($c,$_sql);
		  
       mysqli_close($c);
        return ($_result);

}

function InsertaApplyQ($mcost,$lcost,$ddate,$id)
{
		$tid = $_SESSION['Trademan_ID'];
         $con= parent::db_con(); 
        $this->_sql = "INSERT INTO tbl_trade (tid, jid, lcost, mcost, edate) VALUES ('".$tid."','".$id."','".$lcost."','".$mcost."','".$ddate."')";
        $this->_result = mysqli_query( $con,$this->_sql);
		  
        mysqli_close($con);
        return ($this->_result);
}
function GetAppliedJob()
	{
	
		$con= parent::db_con(); 	
		$tid = $_SESSION['Trademan_ID'];
        $this->_sql = "SELECT a.jtitle,a.jdesc, a.jcost, a.jadate, a.jddate,b.lcost,b.mcost,b.tid,b.edate,c.name,b.id as TradeID,a.id as JobID ,a.tradeid from tbl_jobdesc a inner join tbl_trade b on a.id = b.jid  INNER join tbl_tradesmandetails c on b.tid = c.id where b.tid='".$tid."'   ";
        $this->_result = mysqli_query($con,$this->_sql);
        $array = array(); 
        while($row = mysqli_fetch_assoc( $this->_result ))  
           {  
                $array[] = $row;  
           } 
        mysqli_close($con);  
        return $array;  
	}



	function GetConfirmedJobTrade()
	{
	
		$con= parent::db_con(); 
		$tid =   $_SESSION['Trademan_ID'];
		$this->_sql = "SELECT a.jtitle,a.jdesc, a.jcost, a.jadate, a.jddate,b.lcost,b.mcost,b.tid,b.edate,c.name,b.id as TradeID,a.id as JobID ,a.tradeid from tbl_jobdesc a inner join tbl_trade b on a.id = b.jid  INNER join tbl_tradesmandetails c on b.tid = c.id where b.tid='".$tid."' and a.tradeid != '0'  group by a.tradeid";
        $this->_result = mysqli_query($con,$this->_sql);
        $array = array(); 
        while($row = mysqli_fetch_assoc( $this->_result ))  
           {  
                $array[] = $row;  
           } 
        mysqli_close($con);  
        return $array;
	}
	
}


?>