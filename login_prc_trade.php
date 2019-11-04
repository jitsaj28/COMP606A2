<?php

 include 'header.php' ; 

 $ClassObject = new trademan();
 
$txtuname=$_GET["txtuname"]; 
 $txtupass=$_GET["txtupass"]; 
 $result1 =  0;  
 
 
 if (is_a($ClassObject, 'DBConnection'))
	{
   if(isset($txtuname))
	{
	if(isset($txtupass))
	{
	$result1 =  $ClassObject->CheckTrademan($txtuname,$txtupass);   
	}
	}
	
	}
	
if($result1 == 1)
{	
?>

<script>
window.location.href = "tradeindex.php";
</script>

 <?php
 }
 else
 {
 ?>
 
 
 Wrong .<a href="TradeManLogin.php">Click</a>
 
 <?php
 }
 ?>