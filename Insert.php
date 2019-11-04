<?php
 include 'header.php';
 include 'NavBarCustomer.php';
 ?>

<div class="row "style="background-image:url('Images/15.png');height:100vh;width:99.7vw;">
  <div class="col-md-6" style="margin-left:25%;margin-top:30px;">
  <h2>Upload Job </h2>
  <form action="insert_prc.php" > 
    <div class="form-group">
      <label for="">Job Title:</label>
      <input type="text" class="form-control"  name="jtitle" required	>
    </div>
    <div class="form-group">
      <label for="">Job describtion :</label>
      <input type="text" class="form-control" name="jdesc" required >
    </div>   
	  <div class="form-group">
      <label for="">Cost</label>
      <input type="number" class="form-control"  name="jcost" required >
    </div>
	  <div class="form-group">
      <label for="">DeadLine Date</label>
      <input type="date" class="form-control"  name="jddate" required >
    </div>
	  
	
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>
