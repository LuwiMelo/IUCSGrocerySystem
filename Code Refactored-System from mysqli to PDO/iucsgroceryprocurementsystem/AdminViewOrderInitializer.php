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












$_SESSION['AdminViewTransactionID'] = $_POST['iddd'];


header('Location: AdminViewInvoice.php');


?>