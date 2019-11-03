<?php
    include 'header.php'; 
	 $ClassObject = new trademan();
	
	$result=0;
    $mcost = $_GET['mcost'];
    $lcost = $_GET['lcost'];
    $sdate = $_GET['sdate'];
    $ddate = $_GET['ddate'];
    $id = $_GET['id'];
	if (is_a($ClassObject, 'DBConnection'))
	{
	 if(isset($mcost))
	 {
   $result =  $ClassObject->InsertaApplyQ($mcost,$lcost,$sdate,$ddate,$id);   
	}
	}
if($result == 1)
{	
?>
success . <a href="tradeindex.php">Go To Home</a>
 <?php
 }
 ?>