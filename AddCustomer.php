<?php

require_once 'header.php';
?><div class="row container-fluid" style="background-image:url('Images/12.jpg'); height:100vh;">

      

        <script>
            var getQueryString = function (field, url) {
                var href = url ? url : window.location.href;
                var reg = new RegExp('[?&]' + field + '=([^&#]*)', 'i');
                var string = reg.exec(href);
                return string ? string[1] : null;
            };
        </script>
        
        <script type="text/javascript">
               
           function Remove()
		   {
		   $('#lblname').html('');
		   $('#lbladdress').html('');
		   $('#lblmobileno').html('');
		   $('#lblemail').html('');
		   $('#lbluname').html('');
		   $('#lblupass').html('');
		   }
		   function removedata()
		   {
			   document.getElementById('txtName').value  ="";
			   document.getElementById('txtAddress').value ="";
			    document.getElementById('txtemail').value = "";
			    document.getElementById('txtmobileno').value  ="";
			  document.getElementById('txtuname').value ="";
			   document.getElementById('txtupass').value ="";
		   
		   }
            function SaveDetails(){
			Remove();
			   var txtName = document.getElementById('txtName').value;
			   var txtAddress = document.getElementById('txtAddress').value;
			   var txtemail = document.getElementById('txtemail').value;
			   var txtmobileno = document.getElementById('txtmobileno').value;
			   var txtuname = document.getElementById('txtuname').value;
			   var txtupass = document.getElementById('txtupass').value;
			   
			   if((txtName =="")||(txtAddress =="")||(txtemail == "") || (txtmobileno =="" ) || (txtuname == "" )||(txtupass ==""))
			   {
			   if(txtName =="") { $('#lblname').html('Enter the name');}
			   if(txtAddress ==""){$('#lbladdress').html('Enter the address');}
			   if(txtemail == "") {$('#lblemail').html('Enter Email');}
			   if(txtmobileno =="" ) {$('#lblmobileno').html('Enter the Mobile no');}
			   if(txtuname == "" ){ $('#lbluname').html('Enter User Name');}
			   if(txtupass ==""){$('#lblupass').html('Enter Password');}
			   }
			   else
			   {
               window.location.href="AddCustomer_prc.php?txtName="+txtName+"&txtAddress="+txtAddress+"&txtemail="+txtemail+"&txtmobileno="+txtmobileno+"&txtuname="+txtuname+"&txtupass="+txtupass  + "";
                }
            }
        </script>
   
        <?php
        
        ?>
        <div class="container-fluid">
        
		<h3>Add Customer</h3>
		
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label"> Name </label>
                        <input id="txtName" class="form-control" value="">
						<label id="lblname" style="color:red;"></label>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">Address </label>
                        <input id="txtAddress" class="form-control" value="">						
						<label id="lbladdress" style="color:red;"></label>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">Email  </label>
                        <input id="txtemail" class="form-control" value="">						
						<label id="lblemail" style="color:red;"></label>
                    </div>
                </div>
				<div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">Mobileno  </label>
                        <input id="txtmobileno" class="form-control" value="">						
						<label id="lblmobileno" style="color:red;"></label>
                    </div>
                </div>
				<div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">User Name  </label>
                        <input id="txtuname" class="form-control" value="">
						<label id="lbluname" style="color:red;"></label>
                    </div>
                </div>
					<div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">User Password  </label>
                        <input id="txtupass" class="form-control" value="">
						<label id="lblupass" style="color:red;"></label>
                    </div>
                </div>
            </div>
            <div class="float_right_form_bottom" style="display:flex">
                <label id="lblError" for="normal-input" class="form-control-label" style="color:red;"></label>
                <a href="#" onclick="SaveDetails();"  >
                    <button  class="btn btn-sm btn-primary form_btn_add" style="margin-top:0px;display:inline">Save</button></a>

                <a href="#" style="margin-left:10px"> 
                    <button type="button" class="btn btn-sm btn-secondary" onclick="removedata();">Cancel</button></a>
            </div>
<a href="index.php" >Go to Login Page</a>
        </div>
