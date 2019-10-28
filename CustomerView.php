<?php
 include 'header.php' ; 
 
     $ClassObject = new person();
 ?> 
<nav class="navbar navbar-expand-md bg-dark navbar-dark  justify-content-center">
 
            <a class="navbar-brand" href="#">Trade</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="">Home</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="insert.php">Add Job</a>
      </li>
    </ul>
  </div>  
</nav>
<br>
 <?php  
        $post_data =  $ClassObject->get_jobdetails('customer');  
      foreach($post_data as $post)  
         {  
         ?>  
            <div class="container" >     
          <h3> <?php echo $post["jtitle"]; ?> </h3>
              <p>   <?php echo $post["jdesc"]; ?> </p>
			  <div>
			  <span style="float:left;"> Cost : $<?php echo $post["jcost"]; ?></span><br>
			  <span style="float:left;"> Status :<?php  if($post["tid"] == 0){echo "On" ;}else { echo "Off";} ?></span>
			  <span style="float:right;">Upload date :<?php echo $post["jadate"]; ?></span><br>
			  <span style="float:right;"> Deadline date :<?php echo $post["jddate"]; ?></span>
			  
			  </div>
         </div>
       <?php  
    }  
?>  
<div class="container">
</div>
<?php include 'footer.php'; ?>