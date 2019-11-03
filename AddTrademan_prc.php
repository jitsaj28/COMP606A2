<?php

 include 'header.php' ; 

 $ClassObject = new trademan();
	
$txtName=$_GET["txtName"]; 
$txtAddress=$_GET["txtAddress"]; 
$txtemail=$_GET["txtemail"];
$txtmobileno=$_GET["txtmobileno"]; 
$txtuname=$_GET["txtuname"]; 
 $txtupass=$_GET["txtupass"]; 
  if (is_a($ClassObject, 'DBConnection'))
	{
	if(isset($txtName)& isset($txtAddress))
	{
 $result =  $ClassObject->AddTrademan($txtName,$txtAddress,$txtemail,$txtmobileno,$txtuname,$txtupass);   
 }}
if($result == "1")
{
	
?>

success .<a href="TradeManLogin.php">Click</a>
 <?php
 }
 else
 {
 echo "Something Error";
 }
 ?>