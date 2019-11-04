<?php
require 'header.php';
?>
        <script>
          
$(document).ready(function() 
{
			var ms = getQueryString("msg");
			if(ms == "w")
			{
			$('#btnfailed').click();
			}
			
});
			
          function remove(){
		  $('#lbluname').html('');
		   $('#lblupass').html('');
           }
            function LoginValidation(){
			remove();
			   var txtuname = document.getElementById('txtuname').value;
			   var txtupass = document.getElementById('txtupass').value;
               
			   if((txtuname == "")||(txtupass == ""))
			   {
			   if(txtuname == "") { $('#lbluname').html('Enter the User Name'); }
			   if(txtupass == "") {$('#lblupass').html('Enter the Password');}
			   }
			   else
			   {			   
			   window.location.href="login_prc.php?txtuname="+txtuname+"&txtupass="+txtupass  + "";
               }
            }
        </script>
   
        <?php
        
        ?>
		
<div class="row container-fluid" style="background-image:url('Images/1.jpg'); height:100vh;">
<div class = "col-md-4" style="margin-left:35%;margin-top:10%;">
      <div class="container-fluid" style="border:1px solid #fff0ff;padding:5%;border-radius:5%;">
	  
	  
		<h3>Login Customer</h3>
		
            <div class="row">
              
				<div class="col-md-12">
                    <div class="form-group ">
                        <label for="normal-input" class="form-control-label">User Name  </label>
                        <input id="txtuname" class="form-control" value="">
						<label id="lbluname" style="color:red;"></label>
                    </div>
                </div>
					<div class="col-md-12">
                    <div class="form-group ">
                        <label for="normal-input" class="form-control-label">User Password  </label>
                        <input id="txtupass" type="password" class="form-control" value="">
						<label id="lblupass" style="color:red;"></label>
                    </div>
                </div>
            </div>
            <div class="" style="margin-left:25%;" >
                <label id="lblError" for="normal-input" class="form-control-label" style="color:red;"></label>
                <a href="#" onclick="LoginValidation();"  >
                    <button  class="btn btn-md btn-primary " style="margin-top:0px;display:inline">Login</button></a>

					
					
					
			</div>
		<p style="margin-left:40px;margin-top:25px;"><a href="AddCustomer.php">Sign up Here?</a>
		<a href="TradeManLogin.php">Go To Trademan Login</a></p>
        </div>
		</div>
		
</div>