<?php
 include 'header.php' ; 
 include 'NavBarCustomer.php' ; 
 if(isset($_SESSION['Customer_ID']))
{
     $ClassObject = new Customer();
	 
 $ClassObject1 = new CustomerDetails('Customer');
 ?> 

<br>
 <?php  if (is_a($ClassObject, 'DBConnection'))
	{
        $post_data =  $ClassObject->get_jobdetails('customer');  
		}
		if(sizeof($post_data)>0)
		{
      foreach($post_data as $post)  
         {  
         ?>  
            <div class="container" >     
          <h3> <?php echo $post["jtitle"]; ?> </h3>
              <p>   <?php echo $post["jdesc"]; ?> </p>
			  <div>
			 
			  <span style="float:left;"> Cost : $<?php echo $post["jcost"]; ?></span><br>
			  <span style="float:left;"> Status :<?php  if($post["tradeid"] == 0){echo "On" ;}else { echo "Off";} ?></span>
			  <span style="float:right;">Upload date :<?php echo $post["jadate"]; ?></span><br>
			  <span style="float:right;"> Deadline date :<?php echo $post["jddate"]; ?></span>
			  
			  </div>
         </div>
       <?php  
    }  
	}
	else{
	echo "There is no record found";
	}
?>  
<div class="container">
</div>
<?php 
}

include 'footer.php'; ?>