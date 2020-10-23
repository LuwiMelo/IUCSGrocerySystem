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
$RetrieveTransactionID;

$sql = "SELECT MAX(TransactionID)+1 AS 'MaxID' FROM tblformtransactions ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)){
        
       $RetrieveTransactionID = $row['MaxID'];
        
        if($RetrieveTransactionID == NULL){
            $RetrieveTransactionID = "1";
        }
       
    }
    
}



$UserIDSession = $_SESSION['UserUserID'];




$CtrFirstCategory = 0;                         
$FirstCategory;      
$CtrSecondCategory = 0;
$SecondCategory;
$FirstSupplier;
$FirstPrice;


$DateToday = date("Y/m/d");




?>




<br>
<br>

<div class="page-content-wrap">
<div class="panel panel-default">
<div class="row">
    
 <br>
    <br>
   <Center><h1>Purchase Groceries Form</h1></Center>

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
                            <input type="text" class="form-control" value="<?php echo $RetrieveTransactionID; ?>">
                                
                            <input type="hidden" name="TransactionID" id="TransactionID" value="<?php echo $RetrieveTransactionID; ?>">
                            </div>                                            
                            <span class="help-block">This transaction ID is system generated.</span>
                    </div>
            </div>
        
        
        
              <div class="form-group">
                   <label class="col-md-3 control-label">Transaction Details: </label>
                  
                   <div class="col-md-9">                                            
                        <textarea class="form-control" rows="5" name="TransactionDetails" id="TransactionDetails" name></textarea>
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
                            <input type="text" class="form-control" value="<?php $FullName = $RetrieveFirstName.' '.$RetrieveLastName;  echo $FullName; ?>">
                            <input type="hidden" name="TransactionName" id="TransactionName" value="<?php echo $UserIDSession; ?>">
                            </div>                                            
                            <span class="help-block">This value is system generated.</span>
                    </div>
            </div>
         
               <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Transaction Date:</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" name="TransactionDate" id="TransactionDate" data-validation-engine="validate[required,custom[date]]" value="<?php echo $DateToday; ?>">                                            
                                                    </div>
                                                    <span class="help-block">Click on the field to select on Calendar view.</span>
                                                </div>
               </div>
                                             
        
        
        
        
        
        
    
    </div>
         
         </div> <!-- row ending -->
         
         
         <!-- row -->
         
         <div class="row">
         <center><h1>Grocery Items Ordered:</h1></center>
             
             
             
             
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
                                               <th>UOM ID</th>
                                                <th>Product ID</th>
                                                <th>Supplier ID</th>
                                        
                                               <th> </th>
                                                <th></th>
                               
                                            </tr>
                                        </thead>
                                        
                                     
                                   
                                    </table>
                
               <button id = "btnAddNewOrder" class="btn btn-info active" data-toggle="modal" data-target="#modal_addnewproduct">Add New Order</button>
                
           </div>
             
             
             
             
             
             
             
         
             
             
             
         </div>
         
         <!-- row -->
         <br>
         <br>
         <br>
<div class="row">
         <div class="col-md-9"></div>
         
         
         <div class="col-md-3">
            <label class="control-label">Total Amount to be Paid:</label>  <input type="text" class="input-control" id="TotalAmountToBePaid" readonly>
         </div>
         
         
         
</div>
         
         <br>
         <br>
         
          <div class="col-md-9"></div>
         <div class="col-md-3">
             
             <button class="btn btn-info btn-lg" id="btnSubmitOrder" >Submit Order</button>
             <a href="userhome.php"><button class="btn btn-danger btn-lg">Cancel</button></a>
            
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
                                                        
                                                        <input type="number" class="form-control" name="Quantity" id="Quantity" value="1" disabled>                            
                                                        
                                                        
                                                        
                                                    
                                                    </div>
                        
                        <br>
                        <br>
                      

                        
                        
                         <label class="col-md-3 control-label">Product Category:</label>
                                                <div class="input-group">                                                 
                                                   
                                                    <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;" id="ProductCategory">
                                                 
                                                      <!-- <option>Canned Goods/Noodles</option>
                                                       <option>Coffee/Sugar</option>
                                                       <option>Dairy Products</option>
                                                       <option>Detergent Powder/Fabcon</option>
                                                       <option>Milk(Evap,Powdered,Condensed)</option>
                                                       <option>Oil/Condiments</option>
                                                       <option>Shampoo/Conditioner</option>
                                                        -->
                                                        
                                                        <option>--Select Product Category--</option>
                                             <?php 
                                                        
                                                        
        

                                                        
$sql = "SELECT ProductCategoryID,ProductCategoryName FROM tblproductcategories ORDER BY ProductCategoryName    ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)){
        
        echo '<option value ="' . $row['ProductCategoryID'] . '" '. $selected .'>' . $row['ProductCategoryName'] . '</option>';
        
   

    
}
}
                                                        
                                                        ?>           

                                                        
                                                    
                                                    </select>
                                                   
                                     
                        
                        
                    </div>
                             
                        
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <label style="color: white;" id="ProductCategoryValidation">Please select product category</label>
                        
                        
                        
                          <br>
                        <br>
                      
                       
                        
                        
                         <label class="col-md-3 control-label">Product Name:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;" id="ProductName">
                                            
                                          <!--  <option>Ligo Green</option>
                                           <option>Ligo Red</option>
                                             <option>Mega Green</option> 
                                           <option>Mega Red</option> 
                                            <option>Youngs Town Green</option> 
                                           <option>Youngs Red</option> 
                                           
                                            -->
                                            
                                            
                                        <option>--Select Product--</option>    
                                               
     
                                            
                                        </select>
                            
                        
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <label style="color: white;" id="ProductValidation">Please select product </label>
                        

                        
                        
                          <br>
                        <br>
                      
                        
                        
                        
                         <label class="col-md-3 control-label">Unit of Measurement:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;" id="UnitOfMeasurement">
                                            
                                            
                                            <option>--Select Unit of Measurement--</option>
                                            

                                         
                                            
                                            
                                        </select>
                    
                            
                            
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <label style="color: white;" id="UOMValidation">Please select unit of measurement</label>
                        
                         
                          <br>
                        <br>

                        
                        
                         <label class="col-md-3 control-label">Supplier:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;" id = "TargetSupplier" >
                                            
                                            
                                            
                                   <!--         
                                        <option>Emilus' Supermart</option>     
                                        <option>SM Supermarket</option>  
                                            
                                            -->
                                            <option>--Select Supplier--</option>
                                             
                                         
 

                                            
                                            
                                        </select>
                            
                            
                            
                            
                        </div>
                        
                        
                        
                        <br>
                        <br>
                        
                            <label class="col-md-3 control-label">Price Per Unit:</label>
                            <label id="PricePerUnit">0.00</label>            
                                                    
                        
                        <br>
                        <br>
                      
                        
                            <label class="col-md-3 control-label">Accumulated Price:</label>
                            <label id="AccumulatedPrice">0.00</label>                
                                                    
                        
                        <br>
                        <br>
                        
                        
                        

                        <br>
                        <br>
                        <br>
                        
                        
  
                        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="btnOrderNow">Order Now</button>  
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>                        
                    </div>
                </div>
            </div>
        </div> 
        
        


</div>

<!-- modal add new product -->

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
     
<!--
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>                

-->
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
        

<!-- 
        <script type="text/javascript" src="js/demo_charts_morris.js"></script>
-->



<script>

       var OrdersTable = $('#customers2').DataTable({
       
       
       "columnDefs": [
            {
                "targets": [ 5 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 6 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 7 ],
                "visible": false,
                "searchable": false
            }
        ]
       
       
       
       
       });
    
    
 
  
   
    
    OrdersTable.on('click', '#RemoveRow', function () {
       
        
        
        
        
        OrdersTable.row($(this).parents('tr')).remove().draw(false);
        
        
        
          
              var oTable2 = $('#customers2').dataTable().fnGetData();
              var NewTotal = [];
              var Sum = 0;
              for (var i = 0; i < oTable2.length; i++) {

                    
                       
                         NewTotal[i] = oTable2[i][4];
                         Sum = Sum + parseFloat(NewTotal[i]);
                        
                      
              }
            
            
            document.getElementById('TotalAmountToBePaid').value = Sum;
        
        
        
    });
    
     OrdersTable.on('click', '#EditRow', function () {
             $('#modal_editorder').modal({
                    show: 'true'
                });
    });
    
    
    
    
$("#ProductCategory").change(function(){
    
      var ProductCategoryID = $(this).val();
      $('#PricePerUnit').empty();
    $('#PricePerUnit').append("0.00");
    
    
    
    
      var ProductCategoryIndex = $("#ProductCategory").prop('selectedIndex');
            
            
            if(ProductCategoryIndex != 0){
                //alert("No P CAT");
                
                $('#ProductCategoryValidation').css("color", "white");
                
                
            }
    
            else{
                
                 $('#ProductCategoryValidation').css("color", "red");
            }
    
    
        if(ProductCategoryID){
            $.ajax({
                type:'POST',
                url:'GetProductList.php',
                data:'country_id='+ProductCategoryID,
                success:function(html){
                    $('#ProductName').html(html);
                    $('#UnitOfMeasurement').html('<option value="">--Select Product--</option>'); 
                }
            }); 
        }else{
            $('#ProductName').html('<option value="">--Select Product Category first--</option>');
            $('#UnitOfMeasurement').html('<option value="">--Select Product first--</option>'); 
        } 

});
    
    
    
    $("#btnSubmitOrder").click(function(){
        //alert("Success"); 
        if (confirm('Submit order now?')) {
        
            
            
             var TotalAmountToBePaid = $("#TotalAmountToBePaid").val();
            
             var TransactionItems = { Quantity: "", ProductID: "", UOMID: "", SupplierID: "", PricePerUnit: "" };
            
             var TransactionContent = { TransactionID : "", TransactionName : "", TransactionDetails : "", TransactionDate : "", TransactionItems: []  };
            
             TransactionContent.TransactionID = $('#TransactionID').val();
             TransactionContent.TransactionName = $('#TransactionName').val();
             TransactionContent.TransactionDetails = $("#TransactionDetails").val();
             TransactionContent.TransactionDate = $("#TransactionDate").val();
            
             //alert(TransactionContent.TransactionDate);
            
            
            
            var oTable = $('#customers2').dataTable().fnGetData();

                if (oTable != "") {

                    for (var i = 0; i < oTable.length; i++) {

                      
                        TransactionItems.Quantity = oTable[i][0];
                        TransactionItems.UOMID = oTable[i][5];
                        TransactionItems.ProductID = oTable[i][6];
                        TransactionItems.SupplierID = oTable[i][7];
                        TransactionItems.PricePerUnit = oTable[i][3];


    
                        TransactionContent.TransactionItems.push(TransactionItems);

                        TransactionItems = { Quantity: "", ProductID: "", UOMID: "", SupplierID: "", PricePerUnit: "" };


                    }
                }

                else {

                    
                }
            
            
        
            
            
            if(TransactionContent.TransactionItems === undefined || TransactionContent.TransactionItems.length == 0){
                alert("Please input orders before submitting your order");
                
            }
            
            else if(TotalAmountToBePaid < 10){
                alert("Orders must be greater than 10 pesos");
                
            }
                 
            
            
            
            else{
            
           
                
               
                
               $.ajax({
                type:'POST',
                url:'InsertNewTransaction.php',
                data:{"RetrieveTransaction" : JSON.stringify(TransactionContent)},
                success:function(html){
                    
                    window.location.href="/iucsgroceryprocurementsystem/userhome.php";
                    
                }
            }); 
            
                
                
                
                
            }
            
            
            
            
            
            
       }
        
        
        
    });
    
    
    
     $('#ProductName').on('change',function(){
        var ProductID = $(this).val();
         $('#PricePerUnit').empty();
         $('#PricePerUnit').append("0.00");
         
         
          
      var ProductName = $("#ProductName").prop('selectedIndex');
            
            
            if(ProductName!= 0){
                //alert("No P CAT");
                
                $('#ProductValidation').css("color", "white");
                
                
            }
    
            else{
                
                 $('#ProductValidation').css("color", "red");
            }
         
         
         
         
        if(ProductID){
         
            
               $.ajax({
                type:'POST',
                url:'GetProductList.php',
                data:'state_id='+ProductID,
                success:function(html){
                    $('#UnitOfMeasurement').html(html);
                }
            }); 
        }else{
            $('#UnitOfMeasurement').html('<option value="">--Select Product first--</option>'); 
        }
    });
    
    
    
    
    $('#UnitOfMeasurement').on('change',function(){
        var UOMID = $(this).val();
        $('#PricePerUnit').empty();
        $('#PricePerUnit').append("0.00");
             
      var UnitOfMeasurement = $("#UnitOfMeasurement").prop('selectedIndex');
            
            
            if(UnitOfMeasurement!= 0){
                //alert("No P CAT");
                
                $('#UOMValidation').css("color", "white");
                
                
            }
    
            else{
                
                 $('#UOMValidation').css("color", "red");
            }
         
        
        
        
        
        
        var ProductID = $('#ProductName').val();
        if(UOMID){
            $.ajax({
                type:'POST',
                url:'GetSupplierList.php',
                data: { uom_id: UOMID, product_id: ProductID },
                success:function(html){
                    $('#TargetSupplier').html(html);
                    
                    
                    
                    
                    
                    
                     $.ajax({
                        type:'POST',
                        url:'GetCurrentPrice.php',
                        data: { uom_id: UOMID, product_id: ProductID },
                        success:function(html){
                            $('#PricePerUnit').html(html);
                            $("#Quantity").prop('disabled', false);
                             var PricePerUnitVariable = $('#PricePerUnit').text(); 
                             var QuantityVariable = $('#Quantity').val(); 
            
                             var AccumulatedPrice = PricePerUnitVariable * QuantityVariable;
                             $("#AccumulatedPrice").empty();
                             $("#AccumulatedPrice").append(parseFloat(PricePerUnitVariable).toFixed(2));
                    
                        }
                    });
                    
                    
            
                    
                }
            }); 
            
        }else{
            $('#TargetSupplier').html('<option value="">--Select Unit first--</option>'); 
        }
        
    });
    
    
    $("#btnAddNewOrder").click(function(){
            $('#ProductCategoryValidation').css("color", "white");
            $('#ProductValidation').css("color", "white");
            $('#UOMValidation').css("color", "white");
        
        
        
        
        $("select#ProductCategory")[0].selectedIndex = 0;
        $("#ProductName").empty();
        $("#UnitofMeasurement").empty();
        $("#TargetSupplier").empty();
        $('#TargetSupplier').html('<option value="">--Select Supplier--</option>'); 
        $('#ProductName').html('<option value="">--Select Product--</option>'); 
        $('#UnitOfMeasurement').html('<option value="">--Select Unit of Measurement--</option>'); 
        
        
        
        $("#Quantity").val('1');
        $("#Quantity").prop('disabled', true);
        
         $("#AccumulatedPrice").empty();
         $("#PricePerUnit").empty();
         $("#AccumulatedPrice").append("0.00");
         $("#PricePerUnit").append("0.00");
        
    });
    
    
     $("#btnOrderNow").click(function () {
         
         
         
         
         
            
            var dataTable = $('#customers2').DataTable();
            var Quantity = $('#Quantity').val();
            var ProductCategoryID = $('#ProductCategory').val();
            var ProductCategoryName = $("#ProductCategory option:selected").text();
            var ProductID = $('#ProductName').val();
            var ProductName = $("#ProductName option:selected").text();
            var UOMID = $('#UnitOfMeasurement').val();
            var UOMName = $("#UnitOfMeasurement option:selected").text();
            var SupplierID = $('#TargetSupplier').val();
            var SupplierName = $('#TargetSupplier option:selected').text();
            var PricePerUnit = $('#PricePerUnit').text();
            var AccumulatedPrice = $("#AccumulatedPrice").text();
         
         
          
           var UOMIDGet = [];
           var ProductIDGet = [];
           var SupplierIDGet = [];
           var oTable = $('#customers2').dataTable().fnGetData();
         
         
         for (var i = 0; i < oTable.length; i++) {

                    
                       
                         UOMIDGet[i] = oTable[i][5];
                         ProductIDGet[i] = oTable[i][6];
                         SupplierIDGet[i] = oTable[i][7];
                        
                      
        }

         
         
    
         var NewOrderValidator = true;
         var NewOrderValidator2 = true;
         
         
          var ProductCategoryIndex = $("#ProductCategory").prop('selectedIndex');
            
            
            if(ProductCategoryIndex == 0){
                //alert("No P CAT");
                
                $('#ProductCategoryValidation').css("color", "red");
                
                $NewOrderValidator = false;
            }
            
            
            
            
             var ProductNameIndex = $("#ProductName").prop('selectedIndex');
            
            
            if(ProductNameIndex == 0){
                //alert("No P CAT");
                
                $('#ProductValidation').css("color", "red");
                
                NewOrderValidator = false;
            }
            
         
           var UOMIndex = $("#UnitOfMeasurement").prop('selectedIndex');
            
            
            if(UOMIndex == 0){
                //alert("No P CAT");
                
                $('#UOMValidation').css("color", "red");
                
                NewOrderValidator = false;
            }
            
         
         
    
         
         
        for (var i = 0; i < UOMIDGet.length; i++) {

                    
                if(UOMIDGet[i] == UOMID){
                   
                      for (var i = 0; i < ProductIDGet.length; i++) {

                    
                            if(ProductIDGet[i] == ProductID){
                                    
                                
                                
                                
                                  for (var i = 0; i < SupplierIDGet.length; i++) {

                    
                                        if(SupplierIDGet[i] == SupplierID){
                                                NewOrderValidator2 = false;
                                            } //if supplierid has match      
                    
                        
                      
                                    }//supplier for loop
                                
                                
                            
                                
                            }//if product id has match       
                    
                        
                      
                        }//productid for loop
                             
                    

                    
                } // if uomid has match
            
                    
                        
                      
        } // uomid for loop
         
          
         
         
          
         
         
         
        if(NewOrderValidator2){
        
            
            
            
            
            if(NewOrderValidator){
                
                
                
                
         dataTable.row.add([Quantity,UOMName,ProductName , PricePerUnit ,AccumulatedPrice, UOMID, ProductID, SupplierID, '<button class="btn btn-success btn-md" id="EditRow"> Edit Order </button>','<button class="btn btn-danger btn-md" id="RemoveRow"> Remove Order </button>']).draw();
         
            
            
              var oTable2 = $('#customers2').dataTable().fnGetData();
              var NewTotal = [];
              var Sum = 0;
              for (var i = 0; i < oTable2.length; i++) {

                    
                       
                         NewTotal[i] = oTable2[i][4];
                         Sum = Sum + parseFloat(NewTotal[i]);
                        
                      
              }
            
            
            document.getElementById('TotalAmountToBePaid').value = Sum;
             
             
             $('#modal_addnewproduct').modal('toggle');
                
                
                
                
            }
    
        }
         
         else{
             alert("Already ordered!");
         }
     
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