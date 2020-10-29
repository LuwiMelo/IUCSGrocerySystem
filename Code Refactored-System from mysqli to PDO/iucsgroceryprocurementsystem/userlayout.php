 
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


    
$RetrieveUserID = $_SESSION['UserUserID'];
$RetrieveFirstName;
$RetrieveLastName;


$sql = "SELECT UserFirstName,UserLastName,UserUserTypeID FROM tblUsers WHERE UserID= '".$RetrieveUserID."'    ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)){
        $RetrieveFirstName = $row['UserFirstName'];
        $RetrieveLastName = $row['UserLastName'];
        
    }
    
}


$_SESSION['UserFirstName'] = $RetrieveFirstName;
$_SESSION['UserLastName'] = $RetrieveLastName;



?>






<html> 
    <head>        
        
        <!-- fullcalendar -->
        
        
        <!-- META SECTION -->
        <title>IUCS Grocery Items Procurement System</title>       
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--ICON-->
        <link rel="icon" href="iucslogo.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
         <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css"/>
        
     <!--    <link rel="stylesheet" href="validationEngine.jquery.css" type="text/css"/>
        <link rel="stylesheet" href="customMessages.css" type="text/css">
        <link rel="stylesheet" href="template.css" type="text/css">
        -->
       
        
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
      <script src="js/plugins/jquery/jquery.min.js"> </script> 
                

  <!--     <link rel="stylesheet" href="custom-css/customcss.css" type="text/css"/>
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
                        <a href="#"> IUCS Employee</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <!--USER PROFILE DETAILS (compressed version)-->
                    <li class="xn-profile">
                        <a href="adminhome" class="profile-mini">
                           
                          <img src="pic1.png" alt="John Doe"/>
                        </a>
                        <!--USER PROFILE DETAILS (full version)-->
                        <div class="profile">
                            <div class="profile-image">
                                <img src="pic1.png" alt="John Doe"/>
                            </div>
                            <!--NAME OF CURRENT USER LOGGED IN-->
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $RetrieveFirstName; ?> &nbsp; <?php echo $RetrieveLastName; ?></div>
                                <div class="profile-data-title">IUCS Employee</div>
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
                 
                        <a href="userhome.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>                    
                                   
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Purchase Groceries</span></a>
                        <ul>
                            <li><a href="EmployeeNewTransaction.php"><span class="fa fa-shopping-cart"></span>New Order</a></li>
                            <li><a href="EmployeeMyTransactions.php"><span class="fa fa-book"></span> My Orders</a></li>
                            
                        </ul>
                    </li>
                    
                    
                      <li>
                 
                        <a href="ChangePassword.php"><span class="fa fa-unlock"></span> <span class="xn-text">Change Password</span></a>
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







             
             
             
             
 
