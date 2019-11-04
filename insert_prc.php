<?php
    include 'header.php'; 
    $ClassObject = new Customer();
    $jtitle = $_GET['jtitle'];
    $jdesc = $_GET['jdesc'];
    $jcost = $_GET['jcost'];
    $jddate = $_GET['jddate'];
	 if (is_a($ClassObject, 'DBConnection'))
	 {
	 if(isset($jtitle))
	 {
    $result =  $ClassObject->InsertJob( $jtitle,$jdesc,$jcost,$jddate); 
		}	
		}
	
if($result == 1)
{	
?>

<script>
window.location.href = "CustomerView.php?msg=s";
</script>
 <?php
 }
 ?>