<?php



session_start();

include 'connection.php';



try
{
    //$LatestSchoolYear;
    $statement = $dbh->prepare("UPDATE tblusers
             SET UserUsername = :UserUsername,
             UserPassword = :UserPassword,
             UserFirstName = :UserFirstName,
             UserLastName =  :UserLastName,
             UserUserTypeID = :UserUserTypeID,
             PositionLevel = :PositionLevel,
             UserEmployeeID = :UserEmployeeID
             WHERE
             UserID = :UserID   ");
    
    
    if ($statement->execute(array(':UserUsername' => $_POST['UserUsername'], ':UserPassword' => $_POST['UserPassword'], ':UserFirstName' => $_POST['UserFirstName'],  ':UserLastName' => $_POST['UserLastName'], ':UserUserTypeID' => 2,':PositionLevel' => $_POST['PositionLevel'],':UserEmployeeID' => $_POST['EmployeeID'],':UserID' => $_POST['UserID']   ))    ){
        
        
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