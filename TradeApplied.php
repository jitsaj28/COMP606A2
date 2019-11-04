<?php
 include 'header.php' ; 
 
 include 'navbartrademan.php' ; 
     $ClassObject = new trademan();
 ?> 

<div class="row container-fluid" style="background-color:#ffffb9;height:100vh;width:99.8vw;margin-top:0px;padding-top:30px;">
 <?php  
        if (is_a($ClassObject, 'DBConnection'))
	{
	$post_data =  $ClassObject->GetAppliedJob();  
	}
      foreach($post_data as $post)  
         {  
         ?>  
           
	 <div class="col-md-3 container-fluid" style="margin-left:50px;margin-right:50px;border:1px solid black;height:300px;border-radius:3%;"> 
		<div class="row">			
         <div class="col-md-12">
			<h3> <?php echo $post["jtitle"]; ?></h3>
            <p>   <?php echo $post["jdesc"]; ?> </p>
			  </div>
			  <div class="col-md-6">
			  <p style=""> Cost :<br> $<?php echo $post["jcost"]; ?></p>
			  <p style=""> Deadline date :<br><?php echo $post["jddate"]; ?></p>
			  </div> 
			  <div class="col-md-6">
			  <p style=""> Your Cost : <br>$<?php echo $post["lcost"]+ $post["mcost"]; ?></p>
			  <p style=""> Start date :<br><?php echo $post["sdate"]; ?></p>
			  <p style=""> End  date :<br><?php echo $post["edate"]; ?></p>
			  </div>
         </div>
         </div>
       <?php  
    }  
?>  
</div>
<?php include 'footer.php'; ?>