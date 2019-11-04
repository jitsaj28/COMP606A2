<?php
include 'lib/inc_classes.php' ; 

 $ClassObject = new Customer();
 
 
	$txtuname=$_GET["txtuname"]; 
	$txtupass=$_GET["txtupass"]; 
	$result1 = 0;
	if (is_a($ClassObject, 'DBConnection'))
	{
   if(isset($txtuname))
	{
	if(isset($txtupass))
	{
	$result1 =  $ClassObject->CheckUser($txtuname,$txtupass);   
	}
	}
   
}
	

if($result1 == 1)
{	
?>
<script>
window.location.href = "CustomerView.php";
</script>
 <?php
 }
 else
 {
 ?>

<script>
window.location.href = "index.php?msg=w";
</script>
 <?php
 }
 ?>