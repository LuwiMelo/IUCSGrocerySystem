<?php 



include 'connection.php';


$SupplierID = $_POST['SupplierID'];
$SupplierName = $_POST['SupplierName'];
$SupplierDetails = $_POST['SupplierDetails'];


try
{
    //$LatestSchoolYear;
    $statement = $dbh->prepare("INSERT INTO tblsuppliers (`SupplierID`,`SupplierName`,`SupplierDetails`) VALUES (:SupplierID , :SupplierName , :SupplierDetails  );");
    
    
    if ($statement->execute(array(':SupplierID' => $SupplierID, ':SupplierName' => $SupplierName, ':SupplierDetails' => $SupplierDetails   ))    ){
        
        
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