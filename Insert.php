<?php include 'header.php' ?>

<div class="container">
  <h2>Upload Job </h2>
  <form action="insert_prc.php" > 
    <div class="form-group">
      <label for="">Job Title:</label>
      <input type="text" class="form-control"  name="jtitle">
    </div>
    <div class="form-group">
      <label for="">Job describtion :</label>
      <input type="text" class="form-control" name="jdesc">
    </div>   
	  <div class="form-group">
      <label for="">Cost</label>
      <input type="number" class="form-control"  name="jcost">
    </div>
	  <div class="form-group">
      <label for="">DeadLine Date</label>
      <input type="date" class="form-control"  name="jddate">
    </div>
	  
	
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
