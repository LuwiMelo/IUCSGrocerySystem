<?php



session_start();
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


    
    

    $sql3 = "UPDATE tblusers
             SET UserUsername = '".$_POST['UserUsername']."',
             UserPassword = '".$_POST['UserPassword']."',
             UserFirstName = '".$_POST['UserFirstName']."',
             UserLastName =  '".$_POST['UserLastName']."',
             UserUserTypeID = '2',
             PositionLevel = '".$_POST['PositionLevel']."',
             UserEmployeeID = '".$_POST['EmployeeID']."'
             WHERE
             UserID = '".$_POST['UserID']."'  ";

    
    if ($conn->query($sql3) === TRUE) {
        
    
  
        
  
    
        header('Location: UserList.php');
    
       
        
        
        
    }// if product is inserted successfully 
   
    
    
    
    
    
    
    











?>