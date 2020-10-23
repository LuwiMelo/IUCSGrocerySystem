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




 
    

    
    
    
      $sql3 = "INSERT INTO tblusers (`UserID`,`UserUsername`,`UserPassword`,`UserFirstName`,`UserLastName`,`UserUserTypeID`,`PositionLevel`,`UserEmployeeID`) VALUES ('".$_POST['UserID']."' , '".$_POST['UserUsername']."', '".$_POST['UserPassword']."', '".$_POST['UserFirstName']."', '".$_POST['UserLastName']."', '2' , '".$_POST['PositionLevel']."' , '".$_POST['EmployeeID']."' );";
    
    

    
    if ($conn->query($sql3) === TRUE) {
        
    
  
        
  
    
        header('Location: UserList.php');
    
       
        
        
        
    }// if product is inserted successfully 
   
    
    
    
    
    
    
    











?>