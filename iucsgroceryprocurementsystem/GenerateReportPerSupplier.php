<?php 


session_start();
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




$_SESSION['SelectedSupplierID'] = $_POST['SelectedSupplier'];
$_SESSION['ReportStartDate'] = $_POST['ReportStartDate'];
$_SESSION['ReportEndDate'] = $_POST['ReportEndDate'];
$_SESSION['ReportStartDateDisplay'] = "";
$_SESSION['ReportEndDateDisplay'] = "";

$sql = "SELECT DATE_FORMAT('".$_SESSION['ReportStartDate']."', '%M %d %Y'), DATE_FORMAT('".$_SESSION['ReportEndDate']."', '%M %d %Y') ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)){
        
      
            $_SESSION['ReportStartDateDisplay'] = $row[0];
            $_SESSION['ReportEndDateDisplay'] = $row[1];
        //$_SESSION['CollectionsReportCensusYearFilterCensusYearDisplay'] = $row['CENSUSYEAR'];
    }
    
  


}




$_SESSION['SupplierNameDisplay'] = "";


$sql = "SELECT * from tblsuppliers WHERE SupplierID='".$_SESSION['SelectedSupplierID']."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)){
        
      
            $_SESSION['SupplierNameDisplay'] = $row['SupplierName'];
            
        //$_SESSION['CollectionsReportCensusYearFilterCensusYearDisplay'] = $row['CENSUSYEAR'];
    }
    
  


}










header('Location: ReportRFPPerSupplier.php');









?>