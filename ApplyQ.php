<?php include 'header.php' ;

 include 'navbartrademan.php' ; 
 $id = $_REQUEST['id'];
//echo $id;
   // $ClassObject = new person();

?>

<div class="container">
  <h2>Upload Job </h2>
 <!-- <form action="<?php echo $_SERVER['PHP_SELF'];?>" type="GET" >  -->
  <form action="applyq_prc.php">  

    <div class="form-group">
      <label for="">Material Cost</label>
      <input type="text" class="form-control" id="mcost" name="mcost" required>
    </div>   
	  <div class="form-group">
      <label for="">L Cost</label>
      <input type="number" class="form-control"  id="lcost" name="lcost"  onkeyup="caltotal();" required>
    </div>
	<div class="form-group">
      <label for="">Total Cost</label>
      <input type="number" class="form-control"  id="Tcost" name="" readonly >
    </div>
	  <div class="form-group">
      <label for="">Start Date</label>
      <input type="date" class="form-control"  name="sdate" required>
    </div>
	
	  <div class="form-group">
      <label for="">DeadLine Date</label>
      <input type="date" class="form-control"  name="ddate" required>
    </div>
	  <input type="hidden" name="id" value="<?php echo $id ;?>" /> 
	
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
</div>
<script>
function caltotal()
{
var Mcost = document.getElementById('mcost').value;
var Lcost = document.getElementById('lcost').value;
 document.getElementById('Tcost').value = parseInt(Mcost) + parseInt(Lcost);
}
</script>
