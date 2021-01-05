<?php 



include 'connection.php';



$UOMID = $_POST['UOMID'];
$UnitOfMeasurement = $_POST['UnitOfMeasurement'];
$UOMDetails = $_POST['UOMDetails'];


try
{
    //$LatestSchoolYear;
    $statement = $dbh->prepare("INSERT INTO tblunitofmeasurement (`UOMID`,`UOMName`,`UOMDescription`) VALUES (:UOMID , :UOMName, :UOMDescription  );");
    
    
    if ($statement->execute(array(':UOMID' => $UOMID, ':UOMName' => $UnitOfMeasurement, ':UOMDescription' => $UOMDetails   ))    ){
        
        
          header('Location: UnitOfMeasurementList.php');
        
        
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