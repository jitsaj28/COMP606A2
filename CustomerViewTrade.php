<?php
 include 'header.php' ; 
 
     $ClassObject = new Customer();
	 require "NavBarCustomer.php";
 ?> 

<div class="row container-fluid" style="background-color:#ffffb9;height:100vh;width:99.8vw;padding-top:10px;">
 <?php  
  if (is_a($ClassObject, 'DBConnection')) 
  {
        $post_data =  $ClassObject->gettrademandetails();  
}
      foreach($post_data as $post)  
         {  
         ?>   
		 <div class="col-md-3 container-fluid" style="margin-left:50px;margin-right:50px;border:1px solid black;height:370px;border-radius:3%;"> 
		<div class="row">			
				<div class="col-md-12">
						<h3> <?php echo $post["name"]; ?></h3>			
						<p> <?php echo $post["jtitle"]; ?> </p>
						<p>   <?php echo $post["jdesc"]; ?> </p>
			  </div>
			   <div class="col-md-6">
			  <p style=""> Your Cost :<br> $<?php echo $post["jcost"]; ?></p>
			  <p style=""> Deadline date :<br><?php echo $post["jddate"]; ?></p>
			  </div> 
			  <div class="col-md-6">
			  <p style=""> Estimation Cost : <br>$<?php echo $post["lcost"]+ $post["mcost"]; ?></p>
			  <p style=""> start date :<br><?php echo $post["sdate"]; ?></p>
			  <p style=""> Estimation date :<br><?php echo $post["edate"]; ?></p>
			  </div>
			  <div class="col-md-12" style=""><a href="grand.php?id=<?php echo $post["JobID"]?>,&tid=<?php echo $post["TradeID"]?>" ><button class="btn btn-success btn-block" >Grand</button></a></div>
         </div>
         </div>
       <?php  
    }  
?>  
</div>
<?php include 'footer.php'; ?>