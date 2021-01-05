<?php 


include 'connection.php';




$ProductCategoryID = $_POST['ProductCategoryID'];
$ProductCategory = $_POST['ProductCategory'];
$ProductCategoryDetails = $_POST['ProductCategoryDetails'];




try
{
    //$LatestSchoolYear;
    $statement = $dbh->prepare("INSERT INTO tblproductcategories (`ProductCategoryID`,`ProductCategoryName`,`ProductCategoryDescription`) VALUES (:ProductCategoryID , :ProductCategoryName, :ProductCategoryDescription  );");
    
    
    if ($statement->execute(array(':ProductCategoryID' => $ProductCategoryID, ':ProductCategoryName' => $ProductCategory, ':ProductCategoryDescription' => $ProductCategoryDetails   ))    ){
        
        
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