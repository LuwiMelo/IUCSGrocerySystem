<?php

session_start();

//$class = ($page == 'one') ? 'class="active"' : '';
include 'adminlayout.php';




include 'connection.php';




try
{
    $LatestSchoolYear;
    $statement = $dbh->prepare("SELECT MAX(ProductCategoryID)+1 AS 'NewProductCategoryID' FROM tblproductcategories");
    $statement->execute();
    $row = $statement->fetch();
    
    if (!empty($row)) {
          
            $SupplierIDRetrieve = $row['NewProductCategoryID'];
          
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
    <form action="InsertNewProductCategory.php" method="post">
 <br>
    <br>
   <Center><h1>Add New Product Category</h1></Center>

   <br>
    <Br>
        <br>
   
        
        <div class="col-md-3"></div>
        
           <div class="col-md-5">
        
        
        
       
              <div class="form-group">
                    <label class="col-md-3 control-label">*Product Category ID:</label>
                    <div class="col-md-9">                                            
                            <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="text" class="form-control" value="<?php echo $SupplierIDRetrieve; ?>" readonly name="ProductCategoryID" id="ProductCategoryID">
                            </div>                                            
                            <span class="help-block">This product category ID is system generated.</span>
                        
                            <input type="hidden" name="SupplierIDPOST" id="SupplierIDPOST" value="<?php echo $SupplierIDRetrieve; ?>">
                    </div>
            </div>
               <br>
               <br>
               
               <br>
               <br>
               
                  <div class="form-group">
                    <label class="col-md-3 control-label">*Product Category:</label>
                    <div class="col-md-9">                                            
                            <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="text" class="form-control" placeholder="e.g. Shampoo/Conditioners" name="ProductCategory" id="ProductCategory">
                            </div>                                            
                            <span class="help-block"></span>
                    </div>
            </div>
        
        
               <br>
               <br>
               <br>
               <br>
               
        
              <div class="form-group">
                   <label class="col-md-3 control-label">Product Category Details: </label>
                  
                   <div class="col-md-9">                                            
                        <textarea class="form-control" rows="5" name="ProductCategoryDetails" id="ProductCategoryDetails"></textarea>
                        <span class="help-block">Additional details about this product category</span>
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
                    <br>
                 
               
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button class="btn btn-md btn-success" type="submit"> SAVE CHANGES</button>
            
        
         <a href="ProductCategoriesList.php">   <button class="btn btn-md btn-primary"  type="button"> CANCEL   </button></a>
        
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




        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>