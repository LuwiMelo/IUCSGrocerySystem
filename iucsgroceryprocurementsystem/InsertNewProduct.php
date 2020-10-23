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




if (isset($_POST["RetrieveTransaction"]))
{
 
    
    $Retrieve = json_decode($_POST["RetrieveTransaction"]);
    
    
    
      $sql3 = "INSERT INTO tblproducts (`ProductID`,`ProductName`,`ProductDetails`,`ProductCategoryID`) VALUES ('".$Retrieve->ProductID."' , '".$Retrieve->ProductName."', '".$Retrieve->ProductDescription."', '".$Retrieve->ProductCategoryID."' );";
    
    

    
    if ($conn->query($sql3) === TRUE) {
        
    
  
        
    $TotalItemsOrdered = count($Retrieve->ProductPricing);
    


    
    for ($x = 0; $x < $TotalItemsOrdered; $x++)
    {
        
        
        
        $sql4 = "INSERT INTO tblproductxuom (`ProductXUOMProductID`,`ProductXUOMUOMID`,`ProductXUOMSupplierID`,`Price`) VALUES ('".$Retrieve->ProductID."' , '".$Retrieve->ProductPricing[$x]->UOMID."', '".$Retrieve->ProductPricing[$x]->SupplierID."', '".$Retrieve->ProductPricing[$x]->Price."' );";
        
        
       if ($conn->query($sql4) === TRUE) {
            
            //$LastTransactionID++;
           //header('Location: ProductsList.php');
            
        }
        
        
    }
    

        
        
    }// if product is inserted successfully 
    
    
    
    
    
    
    
}










?>