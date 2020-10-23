<?php

session_start();

//$class = ($page == 'one') ? 'class="active"' : '';
include 'userlayout.php';




//echo frontEcho($activeindicator);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iucsproducts_db";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 





    $PasswordRetrieve = $_SESSION['UserUserPassword'];
    $UserIDRetrieve = $_SESSION['UserUserID'];



?>




<br>
<br>

<div class="page-content-wrap">
<div class="panel panel-default">
<div class="row">
    <form action="UpdatePassword.php" method="post" id="RegistrationForm" name="RegistrationForm">
 <br>
    <br>
   <Center><h1>Change Password</h1></Center>

   <br>
   <Br>
   <br>
   
        
        <div class="col-md-3"></div>
        
           <div class="col-md-5">
        
               
               <input type="hidden" name="UserID" id="UserID" value="<?php echo $UserIDRetrieve; ?>">
               
                  <div class="form-group">
                    <label class="col-md-3 control-label">*Current Password:</label>
                    <div class="col-md-9">                                            
                            <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="password" class="form-control" placeholder="" name="CurrentPassword" id="CurrentPassword">
                            </div>                                            
                            <span class="help-block"></span>
                    </div>
            </div>
        
   
               <br>
               <br>
               
                   <div class="form-group">
                    <label class="col-md-3 control-label">*Password:</label>
                    <div class="col-md-9">                                            
                            <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="password" class="form-control" placeholder="" name="NewPassword" id="NewPassword">
                            </div>                                            
                            <span class="help-block"></span>
                    </div>
            </div>
               
               
        
            
                    
                    <br>
                    <br>
               
                   <div class="form-group">
                    <label class="col-md-3 control-label">*Confirm Password:</label>
                    <div class="col-md-9">                                            
                            <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="password" class="form-control" placeholder="" name="ConfirmNewPassword" id="ConfirmNewPassword">
                            </div>                                            
                            <span class="help-block"></span>
                    </div>
            </div>
               
               
               
                    <br>
                    <br>
                 <br>
                    <br>
                 
               
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button class="btn btn-md btn-success" type="submit" id="btnCreateAccount"> SAVE CHANGES</button>
            
        
         <a href="userhome.php">   <button class="btn btn-md btn-primary"  type="button"> CANCEL   </button></a>
        
               <br>
               <br>
        
        
        
        
    
    </div>
        
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            
                
          
        </div>
        
        
        
        </form>
        

</div> <!-- first row -->

    
    <!-- second row -->
 
<div class="row">
  
   
        
   
       
        
</div> <!-- row end -->
 <!-- first panel -->
      
        
      
        
           
        
        
        <div class="panel panel-default">
<div class="row">
    
    


                    
        
        
</div> <!-- row row row -->
        </div>
        
        
        
        <!---         END OF CRIME HOTSPOT -->
        
        
       
        <!-- end of collection charts -->
        
        
        
        
        
        
        
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!--- end of household profiling end of household profiling end of household profiling end of household profiling -->
    
    
    
    
    <!-- end citizen profiling end citizen profiling end citizen profiling -->
    
    
    
    
    
    
    
    
    
    
    
    
    </div> <!-- panel end -->
    
    </div> <!-- page content wrap -->
     
        
  
        
        
        
     </div>  <!-- PAGE CONTENT WRAP -->
        
        
        
        
        
        
         <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="systemlogin.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
        
        
        
     <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->

        
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
  <script type="text/javascript" src="js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/fullcalendar.min.js"></script>

        <!-- START THIS PAGE PLUGINS-->        
        <script type="text/javascript" src="js/plugins/icheck/icheck.min.js"></script>        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
          <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->        


<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins/tableexport/tableExport.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/jquery.base64.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/html2canvas.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/base64.js"></script>


        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
        <script type="text/javascript" src="js/demo_charts_morris.js"></script>


<script>



$("#btnCreateAccount").click(function () {
       var Password1 = $("#NewPassword").val();
       var Password2 = $("#ConfirmNewPassword").val();
       var GetCurrentPassword = $("#CurrentPassword").val();
    
        if(Password1 !=  Password2){
            alert("New Password do not match!");
            
            
            
            $("#RegistrationForm").submit(function(e){
                        e.preventDefault();
            });
            
            
            
            
        }
    
        else if(Password1 == Password2){
            //alert("HAHA");
            
            
            if(GetCurrentPassword == '<?php echo $PasswordRetrieve; ?>'){
                
            
                   $("#RegistrationForm")[0].submit();
            }
            
            
            else{
                alert("Change Password failed! The password you have entered is incorrect.");
                e.preventDefault();
               
            }
        }
    
    
    
});






</script>

        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>