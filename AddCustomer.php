<?php

require_once 'header.php';
?>
        <script>
            var getQueryString = function (field, url) {
                var href = url ? url : window.location.href;
                var reg = new RegExp('[?&]' + field + '=([^&#]*)', 'i');
                var string = reg.exec(href);
                return string ? string[1] : null;
            };
        </script>
        
        <script type="text/javascript">
           
           
            function SaveDetails(){
			   var txtName = document.getElementById('txtName').value;
			   var txtAddress = document.getElementById('txtAddress').value;
			   var txtemail = document.getElementById('txtemail').value;
			   var txtmobileno = document.getElementById('txtmobileno').value;
			   var txtuname = document.getElementById('txtuname').value;
			   var txtupass = document.getElementById('txtupass').value;
               window.location.href="AddCustomer_prc.php?txtName="+txtName+"&txtAddress="+txtAddress+"&txtemail="+txtemail+"&txtmobileno="+txtmobileno+"&txtuname="+txtuname+"&txtupass="+txtupass  + "";
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
                        <input id="txtName" class="form-control" value=" ">
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">Address </label>
                        <input id="txtAddress" class="form-control" value=" ">
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">Email  </label>
                        <input id="txtemail" class="form-control" value="">
                    </div>
                </div>
				<div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">Mobileno  </label>
                        <input id="txtmobileno" class="form-control" value="">
                    </div>
                </div>
				<div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">User Name  </label>
                        <input id="txtuname" class="form-control" value="">
                    </div>
                </div>
					<div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">User Password  </label>
                        <input id="txtupass" class="form-control" value="">
                    </div>
                </div>
            </div>
            <div class="float_right_form_bottom" style="display:flex">
                <label id="lblError" for="normal-input" class="form-control-label" style="color:red;"></label>
                <a href="#" onclick="SaveDetails();"  >
                    <button  class="btn btn-sm btn-primary form_btn_add" style="margin-top:0px;display:inline">Save</button></a>

                <a href="#" style="margin-left:10px"> 
                    <button type="button" class="btn btn-sm btn-secondary ">Cancel</button></a>
            </div>

        </div>
