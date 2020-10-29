<?php

session_start();

//$class = ($page == 'one') ? 'class="active"' : '';
include 'adminlayout.php';




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


$RetrieveTransactionID;

$sql = "SELECT MAX(TransactionID)+1 FROM tblformtransactions ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)){
        
       $RetrieveTransactionID = $row['TransactionID'];
       
    }
    
}





?>




<br>
<br>

<div class="page-content-wrap">
<div class="panel panel-default">
<div class="row">
    
 <br>
    <br>
   <Center><h1>New Transactions</h1></Center>

   <br>
   <br>
    <br>
    
     <div class="page-content-wrap">
    <div class="panel panel-default"> 
        
     <div class="panel-body">    
    
         
         <div class="row">
    <!-- column 1 -->
    <div class="col-md-5">
        
        
        
       
              <div class="form-group">
                    <label class="col-md-3 control-label">*Transaction ID:</label>
                    <div class="col-md-9">                                            
                            <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="text" class="form-control" value="<?php echo $RetrieveTransactionID; ?>" disabled>
                            </div>                                            
                            <span class="help-block">This transaction ID is system generated.</span>
                    </div>
            </div>
        
        
        
              <div class="form-group">
                   <label class="col-md-3 control-label">Transaction Details: </label>
                  
                   <div class="col-md-9">                                            
                        <textarea class="form-control" rows="5" name="Transactiondetails" id="TransactionDetails"></textarea>
                        <span class="help-block">Additional details about this transaction</span>
                   </div>
             </div>
        
        
        
        
        
        
    
    </div>
    
        <!-- column 1 ending -->
    
    
     <div class="col-md-5">
        
        
          <div class="form-group">
                    <label class="col-md-3 control-label">*Name:</label>
                    <div class="col-md-9">                                            
                            <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="text" class="form-control" value="Louie Melo" disabled>
                            </div>                                            
                            <span class="help-block">This value is system generated.</span>
                    </div>
            </div>
         
               <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Transaction Date:</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" name="NewTransactionDate" id="NewTransactionDate" data-validation-engine="validate[required,custom[date]]" value="">                                            
                                                    </div>
                                                    <span class="help-block">Click on the field to select on Calendar view.</span>
                                                </div>
               </div>
                                             
        
        
        
        
        
        
    
    </div>
         
         </div> <!-- row ending -->
         
         
         <!-- row -->
         
         <div class="row">
         <center><h1>Products Ordered:</h1></center>
             
             
             
             
             <div class="btn-group pull-right">
                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false'});"><img src='img/icons/json.png' width="24"/> JSON</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"><img src='img/icons/json.png' width="24"/> JSON (ignoreColumn)</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'true'});"><img src='img/icons/json.png' width="24"/> JSON (with Escape)</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'xml',escape:'false'});"><img src='img/icons/xml.png' width="24"/> XML</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'sql'});"><img src='img/icons/sql.png' width="24"/> SQL</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='img/icons/csv.png' width="24"/> CSV</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='img/icons/txt.png' width="24"/> TXT</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
    </div>
             
             
             
              <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                                <thead>
                                            <tr>
                                               <th>Quantity</th>
                                               <th>Unit of Measurement</th> 
                                               <th>Product Name</th>
                                               <th>Pricing </th>
                                               <th> </th>
                                            </tr>
                                        </thead>
                                        
                                     
                                   
                                    </table>
                
               <button class="btn btn-info active" data-toggle="modal" data-target="#modal_addnewproduct">Add New Record</button>
                
           </div>
             
             
             
             
             
             
             
             
             
             
             
         </div>
         
         <!-- row -->
    
        </div>
        
         </div> <!-- panel default -->
    
    
    
    </div>  
  
    
   
        

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
        


<div class="modal" id="modal_addnewproduct" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead">Product List</h4>
                    </div>
                    <div class="modal-body">
                                                            
                                                <label class="col-md-3 control-label">Quantity:</label>
                                               
                                                    <div class="input-group">
                                                        
                                                        <input type="text" class="form-control" name="NewComplaintTransactionComplainant" id="NewComplaintTransactionComplainant" >                            
                                                        
                                                        
                                                        
                                                    
                                                    </div>
                        
                        <br>
                        <br>
                      
                        
                        
                        
                         <label class="col-md-3 control-label">Product Category:</label>
                                                <div class="input-group">                                                 
                                                   
                                                    <select class="form-controlv2">
                                                        
                                                        <?php 
                   
	                                       
//echo frontEcho($activeindicator);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iucsproducts_db";

$ctr = 0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 

                                           $row;
                    
                                           $result = $conn->query("SELECT ProductCategoryID,ProductCategoryName FROM tblproductcategories ORDER BY ProductCategoryName DESC ");
                 
                  
                  
                          
                                          while($row = mysqli_fetch_array($result)){
                                                    //$selected = ($_SESSION['AddNewHouseholdCensusYear'] == $row['CensusYearID'] ? 'selected="selected"' : '');
                                                    /*  echo "<option value='".$row['strUOMCode']."' '.$s elected.'>".$row['strUOMName']."</option>"; */
                                                    echo '<option value ="' . $row['ProductCategoryID'] . '" '. $selected .'>' . $row['ProductCategoryName'] . '</option>';
                              
                                              
                                                if($ctr == 0){
                                                    $_SESSION['AddNewProductFirstCategory'] = $row['ProductCategoryID'];
                                                }
                                              
                                              $ctr++;
                                            }
                    
                    
                                ?>
                                                          
                                                    </select>
                                                   
                                            
                            
                        
                    </div>
                             
                        
                        
                        
                        
                        
                        
                        
                        
                        
                          <br>
                        <br>
                      
                        
                        
                        
                         <label class="col-md-3 control-label">Product Name:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select class="form-controlv2">
                                            
                                            
                                            
                                            
                                            <?php 
                   
	                                       
//echo frontEcho($activeindicator);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iucsproducts_db";
$ctr = 0;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 

                                           $row;
                    
                                           $result = $conn->query("SELECT ProductID,ProductName FROM tblproducts WHERE ProductCategoryID = '".$_SESSION['AddNewProductFirstCategory']."' ORDER BY ProductName DESC ");
                 
                  
                  
                          
                                          while($row = mysqli_fetch_array($result)){
                                                    //$selected = ($_SESSION['AddNewHouseholdCensusYear'] == $row['CensusYearID'] ? 'selected="selected"' : '');
                                                    /*  echo "<option value='".$row['strUOMCode']."' '.$s elected.'>".$row['strUOMName']."</option>"; */
                                                    echo '<option value ="' . $row['ProductID'] . '" '. $selected .'>' . $row['ProductName'] . '</option>';
                              
                                              
                                              
                                                if($ctr == 0){
                                                    $_SESSION['AddNewProductSecondCategory'] = $row['ProductID'];
                                                }
                                              
                                              $ctr++;
                                              
                                                   
                                            }
                    
                    
                                ?>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        </select>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                          <br>
                        <br>
                      
                        
                        
                        
                         <label class="col-md-3 control-label">Unit of Measurement:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select class="form-controlv2">
                                            
                                            
                                            
                                            
                                            <?php 
                   
	                                       
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

                                           $row;
                    
                                           $result = $conn->query("SELECT tblunitofmeasurement.UOMID,tblunitofmeasurement.UOMName FROM tblproductxuom,tblunitofmeasurement WHERE tblproductxuom.productxuomproductid = '".$_SESSION['AddNewProductSecondCategory']."' AND tblproductxuom.productxuomuomid = tblunitofmeasurement.uomid ORDER BY UOMName DESC ");
                 
                  
                  
                          
                                          while($row = mysqli_fetch_array($result)){
                                                    //$selected = ($_SESSION['AddNewHouseholdCensusYear'] == $row['CensusYearID'] ? 'selected="selected"' : '');
                                                    /*  echo "<option value='".$row['strUOMCode']."' '.$s elected.'>".$row['strUOMName']."</option>"; */
                                                    echo '<option value ="' . $row['UOMID'] . '" '. $selected .'>' . $row['UOMName'] . '</option>';
                              
                                              
                                                   
                                            }
                    
                    
                                ?>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        </select>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                        
                    </div>
                </div>
            </div>
        </div> 
        
        
</div>

        
        
        
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




        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>