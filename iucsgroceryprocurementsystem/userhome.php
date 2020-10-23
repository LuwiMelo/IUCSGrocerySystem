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



$UserID = $_SESSION['UserUserID'];





?>




<br>
<br>

<div class="page-content-wrap">
<div class="panel panel-default">
<div class="row">
    
 <br>
    <br>
   <Center><h1>Imus Unida Christian School Grocery Procurement System</h1></Center>

   <br>
    <Br>
        <br>
   
        <div class="col-md-9"></div>
<div class="col-md-3">
        
        
        
      
    </div>
</div> <!-- first row -->

    
    <!-- second row -->
 
<div class="row">
  
   
        
   
       
        
</div> <!-- row end -->
 <!-- first panel -->
      
        
      
        
           
        
        
        <div class="panel panel-default">
<div class="row">
    
    

      <!-- START CONTENT FRAME -->
                <div class="content-frame">   
                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-image"></span> Grocery Items</h2>
                        </div>                                      
                        <div class="pull-right">                            
                         
                            <button class="btn btn-default content-frame-right-toggle"><span class="fa fa-bars"></span></button>
                        </div>                         
                    </div>
                    
                    <!-- START CONTENT FRAME RIGHT -->
                    <div class="content-frame-right">                        
                        <div class="block push-up-10">
                            <form action="upload.php" class="dropzone dropzone-mini"></form>
                        </div>                        
                        <h4>Groups:</h4>
                        <div class="list-group border-bottom push-down-20">
                            <a href="#" class="list-group-item active">All <span class="badge badge-primary">12</span></a>
                            <a href="#" class="list-group-item">Dairy Products <span class="badge badge-success">7</span></a>
                            <a href="#" class="list-group-item">Canned Goods/Noodles <span class="badge badge-danger">3</span></a>
                            <a href="#" class="list-group-item">Milk(Powdered,Condensed,Evaporated) <span class="badge badge-info">2</span></a>
                            <a href="#" class="list-group-item">Shampoo/Conditioners<span class="badge badge-warning">3</span></a>
                        </div>                                                
                        <h4>Tags:</h4>
                        <ul class="list-tags">
                            <li><a href="#"><span class="fa fa-tag"></span> amet</a></li>
                            <li><a href="#"><span class="fa fa-tag"></span> rutrum</a></li>
                            <li><a href="#"><span class="fa fa-tag"></span> nunc</a></li>
                            <li><a href="#"><span class="fa fa-tag"></span> tempor</a></li>
                            <li><a href="#"><span class="fa fa-tag"></span> eros</a></li>
                            <li><a href="#"><span class="fa fa-tag"></span> suspendisse</a></li>
                            <li><a href="#"><span class="fa fa-tag"></span> dolor</a></li>
                        </ul>
                    </div>
                    <!-- END CONTENT FRAME RIGHT -->
                
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body content-frame-body-left">
                        
                        <div class="pull-left push-up-10">
                            <button class="btn btn-primary" id="gallery-toggle-items">Toggle All</button>
                        </div>
                        <div class="pull-right push-up-10">
                            <div class="btn-group">
                                <button class="btn btn-primary"><span class="fa fa-pencil"></span> Edit</button>
                                <button class="btn btn-primary"><span class="fa fa-trash-o"></span> Delete</button>
                            </div>                            
                        </div>
                        
                        <div class="gallery" id="links">
                             
                            <a class="gallery-item" href="ligored.jpg" title="Ligo Sardines Red- 155pg" data-gallery>
                                <div class="image">                              
                                    <img src="ligored.jpg" alt="Nature Image 1"/>                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Ligo Sardines Red-155g</strong>
                                    <span>16.55</span>
                                </div>                                
                            </a>

                            <a class="gallery-item" href="alaska.jpg" title="Music picture 1" data-gallery>
                                <div class="image">
                                    <img src="alaska.jpg" alt="Music picture 1"/>    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Alaska</strong>
                                    <span>Other description</span>
                                </div>                                
                            </a>                            

                            <a class="gallery-item" href="tide.jpg" title="Girls Image 1" data-gallery>
                                <div class="image">
                                    <img src="tide.jpg" alt="Girls Image 1"/>                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Tide Powder</strong>
                                    <span>Description</span>
                                </div>                                
                            </a>

                            <a class="gallery-item" href="quezo.jpg" title="Nature Image 2" data-gallery>
                                <div class="image">
                                    <img src="quezo.jpg" alt="Nature Image 2"/>    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Quezo</strong>
                                    <span>Description</span>
                                </div>                                
                            </a>

                            <a class="gallery-item" href="pantenehairfall.jpg" title="Space picture 1" data-gallery>
                                <div class="image">
                                    <img src="pantenehairfall.jpg" alt="Space picture 1"/>    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Pantene Hairfall</strong>
                                    <span>Other description</span>
                                </div>                                
                            </a>
                                                 
                            <a class="gallery-item" href="minola.jpg" title="Music picture 2" data-gallery>
                                <div class="image">
                                    <img src="minola.jpg" alt="Music picture 2"/>    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Minola Oil</strong>
                                    <span>Other description</span>
                                </div>                                
                            </a>                            

                            <a class="gallery-item" href="creamylatte.jpg" title="Nature Image 3" data-gallery>
                                <div class="image">
                                    <img src="creamylatte.jpg" alt="Nature Image 3"/>    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Nescafe Creamy Latte</strong>
                                    <span>Description</span>
                                </div>                                
                            </a>                                                     

                            <a class="gallery-item" href="cornedbeef.jpg" title="Girls Image 2" data-gallery>
                                <div class="image">
                                    <img src="cornedbeef.jpg" alt="Girls Image 2"/>    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Argentina Corned Beef</strong>
                                    <span>Description</span>
                                </div>                                
                            </a>                                                
                            
                            <a class="gallery-item" href="bearbrand.jpg" title="Space picture 2" data-gallery>
                                <div class="image">
                                    <img src="bearbrand.jpg" alt="Space picture 2"/>    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Bear Brand</strong>
                                    <span>Other description</span>
                                </div>                                
                            </a>                               

                            <a class="gallery-item" href="alaska.jpg" title="Nature Image 4" data-gallery>
                                <div class="image">
                                    <img src="alaska.jpg" alt="Nature Image 4"/>    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Alaska Evaporada</strong>
                                    <span>Description</span>
                                </div>                                
                            </a>                                                                 
                            
                            <a class="gallery-item" href="creamsilk.jpg" title="Music picture 3" data-gallery>
                                <div class="image">
                                    <img src="creamsilk.jpg"   alt="Music picture 3"/>    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Creamsilk</strong>
                                    <span>Other description</span>
                                </div>                                
                            </a>                            
                            
                            <a class="gallery-item" href="datuputi.jpg" title="Nature Image 5" data-gallery>
                                <div class="image">
                                    <img src="datuputi.jpg" alt="Nature Image 5"/>    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Datu Puti</strong>
                                    <span>Description</span>
                                </div>                                
                            </a>
                            
                            <a class="gallery-item" href="headandshoulders.jpg" title="Nature Image 6" data-gallery>
                                <div class="image">
                                    <img src="headandshoulders.jpg" alt="Nature Image 6"/>    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Head and Shoulders</strong>
                                    <span>Description</span>
                                </div>                                
                            </a>                                                    
                             
                            <a class="gallery-item" href="downy.jpg" title="Girls Image 3" data-gallery>
                                <div class="image">
                                    <img src="downy.jpg" alt="Girls Image 3"/>    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Downy Antibac</strong>
                                    <span>Description</span>
                                </div>                                
                            </a>                                                      
                             
                            <a class="gallery-item" href="eden.jpg" title="Nature Image 7" data-gallery>
                                <div class="image">
                                    <img src="eden.jpg" alt="Nature Image 7"/>
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Eden Cheese</strong>
                                    <span>Description</span>
                                </div>                                
                            </a>                                                    
                            
                            <a class="gallery-item" href="silverswan.jpg" title="Music picture 5" data-gallery>
                                <div class="image">
                                    <img src="silverswan.jpg" alt="Music picture 5"/>    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Silver Swan</strong>
                                    <span>Other description</span>
                                </div>                                
                            </a>                            
                             
                        </div>
                             
                        <ul class="pagination pagination-sm pull-right push-down-20 push-up-20">
                            <li class="disabled"><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>                                    
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>       
                    <!-- END CONTENT FRAME BODY -->
                </div>               
                <!-- END CONTENT FRAME -->
                    
        
        
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
                            <a href="systemlogout.php" class="btn btn-success btn-lg">Yes</a>
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