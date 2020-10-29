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





//echo $_POST["country_id"];

if(!empty($_POST["country_id"])){
    //Fetch all state data
    $query = $conn->query("SELECT * FROM tblProducts WHERE ProductCategoryID = '".$_POST['country_id']."'  ORDER BY ProductName ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //State option list
    if($rowCount > 0){
        echo '<option value="">--Products Updated--</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['ProductID'].'">'.$row['ProductName'].'</option>';
        }
    }else{
        echo '<option value="">Products not available</option>';
    }
}



elseif(!empty($_POST["state_id"])){
    
    
    
    //Fetch all city data
    $query = $conn->query("SELECT UOMID,UOMName FROM tblproductxuom,tblunitofmeasurement WHERE ProductXUOMProductID = ".$_POST['state_id']." AND tblproductxuom.ProductXUOMUOMID = UOMID ORDER BY UOMName ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //City option list
    if($rowCount > 0){
        echo '<option value="">--Units Updated--</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['UOMID'].'">'.$row['UOMName'].'</option>';
        }
    }else{
        echo '<option value="">Unit of Measurements not available</option>';
    }
}

































?>