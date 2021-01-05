<?php 



include 'connection.php';




$UOMID = $_POST['UOMID'];
$UnitOfMeasurementName = $_POST['UnitOfMeasurement'];
$UOMDescription = $_POST['UOMDetails'];



try
{
    //$LatestSchoolYear;
    $statement = $dbh->prepare("UPDATE tblunitofmeasurement SET UOMName = :UOMName, UOMDescription=  :UOMDescription WHERE UOMID = :UOMID  ");
    
    
    if ($statement->execute(array(':UOMName' => $UnitOfMeasurementName, ':UOMDescription' => $UOMDescription, ':UOMID' => $UOMID   ))    ){
        
        
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