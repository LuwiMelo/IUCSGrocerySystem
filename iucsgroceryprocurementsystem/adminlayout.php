 
<?php 




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






<html> 
    <head>        
        
        <!-- fullcalendar -->
        
        
        <!-- META SECTION -->
        <title>IUCS Grocery Procurement System</title>       
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--ICON-->
        <link rel="icon" href="iucslogo.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
       
        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css"/>
        
        <!--
         <link rel="stylesheet" href="validationEngine.jquery.css" type="text/css"/>
        <link rel="stylesheet" href="customMessages.css" type="text/css">
        <link rel="stylesheet" href="template.css" type="text/css">
        -->
       
        
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
      <script src="js/plugins/jquery/jquery.min.js"> </script> 
                
<!--
       <link rel="stylesheet" href="custom-css/customcss.css" type="text/css"/>
        <script src="languages/jquery.validationEngine-en.js" type="text/javascript"  charset="utf-8"></script>
        <script src="jquery.validationEngine.js" type="text/javascript"></script>
        <script src="typeahead/typeahead.min.js"></script>

-->
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <!--SIDE NAV DETAILS-->
                        <a href="#"> System Admin</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <!--USER PROFILE DETAILS (compressed version)-->
                    <li class="xn-profile">
                        <a href="adminhome" class="profile-mini">
                           
                          <img src="iucslogo.png" alt="John Doe"/>
                        </a>
                        <!--USER PROFILE DETAILS (full version)-->
                        <div class="profile">
                            <div class="profile-image">
                                <img src="iucslogo.png" alt="John Doe"/>
                            </div>
                            <!--NAME OF CURRENT USER LOGGED IN-->
                            <div class="profile-data">
                                <div class="profile-data-name">IUCS System Admin</div>
                                <div class="profile-data-title">System Administrator</div>
                            </div>
                            <!--SIDE NAV CONTROLS-->
                            <div class="profile-controls">
                                <!--USER INFO-->
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <!--USER MESSAGES-->
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <!--SIDE NAV-->
                    
   
                 <li class="xn-title">Navigation</li>
                    
                    <li>
                 
                        <a href="adminhome.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>     
                    <!--
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Product Transactions</span></a>
                        <ul>
                            <li><a href="NewTransaction.php"><span class="fa fa-shopping-cart"></span>New Transaction</a></li>
                            <li><a href="MyTransactions.php"><span class="fa fa-book"></span> My Transactions</a></li>
                            
                        </ul>
                    </li>
                    -->
                       <li class="xn-openable">
                        <a href="#"><span class="fa fa-wrench"></span> <span class="xn-text">System Maintenance</span></a>
                        <ul>
                            <li><a href="SuppliersList.php"><span class="fa fa-truck"></span>Suppliers</a></li>
                            <li><a href="ProductCategoriesList.php"><span class="fa fa-sort-amount-asc"></span>Product Categories</a></li>
                            <li><a href="ProductsList.php"><span class="fa fa-tags"></span>Products</a></li>
                            <li><a href="UnitOfMeasurementList.php"><span class="fa fa-filter"></span>Unit of Measurement</a></li>
                             <li><a href="UserList.php"><span class="fa fa-suitcase"></span>Employees' Accounts</a></li>
                            
                        </ul>
                    </li>
                    
                       <li class="xn-openable">
                        <a href="#"><span class="fa fa-warning"></span> <span class="xn-text">System Reports</span></a>
                        <ul>
                            <li><a href="ReportPerSupplier.php"><span class="fa fa-dashboard"></span>Per Supplier</a></li>
                            
                            <li><a href="ReportPerOrder.php"><span class="fa fa-dashboard"></span>Per Orders</a></li>
                            
                            
                        </ul>
                    </li>
                      
                  
                    
                  
                 
            
                   
                    
                <!-- END X-NAVIGATION -->
                </ul>
            </div>
    
    
    
    
         <div class="page-content">
                <!-- START X-NAVIGATION VERTICAL (compressed version) and TOP NAV-->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION (compressed version) TOP NAV-->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH (TOP NAV)-->
                  
                    <li>
                  
                    </li>
                   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT (TOP NAV)-->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES (TOP NAV)-->
                    
                    <!-- END MESSAGES -->

                
                    <!-- END TASKS -->
                </ul>







             
             
             
             
 
