<?php


session_start();



include 'connection.php';



$CheckUsername = $_POST['CheckUsername'];
$CheckPassword = $_POST['CheckPassword'];



$RetrieveUserID;
$RetrieveUserTypeID;
$RetrievePositionLevel;
$RetrieveEmployeeID;
$RetrievePercentage;





try
{
 

    
    $statement = $dbh->prepare("SELECT UserID,UserUserTypeID,UserPassword,PositionLevel,UserEmployeeID,RTRIM(LTRIM(ThresholdPercentage)) AS 'Trimmed' FROM tblUsers,tbltakehomepaythreshold WHERE UserUsername = :UserUsername AND UserPassword = :UserPassword AND RTRIM(LTRIM(tbltakehomepaythreshold.ThresholdEmployeeID)) = tblusers.UserEmployeeID  ");
    $statement->execute(array(':UserUsername' => $CheckUsername, ':UserPassword' => $CheckPassword));
    $row = $statement->fetch();
    
    
    
    if (!empty($row)) {
        

        
         // server should keep session data for AT LEAST 1 hour
         ini_set('session.gc_maxlifetime', 7200);

         // each client should remember their session id for EXACTLY 1 hour
         session_set_cookie_params(7200);
        
        
         $RetrieveUserID = $row['UserID'];
         $RetrieveUserTypeID = $row['UserUserTypeID'];
         $RetrieveUserPassword = $row['UserPassword'];
         $RetrievePositionLevel = $row['PositionLevel'];
         $RetrieveEmployeeID = $row['UserEmployeeID'];
         $RetrievePercentage = $row['Trimmed'];
        
        

        
        
           /*
    $RetrievePercentage;
    
    $sql2 = "SELECT RTRIM(LTRIM(ThresholdEmployeeID)) AS 'Trimmed', RTRIM(LTRIM(ThresholdPercentage)) AS 'PercentRetrieve' FROM tbltakehomepaythreshold WHERE RTRIM(LTRIM(ThresholdEmployeeID)) = '".$RetrieveEmployeeID."' ORDER BY ThresholdDate DESC LIMIT 1";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    
    $RetrievePercentage = $row['PercentRetrieve'];
    
    
    
}
    
    */
        
        

        
           if($RetrieveUserTypeID == '1'){
        
        
                date_default_timezone_set('Asia/Manila');
       
      
          
                header('Location: adminhome.php');
         
         
         
        
        
        
        
        
        
           }
        
        
    else if($RetrieveUserTypeID == '2'){
         
         date_default_timezone_set('Asia/Manila');
       
         
         $date = date('d');
         
         $dateDayOftheWeek = date('l');
         
         //if($date <= 19){
             //if($date > 19){
        if($dateDayOftheWeek == 'Tuesday' || $dateDayOftheWeek == 'Wednesday' | $dateDayOftheWeek == 'Thursday' ){     
             $PercentageThreshold;
             

             
             if($RetrievePositionLevel == '1'){
                 $PercentageThreshold = 40;
             }
             
              if($RetrievePositionLevel == '0'){
                 $PercentageThreshold = 50;
             }
             
             
             
             
             
            $PercentSignRemoved =  str_replace("%","",$RetrievePercentage);
            //$ConvertedToInt =  (int)$PercentSignRemoved;
             
             
             
             
             
             
             
             
             if($PercentSignRemoved >= $PercentageThreshold){
                 session_start();
                $_SESSION['UserUserID'] = $RetrieveUserID;
                $_SESSION['UserUserPassword'] = $RetrieveUserPassword;
         
          
                header('Location: userhome.php');
             }
             
             else{
                 echo $RetrievePercentage;
                 header('Location: systemloginnettakehomeissue.php');
             }
             
             
             
              
         }
         
         else{
             
             /*
             if($RetrieveUserID == 4){
                 
                   session_start();
                   $_SESSION['UserUserID'] = $RetrieveUserID;
                   $_SESSION['UserUserPassword'] = $RetrieveUserPassword;
                   header('Location: userhome.php');
                 
             }
             
             else{
                  header('Location: systemloginnotoperating.php');
             }
                 
                 
                 */
             
                 header('Location: systemloginnotoperating.php');
         }
         
        
        
         /*
          session_start();
                   $_SESSION['UserUserID'] = $RetrieveUserID;
                   $_SESSION['UserUserPassword'] = $RetrieveUserPassword;
                   header('Location: userhome.php');
                   */
         
    }
        
          
        
        
          
        
        
    } 
    else {
   
       header('Location: systemloginfail.php');
    }

 

}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}







?>