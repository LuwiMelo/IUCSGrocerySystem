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




 
    

    
    
    
      $sql3 = "UPDATE tblusers SET UserPassword = '".$_POST['NewPassword']."' WHERE UserID = '".$_POST['UserID']."'   ;";
    
    

    
    if ($conn->query($sql3) === TRUE) {
        
    
  
        
  
    
        header('Location: userhome.php');
    
       
        
        
        
    }// if product is inserted successfully 
   
    
    
    
    
    
    
    











?>