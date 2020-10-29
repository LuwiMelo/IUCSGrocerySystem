<?php

session_start();

//$class = ($page == 'one') ? 'class="active"' : '';
include 'adminlayout.php';



include 'connection.php';


$RetrieveEditProductID = $_SESSION['EditProductID'];





try
{
    $LatestSchoolYear;
    $statement = $dbh->prepare("SELECT ProductName,ProductDetails,tblproducts.ProductCategoryID FROM tblproducts,tblproductcategories WHERE ProductID = :ProductID AND tblproducts.ProductCategoryID = tblproductcategories.ProductCategoryID   ");
    $statement->execute(array(':ProductID' => $RetrieveEditProductID));
    $row = $statement->fetch();
    
    if (!empty($row)) {
          
            
      
    
        $EditProductProductName = $row['ProductName'];
        $EditProductProductDetails = $row['ProductDetails'];
        $EditProductCategoryID = $row['ProductCategoryID'];
        
          
    } 
    else {
   
       
    }
  
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}






?>




<br>
<br>

<div class="page-content-wrap">
<div class="panel panel-default">
<div class="row">
    
 <br>
    <br>
   <Center><h1>Edit Product</h1></Center>

   <br>
    <Br>
        <br>
   
        
        <div class="col-md-3"></div>
        
           <div class="col-md-5">
        
        
        
       
              <div class="form-group">
                    <label class="col-md-3 control-label">*Product ID:</label>
                    <div class="col-md-9">                                            
                            <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="text" class="form-control" value="<?php echo $RetrieveEditProductID; ?>" readonly name="ProductID" id="ProductID">
                            </div>                                            
                            <span class="help-block">This Product ID is system generated.</span>
                        
                            <input type="hidden" name="SupplierIDPOST" id="SupplierIDPOST" value="<?php echo $RetrieveEditProductID; ?>">
                    </div>
            </div>
               <br>
               <br>
               
               <br>
               <br>
               
                  <div class="form-group">
                    <label class="col-md-3 control-label">*Product Name:</label>
                    <div class="col-md-9">                                            
                            <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="text" class="form-control" placeholder="e.g. Head and Shoulders" name="ProductName" id="ProductName" value="<?php echo $EditProductProductName; ?>">
                            </div>                                            
                            <span class="help-block"></span>
                    </div>
            </div>
        
        
               <br>
               <br>
               <br>
               <br>
               
        
              <div class="form-group">
                   <label class="col-md-3 control-label">Product Details: </label>
                  
                   <div class="col-md-9">                                            
                        <textarea class="form-control" rows="5" name="ProductDetails" id="ProductDetails" value="<?php echo $EditProductProductDetails; ?>"></textarea>
                        <span class="help-block">Additional details about this product</span>
                   </div>
             </div>
        
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
              <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Product Category</label>
                                        <div class="col-md-9  col-xs-12">                                                                                            
                                            <select class="form-control select" name="ProductCategoryID" id="ProductCategoryID">
                                                   <?php 
try
{
 
    
   
    $statement = $dbh->prepare("SELECT ProductCategoryID,ProductCategoryName FROM tblproductcategories ORDER BY ProductCategoryName ");
    $statement->execute();
    $row = $statement->fetchAll();
    
    
    
    if (!empty($row)) {
        
        foreach($row as $data){
            
        
        if($data['ProductCategoryID'] == $EditProductCategoryID ){
            
            $selected = "selected";
        }
        else{
            $selected = "";
        }
        
        
        echo '<option value ="' . $data['ProductCategoryID'] . '" '. $selected .'>' . $data['ProductCategoryName'] . '</option>';
        
            
        
        }
        
    } 
    else {
   
      echo '<option> No data </option>';
    }


    
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}                                         
                                                        
        


                                                        
                                                        ?>  
                                              
                                              
                                            </select>
                                            
                                        </div>
                </div>
               
               
               
               
               
                <br>
                    
                    <br>
                    <br>
                    <br>
                    <br>
                 <br>
                    <br>
                 
               
                  
               <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button class="btn btn-md btn-success" > SAVE CHANGES</button>
            
        
         <a href="ProductsList.php">   <button class="btn btn-md btn-primary"  type="button"> CANCEL   </button></a>
        
               <br>
               <br>
        
        
        -->
        
    
    </div> <!-- col md 5 -->
        
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            
                
          
        </div>
        
        
        
      
        

</div> <!-- first row -->

    
    <!-- second row -->
 
<div class="row">
    
    
    
         <center><h1>Product Pricing:</h1></center>
             
             
             
             
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
                                               <th>Unit</th>
                                               <th>Supplier</th>
                                               <th>Price</th> 
                                                <th>UOMID</th>
                                                <th>SupplierID</th>
                                                 <th> </th>
                                          
                               
                                            </tr>
                                        </thead>
                                        
                                        
                                         <?php
       
                
                
                
try
{
   
    $statement = $dbh->prepare("SELECT tblunitofmeasurement.UOMName,tblunitofmeasurement.UOMID,tblsuppliers.SupplierID,tblsuppliers.SupplierName,tblproductxuom.Price FROM tblproductxuom,tblunitofmeasurement,tblsuppliers WHERE tblproductxuom.ProductXUOMProductID =  '".$RetrieveEditProductID."' AND tblproductxuom.ProductXUOMUOMID = tblunitofmeasurement.UOMID AND tblproductxuom.ProductXUOMSupplierID = tblsuppliers.SupplierID");
    $statement->execute();
    $row = $statement->fetchAll();
    
    
    if (!empty($row)) {
          $index = 1;
  
        
    foreach($row as $data){
        
        
        echo '<tr>';
            
         
        
        echo "<td>".$data['UOMName']."</td>";
        echo "<td>".$data['SupplierName']."</td>";
        echo "<td>".$data['Price']."</td>";
        echo "<td>".$data['UOMID']."</td>";
        echo "<td>".$data['SupplierID']."</td>";


         echo "<td> <button class=\"btn btn-info\" id=\"btnUpdatePrice\"  data-toggle=\"modal\" data-target=\"#modal_editprice\">UPDATE PRICE </button>  </td>
    </tr>";
        
    }
    } 
    else {
   
      
    }
  
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
        
}
   
                
                
             
                
                
                
                
        ?>
                                        
                                        
                                        
                                        
                                     
                                   
                                    </table>
                
               <button id = "btnAddNewUnit" class="btn btn-info active" data-toggle="modal" data-target="#modal_addnewunit">Add New Unit</button>
                
           </div>
             
    <br>
    <br>
    <br>
    
    <br>
    <br>
    <br>
    <br>
    <div class="col-md-7">
    
    </div>
    
    <div class="col-md-5">
    <button class="btn btn-lg btn-success" id="btnSaveChanges"> SAVE CHANGES</button>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="ProductsList.php"><button class="btn btn-lg btn-primary">CANCEL</button></a>
        
  
   </div>
     
    <br>
   
       
        
</div> <!-- row end -->
    
    
    
    
       <br>
   <br>
    <br>
    <br>
    <br>
    <br>
    
    
    
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
        
        
        

<div class="modal" id="modal_addnewunit" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead">Add New Product Pricing</h4>
                    </div>
                    <div class="modal-body">
                                                            
                                    

                        
                        
                         <label class="col-md-3 control-label">Unit of Measurement:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;" id="SelectedUnitOfMeasurement" name="SelectedUnitOfMeasurement">
                                            
                                            
                                         
                                                     <?php 
                                                        
                                                        
        
        
try
{
 
    
   
    $statement = $dbh->prepare("SELECT UOMID,UOMName FROM tblunitofmeasurement ORDER BY UOMName");
    $statement->execute();
    $row = $statement->fetchAll();
    
    
    
    if (!empty($row)) {
        
        foreach($row as $data){
            
            $selected = ""; 
        
            
           echo '<option value ="' . $data['UOMID'] . '" '. $selected .'>' . $data['UOMName'] . '</option>';
            
            
        
        }
        
    } 
    else {
   
      echo '<option> No data </option>';
    }


    
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
  
                                            
                                            
                                                        
                                                        
                                                        ?>  
                                              
                                            
                                            
                                            

                                         
                                            
                                            
                                        </select>
                    
                            
                            
                        </div>
                        
                        
                         
                          <br>
                        <br>

                        
                        
                         <label class="col-md-3 control-label">Supplier:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;" id = "SelectedSupplier" name="SelectedSupplier" >
                                            
                                            
                                            
                                                     <?php 
                                                        
                                                        
    try
{
 
    
   
    $statement = $dbh->prepare("SELECT SupplierID,SupplierName FROM tblsuppliers ORDER BY SupplierName");
    $statement->execute();
    $row = $statement->fetchAll();
    
    
    
    if (!empty($row)) {
        
        foreach($row as $data){
            
            $selected = ""; 
        
            
     echo '<option value ="' . $data['SupplierID'] . '" '. $selected .'>' . $data   ['SupplierName'] . '</option>';
            
            
        
        }
        
    } 
    else {
   
      echo '<option> No data </option>';
    }


    
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}

                                                        

                                                        
                                                        ?>  
                                
                                         
 

                                            
                                            
                                        </select>
                            
                            
                            
                            
                        </div>
                        
                        
                        
                        <br>
                        <br>
                        
                            <label class="col-md-3 control-label">Price Per Unit:</label>
                                       <div class="input-group">
                                                        
                                                        <input type="number" class="form-control" name="Price" id="SelectedPrice" name="SelectedPrice" value="1">                            
                                                        
                                                        
                                                        
                                                    
                                                    </div> 
                                                    
                        
                        <br>
                        <br>
                      
                        
                                
                                                    
                        
                        <br>
                        <br>
                        
                        
                        

                        <br>
                        <br>
                        <br>
                        
                        
  
                        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="btnAddUnitSuccess" data-dismiss="modal">Add</button>  
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>                        
                    </div>
                </div>
            </div>
        </div> 
        
        


</div>























<div class="modal" id="modal_editprice" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead">Update Product Pricing</h4>
                    </div>
                    <div class="modal-body">
                                                            
                                    <input id="editpricerowindex" type="hidden">


                         <label class="col-md-3 control-label">Unit of Measurement:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;" id="EditUOMID" name="EditUOMID">
                                        </select>
                    
                            
                            
                        </div>
                        
                        
                         
                          <br>
                        <br>

                        
                        
                         <label class="col-md-3 control-label">Supplier:</label>
                        
                        
                        <div class="input-group">                                                                                            
                                        <select style="font-family: 'Open Sans', sans-serif; font-size: 20px; width: 350px; border: 1px solid #D5D5D5; background: #F9F9F9;" id = "EditSupplierID" name="EditSupplierID" >
                                            
  
                                            
                                        </select>
                            
                            
                            
                            
                        </div>
                        
                        
                        
                        <br>
                        <br>
                        
                            <label class="col-md-3 control-label">Price Per Unit:</label>
                                       <div class="input-group">
                                                        
                                                        <input type="number" class="form-control" name="Price" id="EditNewPrice" name="EditNewPrice" value="1">         
                                                    </div> 
                                                    
                        
                        <br>
                        <br>
                      
                        
                                
                                                    
                        
                        <br>
                        <br>
                        
                        
                        

                        <br>
                        <br>
                        <br>
                        
                        
  
                        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="btnEditPriceSuccess" data-dismiss="modal">Update</button>  
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

  var OrdersTable = $('#customers2').DataTable({
       
       
       "columnDefs": [
            {
                "targets": [ 3 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 4 ],
                "visible": false,
                "searchable": false
            }
        ]
       
       
       
       
       });
    
    
    $('#customers2 tbody').on('click', '#btnUpdatePrice', function (){
            //alert("HA");
        
      
        
        var data = OrdersTable.row( $(this).parents('tr') ).data();
        
        
        var $el = $("#EditUOMID");
        $el.empty(); 
        
        var option = $('<option></option>').attr("value", data[3]).text(data[0]); 
        
        $("#EditUOMID").empty().append(option);
        $("#EditUOMID").prop("disabled", true);
        
        
        
        
          var $el = $("#EditSupplierID");
        $el.empty(); 
        
        var option = $('<option></option>').attr("value", data[4]).text(data[1]); 
        
        $("#EditSupplierID").empty().append(option);
        $("#EditSupplierID").prop("disabled", true);
        
        
        
        $("#EditNewPrice").val(data[2]);
        
        
         var RowIndex = OrdersTable.row( $(this).parents('tr') ).index();
       
        $("#editpricerowindex").val(RowIndex);
        
        
        
        
        
        
        
        
});
    
    
    
    
    $("#btnEditPriceSuccess").click(function ()  {
        
        
        
        var RowNumber = $("#editpricerowindex").val();
        var NewPrice = $("#EditNewPrice").val();
        
        OrdersTable.cell({ row: RowNumber, column: 2 }).data(NewPrice).draw();
        
        
        
    });
    
    
    
 $("#btnAddUnitSuccess").click(function () {
     
     var dataTable = $('#customers2').DataTable();
     var PriceToBeAdded = $("#SelectedPrice").val();
     var UnitToBeAdded = $("#SelectedUnitOfMeasurement option:selected").text();
     var SupplierToBeAdded = $("#SelectedSupplier option:selected").text();
     var UnitIDToBeAdded = $("#SelectedUnitOfMeasurement").val();
     var SupplierIDToBeAdded = $("#SelectedSupplier").val();
     
     
     
     
       dataTable.row.add([UnitToBeAdded,SupplierToBeAdded,PriceToBeAdded,UnitIDToBeAdded, SupplierIDToBeAdded,'<button class="btn btn-info btn-md" id="DeleteRow"> UPDATE PRICE </button>']).draw();
         
     
    
     
 });
    
    
    
    $("#btnSaveChanges").click(function () {
        
        
        var ProductPricing = { UOMID: "", SupplierID: "", Price: "" };
        var ProductDetails = { ProductID: "", ProductName: "", ProductDescription: "", ProductCategoryID: "", ProductPricing: []};
        
        
        ProductDetails.ProductID = $("#ProductID").val();
        ProductDetails.ProductName = $("#ProductName").val();
        ProductDetails.ProductDescription = $("#ProductDetails").val();
        ProductDetails.ProductCategoryID = $("#ProductCategoryID").val();
        
        
            var oTable = $('#customers2').dataTable().fnGetData();

                if (oTable != "") {

                    for (var i = 0; i < oTable.length; i++) {

                      
                        ProductPricing.UOMID = oTable[i][3];
                        ProductPricing.SupplierID = oTable[i][4];
                        ProductPricing.Price = oTable[i][2];

                        ProductDetails.ProductPricing.push(ProductPricing);

                        ProductPricing = { UOMID: "", SupplierID: "", Price: "" };

                    }
                }

                else {

                    
                }
        
        
        
              $.ajax({
                type:'POST',
                url:'UpdateProduct.php',
                data:{"RetrieveTransaction" : JSON.stringify(ProductDetails)},
                success:function(html){
                    
                    window.location.href = '/iucsgroceryprocurementsystem/ProductsList.php';
                }
            }); 
            
        
        
        
        
        
        
    });



</script>


        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>