<?php
    include 'header.php'; 
	 $ClassObject = new Customer();	
    $JobID = $_GET['id'];
    $TradeID = $_GET['tid'];
	
 if (is_a($ClassObject, 'DBConnection')) 
  {
	  if(isset($JobID))
	  {
	   $result =  $ClassObject->GrandQuote($JobID,$TradeID);   
	   }
  }
	
if($result == 1)
{	
?>
success .<a href="CustomerView.php">Back to home</a>
 <?php
 }
 ?>