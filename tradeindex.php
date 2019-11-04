<?php
 include 'header.php' ; 
 include 'navbartrademan.php' ; 

 
    $ClassObject = new Customer();
 ?> 
<script>
$(document).ready(function() 
{
			var ms = getQueryString("msg");
			if(ms == "s")
			{
			$('#btnsuccess').click();
			}
			
});
</script>
<div class="row container-fluid" style="background-color:#ffffb9;height:100vh;width:99.8vw;padding-top:10px;">
<br>
 <?php  
 if (is_a($ClassObject, 'DBConnection'))
	{
        $post_data =  $ClassObject->get_jobdetails('trade');  
		}
      foreach($post_data as $post)  
         {  
         ?>  
		 <div class="col-md-3 container-fluid" style="margin-left:50px;margin-right:50px;border:1px solid black;height:270px;border-radius:3%;"> 
		<div class="row">
		<div class="col-md-12">
              <h3> <?php echo $post["jtitle"]; ?> </h3>
              <p>   <?php echo $post["jdesc"]; ?> </p>
			</div>
			<div class="col-md-6">
			  <p >Cost :<br> $<?php echo $post["jcost"]; ?></p>
			   <p >Upload date :<br><?php echo $post["jadate"]; ?></p>
			   </div>
			<div class="col-md-6">
			  <p > Deadline date :<br><?php echo $post["jddate"]; ?></p>
			  </div>
			  <div class="col-md-12">
			  <a href="ApplyQ.php?id=<?php echo $post["id"]; ?>" ><button class="btn btn-success btn-block" >Apply quote</button></a>
			  </div>
         </div>
         </div>
       <?php  
    }  
?>  

</div>
<?php include 'footer.php'; ?>