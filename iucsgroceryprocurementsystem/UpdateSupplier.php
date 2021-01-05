<?php 


include 'connection.php';




$SupplierID = $_POST['SupplierID'];
$SupplierName = $_POST['SupplierName'];
$SupplierDetails = $_POST['SupplierDetails'];



try
{
    //$LatestSchoolYear;
    $statement = $dbh->prepare("UPDATE tblsuppliers SET SupplierName = :SupplierName , SupplierDetails = :SupplierDetails WHERE SupplierID = :SupplierID ");
    
    
    if ($statement->execute(array(':SupplierName' => $SupplierName, ':SupplierDetails' => $SupplierDetails, ':SupplierID' => $SupplierID   ))    ){
        
        
        header('Location: SuppliersList.php');
        
        
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