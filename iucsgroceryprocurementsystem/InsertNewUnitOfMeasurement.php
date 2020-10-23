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





$UOMID = $_POST['UOMID'];
$UnitOfMeasurement = $_POST['UnitOfMeasurement'];
$UOMDetails = $_POST['UOMDetails'];




  $sql3 = "INSERT INTO tblunitofmeasurement (`UOMID`,`UOMName`,`UOMDescription`) VALUES ('".$UOMID."' , '".$UnitOfMeasurement."', '".$UOMDetails."'  );";
    
    
    

if ($conn->query($sql3) === TRUE) {
    header('Location: UnitOfMeasurementList.php');
}








?>