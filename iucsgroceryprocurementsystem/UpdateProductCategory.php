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





$ProductCategoryID = $_POST['ProductCategoryID'];
$ProductCategoryName = $_POST['ProductCategory'];
$ProductCategoryDescription = $_POST['ProductCategoryDetails'];




  $sql3 = "UPDATE tblproductcategories SET ProductCategoryName = '".$ProductCategoryName."', ProductCategoryDescription = '".$ProductCategoryDescription."' WHERE ProductCategoryID = '".$ProductCategoryID."'    ";
    
    
    

if ($conn->query($sql3) === TRUE) {
    header('Location: ProductCategoriesList.php');
}








?>