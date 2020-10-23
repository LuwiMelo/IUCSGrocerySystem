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
    
    
    
      $sql3 = "UPDATE tblproducts 
      SET ProductName = '".$Retrieve->ProductName."', 
          ProductDetails = '".$Retrieve->ProductDescription."',
          ProductCategoryID = '".$Retrieve->ProductCategoryID."'
      WHERE ProductID  = '".$Retrieve->ProductID."'  ";
    
    

    
    if ($conn->query($sql3) === TRUE) {
        
    
  
        
        
        $UOMIDList;
        $SupplierIDList;
        
        $AlreadyExistsCount = 0;
        
     $sql9 = "SELECT ProductXUOMUOMID, ProductXUOMSupplierID FROM tblproductxuom WHERE ProductXUOMProductID = '".$Retrieve->ProductID."'   ";
        
     $result = $conn->query($sql9);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)){
        
        $UOMIDList[$AlreadyExistsCount] = $row['ProductXUOMUOMID'];
        $SupplierIDList[$AlreadyExistsCount] = $row['ProductXUOMSupplierID'];
        $AlreadyExistsCount++;
   

    
}
}
    
    

    
   
        
        
    
        
        
        
    $TotalItemsOrdered = count($Retrieve->ProductPricing);
    $TotalRetrieveFromDB = count($UOMIDList);
    

        
        
        
        
        
        
    
    for ($x = 0; $x < $TotalItemsOrdered; $x++)
    {
        
        
        
        
        $InsertNewProductValidator = true;
        
        
        for($y = 0; $y < $TotalRetrieveFromDB; $y++){
            
            
            if($Retrieve->ProductPricing[$x]->UOMID == $UOMIDList[$y]){
                
                 if($Retrieve->ProductPricing[$x]->SupplierID == $SupplierIDList[$y]){
                     
                     
                     $InsertNewProductValidator = false;
                     
                     
                     
                     
                     
                 }
                

                
            }
            
            
            
            
            
        }
        
        
        

        
        
if($InsertNewProductValidator == FALSE){
    
      $sql4 = "UPDATE tblproductxuom SET Price = '".$Retrieve->ProductPricing[$x]->Price."' WHERE ProductXUOMProductID = '".$Retrieve->ProductID."' AND ProductXUOMUOMID = '".$Retrieve->ProductPricing[$x]->UOMID."'  AND  ProductXUOMSupplierID = '".$Retrieve->ProductPricing[$x]->SupplierID."'     ";
        
        
       if ($conn->query($sql4) === TRUE) {
            
            //$LastTransactionID++;
           //header('Location: ProductsList.php');
            
        }
    
    
    
    
    
}
        
else if($InsertNewProductValidator == TRUE){
    
        $sql4 = "INSERT INTO tblproductxuom (`ProductXUOMProductID`,`ProductXUOMUOMID`,`ProductXUOMSupplierID`,`Price`) VALUES ('".$Retrieve->ProductID."' , '".$Retrieve->ProductPricing[$x]->UOMID."', '".$Retrieve->ProductPricing[$x]->SupplierID."', '".$Retrieve->ProductPricing[$x]->Price."' );";
        
        
       if ($conn->query($sql4) === TRUE) {
            
            //$LastTransactionID++;
           //header('Location: ProductsList.php');
            
        }
    
    
    
}
        
       
        
        
        
        
        
        
        
        
    } //for loop
    

        
        
    }// if product is inserted successfully 
    
    
    
    
    
    
    
}










?>