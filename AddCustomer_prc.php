<?php

 include 'header.php' ; 

 $ClassObject = new Customer();
	
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
 $result =  $ClassObject->AddCustomer($txtName,$txtAddress,$txtemail,$txtmobileno,$txtuname,$txtupass);  
 }
} 
if($result == 1)
{	
?>
success .<a href="index.php">Click</a>
 <?php
 }
 ?>