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


//$_SESSION['CurrentSelectedPrice'] = 0.00;

if(!empty($_POST["uom_id"]) && !empty($_POST["product_id"])){
    //Fetch all city data
    $query = $conn->query("SELECT Price,SupplierID,SupplierName FROM tblproductxuom,tblsuppliers WHERE ProductXUOMUOMID = ".$_POST['uom_id']." AND tblproductxuom.ProductXUOMProductID = '".$_POST['product_id']."' AND tblProductXUOM.ProductXUOMSupplierID = tblsuppliers.SupplierID  ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //City option list
    if($rowCount > 0){
        
        while($row = $query->fetch_assoc()){ 
            echo $row['Price'];
        }
        
        //$_SESSION['CurrentSelectedPrice'] = $row['Price'];
    }else{
        $label = 0.00;
        echo $label;
    }
}




























?>