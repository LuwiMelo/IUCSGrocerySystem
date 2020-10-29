<?php



session_start();


include 'connection.php';







try
{
    //$LatestSchoolYear;
    $statement = $dbh->prepare("INSERT INTO tblusers (`UserID`,`UserUsername`,`UserPassword`,`UserFirstName`,`UserLastName`,`UserUserTypeID`,`PositionLevel`,`UserEmployeeID`) VALUES (:UserID , :UserUsername, :UserPassword, :UserFirstName, :UserLastName, :UserUserTypeID , :PositionLevel , :UserEmployeeID );");
    
    
    if ($statement->execute(array(':UserID' => $_POST['UserID'], ':UserUsername' => $_POST['UserUsername'], ':UserPassword' => $_POST['UserPassword'], ':UserFirstName' => $_POST['UserFirstName'],  ':UserLastName' => $_POST['UserLastName'],  ':UserUserTypeID' => 2, ':PositionLevel' => $_POST['PositionLevel'],  ':UserEmployeeID' => $_POST['EmployeeID']    ))    ){
        
        
            header('Location: UserList.php');
        
        
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