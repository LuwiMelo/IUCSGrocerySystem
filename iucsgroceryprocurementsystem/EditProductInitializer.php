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




$RetrieveProductID = $_POST['iddd1'];
$_SESSION['EditProductID'] = $RetrieveProductID;


header('Location: EditProduct.php');

?>