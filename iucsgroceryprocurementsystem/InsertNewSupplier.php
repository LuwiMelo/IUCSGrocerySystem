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





$SupplierID = $_POST['SupplierID'];
$SupplierName = $_POST['SupplierName'];
$SupplierDetails = $_POST['SupplierDetails'];




  $sql3 = "INSERT INTO tblsuppliers (`SupplierID`,`SupplierName`,`SupplierDetails`) VALUES ('".$SupplierID."' , '".$SupplierName."', '".$SupplierDetails."'  );";
    
    
    

if ($conn->query($sql3) === TRUE) {
    header('Location: SuppliersList.php');
}








?>