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







?>




<br>
<br>

<div class="page-content-wrap">
<div class="panel panel-default">
<div class="row">
    
 <br>
    <br>
   <Center><h1>View Transaction</h1></Center>

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
                            <input type="text" class="form-control" value="TRAN-0002">
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
                            <input type="text" class="form-control" value="Juan Dela Cruz">
                            </div>                                            
                            <span class="help-block">This value is system generated.</span>
                    </div>
            </div>
         
               <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Transaction Date:</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" name="NewTransactionDate" id="NewTransactionDate" data-validation-engine="validate[required,custom[date]]" value="2018-10-04">                                            
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
                                               <th>Price Per Unit </th>
                                               <th>Accumulated Price </th>
                                             
                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td>2</td>
                                            <td>11+1</td>
                                            <td>Head and Shoulders</td>
                                            <td>48.75</td>
                                            <td>97.5</td>
                                              
                                        </tbody>
                                        
                                     
                                   
                                    </table>
                
               
                
           </div>
             
             
             
             
             
             
             
         
             
             
             
         </div>
         
         <!-- row -->
         <br>
         <br>
         <br>
<div class="row">
         <div class="col-md-9"></div>
         
         
         <div class="col-md-3">
            <label class="control-label">Total Amount to be Paid:</label>  <input type="text" class="input-control" id="TotalAmountToBePaid" value="97.5">
         </div>
         
         
         
</div>
         
         <br>
         <br>
         
          <div class="col-md-9"></div>
         <div class="col-md-3">
             
           
            
         </div>
         
         
         
         
         
         
         
         
         
         
        </div>
        <!-- panel body -->
        
        
        
        
        
        
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
                                                        
                                                        <input type="number" class="form-control" name="Quantity" id="Quantity" value="1" >                            
                                                        
                                                        
                                                        
                                                    
                                                    </div>
                        
                        <br>
                        <br>
                      
                        
                        
                        
                         <label class="col-md-3 control-label">Product Category:</label>
                                                <div class="input-group">                                                 
                                                   
                                                    <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;" id="ProductCategory">
                                                 
                                                       <option>Canned Goods/Noodles</option>
                                                       <option>Coffee/Sugar</option>
                                                       <option>Dairy Products</option>
                                                       <option>Detergent Powder/Fabcon</option>
                                                       <option>Milk(Evap,Powdered,Condensed)</option>
                                                       <option>Oil/Condiments</option>
                                                       <option>Shampoo/Conditioner</option>
                                                        
                                                        
                                                    
                                                    </select>
                                                   
                                            
                            
                        
                    </div>
                             
                        
                        
                        
                        
                        
                        
                        
                        
                        
                          <br>
                        <br>
                      
                        
                        
                        
                         <label class="col-md-3 control-label">Product Name:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;" id="ProductName">
                                            
                                            <option>Ligo Green</option>
                                           <option>Ligo Red</option>
                                             <option>Mega Green</option> 
                                           <option>Mega Red</option> 
                                            <option>Youngs Town Green</option> 
                                           <option>Youngs Red</option> 
                                           
                                            
                                            
                                            
                                            
                                        </select>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                          <br>
                        <br>
                      
                        
                        
                        
                         <label class="col-md-3 control-label">Unit of Measurement:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;" id="UnitOfMeasurement">
                                            
                                            
                                            
                                           
                                        <option>155g</option>
                                         
                                            
                                            
                                        </select>
                    
                            
                            
                        </div>
                        
                        
                         
                          <br>
                        <br>
                      
                        
                        
                
                        
                        
                        
                         <label class="col-md-3 control-label">Supplier:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;">
                                            
                                            
                                            
                                            
                                        <option>Emilus' Supermart</option>     
                                        <option>SM Supermarket</option>  
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        </select>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                        
                        
                        
                        <br>
                        <br>
                        
                            <label class="col-md-3 control-label">Price Per Unit:</label>
                            <label id="PricePerUnit">16.55</label>            
                                                    
                        
                        <br>
                        <br>
                      
                        
                            <label class="col-md-3 control-label">Accumulated Price:</label>
                            <label id="AccumulatedPrice">16.55</label>                
                                                    
                        
                        <br>
                        <br>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <br>
                        <br>
                        <br>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="btnOrderNow" data-dismiss="modal">Order Now</button>  
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>                        
                    </div>
                </div>
            </div>
        </div> 
        
        


</div>

<!-- modal add new product -->









<div class="modal" id="modal_editorder" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead">Product List</h4>
                    </div>
                    <div class="modal-body">
                                                            
                                                <label class="col-md-3 control-label">Quantity:</label>
                                               
                                                    <div class="input-group">
                                                        
                                                        <input type="number" class="form-control" name="Quantity" id="Quantity" value="2" >                            
                                                        
                                                        
                                                        
                                                    
                                                    </div>
                        
                        <br>
                        <br>
                      
                        
                        
                        
                         <label class="col-md-3 control-label">Product Category:</label>
                                                <div class="input-group">                                                 
                                                   
                                                    <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;" id="ProductCategory">
                                                 
                                                       <option>Canned Goods/Noodles</option>
                                                       <option>Coffee/Sugar</option>
                                                       <option>Dairy Products</option>
                                                       <option>Detergent Powder/Fabcon</option>
                                                       <option>Milk(Evap,Powdered,Condensed)</option>
                                                       <option>Oil/Condiments</option>
                                                       <option selected>Shampoo/Conditioner</option>
                                                        
                                                        
                                                    
                                                    </select>
                                                   
                                            
                            
                        
                    </div>
                             
                        
                        
                        
                        
                        
                        
                        
                        
                        
                          <br>
                        <br>
                      
                        
                        
                        
                         <label class="col-md-3 control-label">Product Name:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;" id="ProductName">
                                            
                                            <option>Head and Shoulder</option>
                                           <option>Palmolive Green</option>
                                             <option>Rejoice</option> 
                                           <option>Mega Red</option> 
                                            <option>Youngs Town Green</option> 
                                           <option>Youngs Red</option> 
                                           
                                            
                                            
                                            
                                            
                                        </select>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                          <br>
                        <br>
                      
                        
                        
                        
                         <label class="col-md-3 control-label">Unit of Measurement:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;" id="UnitOfMeasurement">
                                            
                                            
                                            
                                           
                                        <option>11+1</option>
                                         
                                            
                                            
                                        </select>
                    
                            
                            
                        </div>
                        
                        
                         
                          <br>
                        <br>
                      
                        
                        
                
                        
                        
                        
                         <label class="col-md-3 control-label">Supplier:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;">
                                            
                                            
                                            
                                            
                                        <option selected>Emilus' Supermart</option>     
                                        <option>SM Supermarket</option>  
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        </select>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                        
                        
                        
                        <br>
                        <br>
                        
                            <label class="col-md-3 control-label">Price Per Unit:</label>
                            <label id="PricePerUnit">48.85</label>            
                                                    
                        
                        <br>
                        <br>
                      
                        
                            <label class="col-md-3 control-label">Accumulated Price:</label>
                            <label id="AccumulatedPrice">97.5</label>                
                                                    
                        
                        <br>
                        <br>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <br>
                        <br>
                        <br>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="btnOrderNow" data-dismiss="modal">Order Now</button>  
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>                        
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




<script>

       var OrdersTable = $('#customers2').DataTable();
  
  
   
    
    OrdersTable.on('click', '#RemoveRow', function () {
       
        OrdersTable.row($(this).parents('tr')).remove().draw(false);
    });
    
     OrdersTable.on('click', '#EditRow', function () {
             $('#modal_editorder').modal({
                    show: 'true'
                });
    });
    

 $("#ProductCategory").change(function () {
        $('#ProductName').empty();
        $('#UnitOfMeasurement').empty();
     
     
        var newOptionProductName = $('<option>'+"Clear Pink"+'</option>');
        $('#ProductName').append(newOptionProductName);
     
           var newOptionProductName = $('<option>'+"Cream Silk Pink"+'</option>');
        $('#ProductName').append(newOptionProductName);
     
         var newOptionProductName = $('<option>'+"Head and Shoulders"+'</option>');
        $('#ProductName').append(newOptionProductName);
     
     
          var newOptionProductName = $('<option>'+"Pantene Hairfall"+'</option>');
        $('#ProductName').append(newOptionProductName);
     
     
        var newOptionProductName = $('<option>'+"Sunsilk Green"+'</option>');
        $('#ProductName').append(newOptionProductName);
     
        var newOptionProductName = $('<option>'+"Sunsilk Pink"+'</option>');
        $('#ProductName').append(newOptionProductName);
     
     
     
        var newOptionProductName = $('<option>'+"11 + 1"+'</option>');
        $('#UnitOfMeasurement').append(newOptionProductName);
     
     
          $("#PricePerUnit").empty();
          $("#PricePerUnit").append("48.75");
     
     
          $("#AccumulatedPrice").empty();
          $("#AccumulatedPrice").append("48.75");
     
     
     
    });
    
    
    
    
     $("#btnOrderNow").click(function () {
            var dataTable = $('#customers2').DataTable();
            dataTable.row.add(['2','11+1','Head and Shoulders' , '48.85' ,'97.7', '<button class="btn btn-success btn-md" id="EditRow"> Edit Order </button>','<button class="btn btn-danger btn-md" id="RemoveRow"> Remove Order </button>']).draw();
         
            
            document.getElementById('TotalAmountToBePaid').value = "97.5";
     
     
    });
    
    
      $('#Quantity').on('input', function() {
            var PricePerUnitVariable = $('#PricePerUnit').text(); 
            var QuantityVariable = $('#Quantity').val(); 
            
            var AccumulatedPrice = PricePerUnitVariable * QuantityVariable;
            $("#AccumulatedPrice").empty();
            $("#AccumulatedPrice").append(AccumulatedPrice.toFixed(2));
      });

    
    
       


</script>

        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>