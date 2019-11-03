<?php
 include 'header.php' ; 
 include 'NavBarCustomer.php' ; 
 
     $ClassObject = new Customer();
 
  if (is_a($ClassObject, 'DBConnection')) 
  {
        $post_data =  $ClassObject->GetConfirmed();  
 }
      foreach($post_data as $post)  
         {  
         ?>  
            <div class="container" >   
<h3> <?php echo $post["name"]; ?></h3>			
          <p> <?php echo $post["jtitle"]; ?> </p>
              <p>   <?php echo $post["jdesc"]; ?> </p>
			  <div>
			  <span style="float:left;"> Your Cost : $<?php echo $post["jcost"]; ?></span><br>
			  <span style="float:left;"> Estimation Cost : $<?php echo $post["lcost"]+ $post["mcost"]; ?></span><br>
			  <span style="float:right;"> Deadline date :<?php echo $post["jddate"]; ?></span>
			  <span style="float:right;"> Estimation date :<?php echo $post["edate"]; ?></span>
			  </div>
         </div>
       <?php  
    }  
?>  
<div class="container">
</div>
<?php include 'footer.php'; ?>