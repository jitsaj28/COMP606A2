<?php
 include 'header.php' ; 
 include 'NavBarCustomer.php' ; 
 if(isset($_SESSION['Customer_ID']))
{
     $ClassObject = new Customer();
	 
 $ClassObject1 = new CustomerDetails('Customer');
 ?> 

<br>

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
<div class="row container-fluid" style="background-color:#ffffb9;height:100vh;width:99.8vw;margin-top:-25px;padding-top:10px;">
 <?php  if (is_a($ClassObject, 'DBConnection'))
	{
        $post_data =  $ClassObject->get_jobdetails('customer');  
		}
		if(sizeof($post_data)>0)
		{
      foreach($post_data as $post)  
         {  
         ?>  
            <div class="col-md-3 container-fluid" style="margin-left:50px;margin-right:50px;border:1px solid black;height:200px;border-radius:3%;"> 
		<div class="row">			
         <div class="col-md-12">
		 <h3> <?php echo $post["jtitle"]; ?> </h3>
              <p>   <?php echo $post["jdesc"]; ?> </p>
			
			 </div>
			 
<div class="col-md-6">			 
			 <p>Upload date  <br><?php echo $post["jadate"]; ?></p>
			  <p> Cost  : $<?php echo $post["jcost"]; ?></p>
			  
			  
			  </div>
			  <div class="col-md-6">
			  <p> Deadline date <br><?php echo $post["jddate"]; ?></p>
			  </div>
         </div>
         </div>
		 
		 
       <?php  
    }
	
	}
	
	else{
	?>
	<div>There no record</div>
	<?php 
	}
?>  
</div>
<?php 
}
 