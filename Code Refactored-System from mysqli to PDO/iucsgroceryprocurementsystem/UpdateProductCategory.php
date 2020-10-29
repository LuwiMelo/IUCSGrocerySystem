<?php 


include 'connection.php';




$ProductCategoryID = $_POST['ProductCategoryID'];
$ProductCategoryName = $_POST['ProductCategory'];
$ProductCategoryDescription = $_POST['ProductCategoryDetails'];




try
{
    //$LatestSchoolYear;
    $statement = $dbh->prepare("UPDATE tblproductcategories SET ProductCategoryName = :ProductCategoryName, ProductCategoryDescription = :ProductCategoryDescription WHERE ProductCategoryID = :ProductCategoryID  ");
    
    
    if ($statement->execute(array(':ProductCategoryName' => $ProductCategoryName, ':ProductCategoryDescription' => $ProductCategoryDescription, ':ProductCategoryID' => $ProductCategoryID   ))    ){
        
        
    header('Location: ProductCategoriesList.php');
        
        
    }
    else
{
   header("HTTP/1.0 403 Forbidden");
}
    
  
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
    $QuerySuccessIndicator = false;
     header("HTTP/1.0 403 Forbidden");
} 














?>