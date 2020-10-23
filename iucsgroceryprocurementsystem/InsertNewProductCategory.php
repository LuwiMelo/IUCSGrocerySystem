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
$ProductCategory = $_POST['ProductCategory'];
$ProductCategoryDetails = $_POST['ProductCategoryDetails'];




  $sql3 = "INSERT INTO tblproductcategories (`ProductCategoryID`,`ProductCategoryName`,`ProductCategoryDescription`) VALUES ('".$ProductCategoryID."' , '".$ProductCategory."', '".$ProductCategoryDetails."'  );";
    
    
    

if ($conn->query($sql3) === TRUE) {
    header('Location: ProductCategoriesList.php');
}








?>