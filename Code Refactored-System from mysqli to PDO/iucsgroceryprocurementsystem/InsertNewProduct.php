<?php




include 'connection.php';



if (isset($_POST["RetrieveTransaction"]))
{
 
    
    $Retrieve = json_decode($_POST["RetrieveTransaction"]);
    
    
    
    
    
     $statement = $dbh->prepare("INSERT INTO tblproducts (`ProductID`,`ProductName`,`ProductDetails`,`ProductCategoryID`) VALUES (:ProductID , :ProductName, :ProductDetails, :ProductCategoryID );");
    

    
    if ($statement->execute(array(':ProductID' => $Retrieve->ProductID, ':ProductName' => $Retrieve->ProductName, ':ProductDetails' => $Retrieve->ProductDescription, ':ProductCategoryID' => $Retrieve->ProductCategoryID   ))    ){
        
    
  
        
    $TotalItemsOrdered = count($Retrieve->ProductPricing);
    


    
    for ($x = 0; $x < $TotalItemsOrdered; $x++)
    {
        
        
        
        $statement2 = $dbh->prepare("INSERT INTO tblproductxuom (`ProductXUOMProductID`,`ProductXUOMUOMID`,`ProductXUOMSupplierID`,`Price`) VALUES (:ProductXUOMProductID , :ProductXUOMUOMID, :ProductXUOMSupplierID, :Price );");
        
        if ($statement2->execute(array(':ProductXUOMProductID' => $Retrieve->ProductID, ':ProductXUOMUOMID' => $Retrieve->ProductPricing[$x]->UOMID, ':ProductXUOMSupplierID' => $Retrieve->ProductPricing[$x]->SupplierID, ':Price' => $Retrieve->ProductPricing[$x]->Price   ))    ){
              
              
              
              
          }
        
        
        
        
        
    }
    

        
        
    }// if product is inserted successfully 
    
    
    
    
    
    
    
}










?>