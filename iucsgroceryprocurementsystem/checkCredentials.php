<?php



$CheckUsername = $_POST['CheckUsername'];
$CheckPassword = $_POST['CheckPassword'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iucsproducts_db";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 



$RetrieveUserID;
$RetrieveUserTypeID;
$RetrievePositionLevel;
$RetrieveEmployeeID;
$RetrievePercentage;
//$RetrieveEmployeeSalary;
//$RetrieveNetTakeHomePay;











$sql = "SELECT UserID,UserUserTypeID,UserPassword,PositionLevel,UserEmployeeID,RTRIM(LTRIM(ThresholdPercentage)) AS 'Trimmed' FROM tblUsers,tbltakehomepaythreshold WHERE UserUsername = '".$CheckUsername."' AND UserPassword = '".$CheckPassword."' AND RTRIM(LTRIM(tbltakehomepaythreshold.ThresholdEmployeeID)) = tblusers.UserEmployeeID  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)){
        
       $RetrieveUserID = $row['UserID'];
       $RetrieveUserTypeID = $row['UserUserTypeID'];
       $RetrieveUserPassword = $row['UserPassword'];
       $RetrievePositionLevel = $row['PositionLevel'];
       $RetrieveEmployeeID = $row['UserEmployeeID'];
       $RetrievePercentage = $row['Trimmed'];
    }
    

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
         
         
         
         //if($date <= 19){
             if($date > 19){
             
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

else{
     //header('Location: systemlogin.php');
 /*   if($CheckUsername == 'Employee1' && $CheckPassword == 'Employee1'){
    
    header('Location: userhome.php');
}
*/
    
    header('Location: systemloginfail.php');

}


















?>