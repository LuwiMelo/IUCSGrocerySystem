<?php 


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




if (isset($_POST["RetrieveTransaction"]))
{

    
 $Retrieve = json_decode($_POST["RetrieveTransaction"]);

    

    
    
    
    
    $sql3 = "INSERT INTO tblformtransactions (`TransactionID`,`TransactionDetails`,`TransactionUserID`,`TransactionDate`) VALUES ('".$Retrieve->TransactionID."' , '".$Retrieve->TransactionDetails."', '".$Retrieve->TransactionName."', '".$Retrieve->TransactionDate."' );";
    
    
    

if ($conn->query($sql3) === TRUE) {
   
    
     
    
    
    
    
    $TotalItemsOrdered = count($Retrieve->TransactionItems);
    
    
    
    
    
    
    
    
    
    
    
    
$LastTransactionID;

$sql = "SELECT MAX(TransactionDetailID)+1 AS 'MaxID' FROM tbltransactiondetails ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)){
        
       $LastTransactionID = $row['MaxID'];
        
        if($LastTransactionID == NULL){
            $LastTransactionID = "1";
        }
       
    }
    
}
    
    
    

    
    for ($x = 0; $x < $TotalItemsOrdered; $x++)
    {
        
        
        
        $sql4 = "INSERT INTO tbltransactiondetails (`TransactionDetailID`,`TransactionDetailProductID`,`TransactionDetailUOMID`,`TransactionDetailQuantity`,`TransactionDetailTransactionID`,`TransactionDetailsPricePerUnit`) VALUES ('".$LastTransactionID."' , '".$Retrieve->TransactionItems[$x]->ProductID."', '".$Retrieve->TransactionItems[$x]->UOMID."', '".$Retrieve->TransactionItems[$x]->Quantity."', '".$Retrieve->TransactionID."',  '".$Retrieve->TransactionItems[$x]->PricePerUnit."' );";
        
        
       if ($conn->query($sql4) === TRUE) {
            
            $LastTransactionID++;
            
        }
        
        
        
      
        
        
        
        
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
} else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
    
   
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
else{
    //echo $_POST['myData'];
}


//echo $obj;

?>