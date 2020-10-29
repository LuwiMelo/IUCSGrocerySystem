<?php



include 'connection.php';



if (isset($_POST["RetrieveTransaction"]))
{
 
        
    $Retrieve = json_decode($_POST["RetrieveTransaction"]);
    
    
    
    
    
       $statement = $dbh->prepare("UPDATE tblproducts 
      SET ProductName = :ProductName, 
          ProductDetails = :ProductDetails,
          ProductCategoryID = :ProductCategoryID
      WHERE ProductID  =  :ProductID ");
    
    
    if ($statement->execute(array(':ProductName' => $Retrieve->ProductName, ':ProductDetails' => $Retrieve->ProductDescription, ':ProductCategoryID' => $Retrieve->ProductCategoryID,  ':ProductID' => $Retrieve->ProductID   ))    ){
        
        

        
        $UOMIDList;
        $SupplierIDList;
        
        $AlreadyExistsCount = 0;
        
        

        
try
{
    $LatestSchoolYear;
    $statement = $dbh->prepare("SELECT ProductXUOMUOMID, ProductXUOMSupplierID FROM tblproductxuom WHERE ProductXUOMProductID = :ProductXUOMProductID  ");
    $statement->execute(array(':ProductXUOMProductID' => $Retrieve->ProductID));
    $row = $statement->fetchAll();
    
    if (!empty($row)) {
          
            
    foreach($row as $data){

            $UOMIDList[$AlreadyExistsCount] = $data['ProductXUOMUOMID'];
            $SupplierIDList[$AlreadyExistsCount] = $data['ProductXUOMSupplierID'];
            $AlreadyExistsCount++;
    }
          
    } 
    else {
   
       
    }
  
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
        
        
        
        
    $TotalItemsOrdered = count($Retrieve->ProductPricing);
    $TotalRetrieveFromDB = count($UOMIDList);
    

        

        
    
    for ($x = 0; $x < $TotalItemsOrdered; $x++)
    {
        
        echo $Retrieve->ProductPricing[$x]->Price;
        echo '<br>';
        
        
        
        $InsertNewProductValidator = true;
        
        
        for($y = 0; $y < $TotalRetrieveFromDB; $y++){
            
            
            if($Retrieve->ProductPricing[$x]->UOMID == $UOMIDList[$y]){
                
                 if($Retrieve->ProductPricing[$x]->SupplierID == $SupplierIDList[$y]){
                     
                     
                     $InsertNewProductValidator = false;
                     
                     
                     
                     
                     
                 }
                

                
            }
            
            
            
            
            
        }
        
        
        

        
        
if($InsertNewProductValidator == FALSE){
    

        
       $statement4 = $dbh->prepare("UPDATE tblproductxuom SET Price = :Price WHERE ProductXUOMProductID = :ProductXUOMProductID AND ProductXUOMUOMID = :ProductXUOMUOMID  AND  ProductXUOMSupplierID = :ProductXUOMSupplierID");
    
    
    if ($statement4->execute(array(':Price' => $Retrieve->ProductPricing[$x]->Price, ':ProductXUOMProductID' => $Retrieve->ProductID ,':ProductXUOMUOMID' => $Retrieve->ProductPricing[$x]->UOMID,  ':ProductXUOMSupplierID' => $Retrieve->ProductPricing[$x]->SupplierID   ))    ){
    
         echo ' na-update ang price';
    }
    else{
        
        echo 'failed update ng price';
    }
    
    
}
        
else if($InsertNewProductValidator == TRUE){
    
        $sql4 = "INSERT INTO tblproductxuom (`ProductXUOMProductID`,`ProductXUOMUOMID`,`ProductXUOMSupplierID`,`Price`) VALUES ('".$Retrieve->ProductID."' , '".$Retrieve->ProductPricing[$x]->UOMID."', '".$Retrieve->ProductPricing[$x]->SupplierID."', '".$Retrieve->ProductPricing[$x]->Price."' );";
        
        
    $statement5 = $dbh->prepare("INSERT INTO tblproductxuom (`ProductXUOMProductID`,`ProductXUOMUOMID`,`ProductXUOMSupplierID`,`Price`) VALUES (:ProductXUOMProductID, :ProductXUOMUOMID, :ProductXUOMSupplierID, :Price );");
    
    
    if ($statement5->execute(array(':ProductXUOMProductID' => $Retrieve->ProductID, ':ProductXUOMUOMID' => $Retrieve->ProductPricing[$x]->UOMID, ':ProductXUOMSupplierID' => $Retrieve->ProductPricing[$x]->SupplierID,  ':Price' => $Retrieve->ProductPricing[$x]->Price   ))    ){
    
        echo 'naginsert ng bagong entry';
    }
    else{
        echo 'failed to insert new entry';
    }
    
    
    
    
    
}
        
       
        
        
        
        
        
        
        
        
    } //for loop
    

        
        
    }// if product is inserted successfully 
    
    
    
    
    
    
    
}










?>