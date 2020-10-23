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
$UnitOfMeasurementName = $_POST['UnitOfMeasurement'];
$UOMDescription = $_POST['UOMDetails'];




  $sql3 = "UPDATE tblunitofmeasurement SET UOMName= '".$UnitOfMeasurementName."', UOMDescription=  '".$UOMDescription."' WHERE UOMID = '".$UOMID."'   ";
    
    
    

if ($conn->query($sql3) === TRUE) {
    header('Location: UnitOfMeasurementList.php');
}








?>