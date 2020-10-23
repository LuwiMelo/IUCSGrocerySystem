<?php
    session_start();

    require("mysql_table.php");

        //footer - page number
        class PDF extends PDF_MySQL_Table {

            function Footer() {
                    $date = date_default_timezone_set('Asia/Manila');
                    $dt = date("F j, Y  g:i A");
                    $this->SetY(-15);
                    $this->SetFont('Arial','I',8);
                    $this->Cell(0,10,"Generated on {$dt}",0,0,'L');
                    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'R');
            }
        }
        
        $db = mysqli_connect('localhost','root','','iucsproducts_db');
        $conn = mysqli_connect('localhost','root','','iucsproducts_db');




$RetrieveUserID;
$RetrieveTransactionDate;
$RetrieveFirstName;
$RetrieveLastName;
$DisplayFullName;




$sql = "SELECT * FROM tblformtransactions WHERE TransactionID = '".$_SESSION['AdminViewTransactionID']."'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)){
        
        $RetrieveUserID = $row['TransactionUserID'];
        $RetrieveTransactionDate = $row['TransactionDate'];
    }
    


}



$sql = "SELECT * FROM tblusers WHERE UserID = '".$RetrieveUserID."'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)){
        $RetrieveFirstName = $row['UserFirstName'];
        $RetrieveLastName = $row['UserLastName'];
        
    }
    


}


$DisplayFullName = $RetrieveFirstName.' '.$RetrieveLastName;
$DisplayDate;




$sql = "SELECT DATE_FORMAT('".$RetrieveTransactionDate."', '%M %d %Y') ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)){
        
      
            $DisplayDate = $row[0];
           
        //$_SESSION['CollectionsReportCensusYearFilterCensusYearDisplay'] = $row['CENSUSYEAR'];
    }
    
  


}






        
        //get data 
        //Building
        
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage('L','Letter');

        
    //header

    $brgyLogo = "fpdf/images/iucslogo.jpg";
    $cityLogo = "fpdf/images/citylogo.png";

    //$pageWidth = 279.4;

    $pageWidth = 279.4;
    $pageHeight = 215.9; 
    $margin = 10;


    $pdf->SetFont('Arial','B',12);


    //border
    //$pdf->Rect($margin,$margin, $pageWidth - $margin * 2, $pageHeight - $margin * 2);

    //brgy logo  
    $pdf->Ln(7);
    $pdf->SetX(30); 
    $pdf->Cell(0,10, $pdf->Image($brgyLogo, $pdf->GetX(),$pdf->GetY(), 20),0,0,'L',false);

    //city logo
    $pdf->SetX(220);
    //$pdf->Cell(0,10, $pdf->Image($cityLogo, $pdf->GetX(),$pdf->GetY(), 20),0,0,'L',false);


    $pdf->SetX(-325);
    $pdf->Cell(60);
    $pdf->Cell(0,10,'Republic of the Philippines',0,0,'C');
    $pdf->Ln(5);


    $pdf->SetFont('Arial','B',11);
    //$pdf->Cell(85);
    $pdf->Cell(0,10,'City of Imus',0,0,'C');
    $pdf->Ln(5);


    //$pdf->Cell(67);
    $pdf->Cell(0,10,'Imus Unida Christian School',0,0,'C');
    $pdf->Ln(5);

    

    $pdf->SetFont('Arial','B',11);
    //$pdf->Cell(77);
    $pdf->Cell(0,10,'Ordered by '.$DisplayFullName,0,0,'C');
    $pdf->Ln(5);


/*
    $pdf->SetFont('Arial','B',11);
    //$pdf->Cell(89);
    $pdf->Cell(0,10,'District V',0,0,'C');
    $pdf->Ln(5);
*/

    $pdf->SetFont('Arial','B',11);
    //$pdf->Cell(89);
    $pdf->Cell(0,10,'Date Ordered:  '.$DisplayDate,0,0,'C');
    $pdf->Ln(5);



    // Line break
    $pdf->Ln(10);


    $pdf->Cell(60,5,' ','T',0,'L',0);   // empty cell with left,top, and right borders


    $pdf->Cell(199.5,5,'','T',0,'L',0);

    //large city logo
    /*$pdf->Cell(-182);
    $pdf->Cell(0,10, $pdf->Image($cityLogo, $pdf->GetX(),$pdf->GetY(), 180),0,0,'L',false);
    $pdf->SetAlpha(0.2);*/

            $pdf->Ln(); 

        //form title
/*
        $pdf->Ln(5);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(255,0,'List of All '.$ComplaintStatusDisplay.' Domestic Complaints of '.$ComplaintMonthDisplay.' of Census Year'.' '.$_SESSION['ComplaintsReportCensusYearFilterCensusYearDisplay'],0,2,'C');
        */
        //table
        $pdf->SetFont('Arial','B',11);
        $pdf->Ln(10);
        //table-header
        $pdf->SetFillColor(200,200,200);
        //$pdf->SetX();
        //$pdf->Cell(5);
        //$pdf->Cell(10,8,'No.',1,0,'C', true);
         $pdf->Cell(20,8,'',0,0,2);
        $pdf->Cell(30,8,'Quantity',1,0,'C',true);
        $pdf->Cell(80,8,'Product Name',1,0,'C',true);
        $pdf->Cell(45,8,'Unit',1,0,'C',true);
        $pdf->Cell(30,8,'Price Per Unit',1,0,'C',true);
        $pdf->Cell(30,8,'Total',1,0,'C',true);
      
        //table-data
        $pdf->SetFont('Arial','',11);
        
        //if($BldgName == "Overall")
        //{

        $AccumulatedTotal = 0 ;

            $GetComplaintsDetails = mysqli_query($db,"SELECT tbltransactiondetails.TransactionDetailQuantity, tblproducts.ProductName, tblunitofmeasurement.UOMName, tbltransactionDetails.TransactionDetailsPricePerUnit FROM tbltransactiondetails, tblproducts, tblunitofmeasurement WHERE tbltransactiondetails.TransactionDetailTransactionID = '".$_SESSION['AdminViewTransactionID']."' AND tbltransactiondetails.TransactionDetailProductID = tblproducts.ProductID AND tbltransactiondetails.TransactionDetailUOMID = tblunitofmeasurement.UOMID     " ); //QUERY
            $TotalAmount = mysqli_num_rows($GetComplaintsDetails);
            
            while($row = mysqli_fetch_array($GetComplaintsDetails))
            {
                $pdf->Ln();
                $pdf->Cell(20,8,'',0,0,2);
                $pdf->Cell(30,8,$row[0],1,0,'C');
                $pdf->Cell(80,8,$row[1],1,0,'C');
                $pdf->Cell(45,8,$row[2],1,0,'C');
                $pdf->Cell(30,8,$row[3],1,0,'C');
                
                $QuantityRetrieve = $row[0];
                $PricePerUnitRetrieve = $row[3];
                $QuantityXPPU = $QuantityRetrieve * $PricePerUnitRetrieve;
                //$foo = "4.23423432423423";
                $DisplayQuantityXPPU = number_format((float)$QuantityXPPU, 2, '.', '');
                $pdf->Cell(30,8,$DisplayQuantityXPPU,1,0,'C');
                    
                $AccumulatedTotal = $AccumulatedTotal + $QuantityXPPU;
                
            }

          


                    //mini-table-overall
                  /*  $pdf->Ln(10);
                    $pdf->SetFont('Arial','B',12);
                    $pdf->Cell(170);
                    $pdf->Cell(67,8,"      Total Number of Tenants",1,0,'',true);
                    $pdf->Cell(17,8,"{$NumberOfTenants}     ",1,1,'R'); 
                    //mini-table-values per building
                    $GetSqlBuilding = mysqli_query($db,"SELECT strBldgName FROM tblbuilding;");
                    while($row = mysqli_fetch_array($GetSqlBuilding))
                    {
                        $BldgName = $row['strBldgName'];

                        $GetSqlTenantPerBldg = mysqli_query($db,"SELECT strBldgName FROM tbltenant, tblbuilding, tblfloor, tblunit, tblunitsize WHERE strTenantUnitBldgFloorUnitCode = strUnitBldgFloorUnitCode AND strBldgCode = strFloorBldgCode AND strFloorBldgFloorCode = strUnitBldgFloorCode AND strUnitUnitSCode = strUnitSizeCode AND strBldgName = '$BldgName';");
                        $TenantPerBldgCount = mysqli_num_rows($GetSqlTenantPerBldg);

                        $pdf->Cell(170);
                        $pdf->Cell(67,8,"{$BldgName}",1,0,'C',true);
                        $pdf->Cell(17,8,"{$TenantPerBldgCount}     ",1,1,'R'); 
                    }*/
        /*}
        else
        {
            $GetTenantAll = mysqli_query($db,"SELECT CONCAT(strTenantFirstName,' ',strTenantMiddleName,' ',strTenantLastName) AS Name, strUnitName AS Unit, strUnitSName, dtTenantBirthday, strTenantContactNo FROM tbltenant, tblbuilding, tblfloor, tblunit, tblunitsize WHERE strTenantUnitBldgFloorUnitCode = strUnitBldgFloorUnitCode AND strBldgCode = strFloorBldgCode AND strFloorBldgFloorCode = strUnitBldgFloorCode AND strUnitUnitSCode = strUnitSizeCode AND strBldgName = '$' ORDER BY strUnitName;"); //AND strBldgName = '$BldgName'
            $NumberOfTenants = mysqli_num_rows($GetTenantAll);

            while($row = mysqli_fetch_array($GetTenantAll))
            {
                $pdf->Cell(15,8,'',0,0,2);
                $pdf->Cell(64,8,$row['Name'],1,0,'C');
                $pdf->Cell(50,8,$row['Unit'],1,0,'C');
                $pdf->Cell(45,8,$row['strUnitSName'],1,0,'C');
                $pdf->Cell(45,8,$row['dtTenantBirthday'],1,0,'C');
                $pdf->Cell(45,8,$row['strTenantContactNo'],1,1,'C');
            }

                    //mini-table-overall
                    $pdf->Ln(10);
                    $pdf->SetFont('Arial','B',12);
                    $pdf->Cell(170);
                    $pdf->Cell(67,8,"      Total Number of Tenants",1,0,'',true);
                    $pdf->Cell(17,8,"{$NumberOfTenants}     ",1,1,'R'); 
        }*/











        $pdf->Ln(5);
        $pdf->SetFont('Arial','',13);
        //$pdf->Cell(0,0,"__________________________________________________________________________________________________",0,2,'C');
        $pdf->Ln(1.5);
        $pdf->Cell(0,0,"__________________________________________________________________________________________________",0,2,'C');
        
        //signature
 $pdf->SetFont('Arial','B',11);

  $pdf->Ln(3);
 $pdf->SetFillColor(200,200,200);

            $pdf->Cell(160,8,'',0,0,'C');
            $pdf->Cell(45,8,'Total Amount:',1,0,'C', true);
            $DisplayAccumulatedTotal = number_format((float)$AccumulatedTotal, 2, '.', '');
            $pdf->Cell(30,8,$DisplayAccumulatedTotal,1,0,'C',true);



 $pdf->Ln(5);
 $pdf->Ln(5);
 $pdf->Ln(5);

/*
 $pdf->Ln();
                $pdf->Cell(5);
                //$pdf->Cell(10,8,$row[],1,0,'C');
               
                $pdf->Cell(25,8,'',0,0,'C');
                $pdf->Cell(30,8,'',0,0,'C');
                $pdf->Cell(25,8,'',0,0,'C');
                $pdf->Cell(40,8,'',0,0,'C');
                $pdf->Cell(20,8,'',0,0,'C');
                $pdf->Cell(20,8,'',0,0,'C');
                $pdf->Cell(10,8,'',0,0,'C');
                $pdf->Cell(40,8,'Total:',1,0,'C');
                $pdf->Cell(25,8,'',1,0,'C');
                


*/




        $pdf->Ln(5);
        $pdf->Ln(5);

        $pdf->Ln(18);

    
        $pdf->Cell(10);
        $pdf->SetFont('Arial','',11.5);
        $pdf->Cell(20,0,"Order Acknowledged by:",0,2,'L');
        $pdf->Cell(0,0,"Approved by:",0,2,'C');
        $pdf->Cell(20);
        $pdf->Cell(220,0,"Noted as Salary Deduction",0,2,'R');

    
       // $pdf->Ln(5);

        $pdf->Ln(18);

    
        $pdf->Cell(10);
        $pdf->SetFont('Arial','',11.5);
        $pdf->Cell(20,0,"_________________________",0,2,'L');
        $pdf->Cell(0,0,"____________________________",0,2,'C');
        $pdf->Cell(20);
        $pdf->Cell(220,0,"_________________________",0,2,'R');

         $pdf->Ln(6);



         
        $pdf->Cell(30);
        $pdf->Cell(15,0,$DisplayFullName,0,2,'C');
        $pdf->Cell(210,0,"Ms. Rose Vidamo",0,2,'C');
        $pdf->Cell(210,0,'Ms. Miraflor Caimen',0,2,'R');
        //$pdf->Cell(220,0,'gerg',0,2,'R');
        $pdf->Ln(6);



         
        $pdf->Cell(30);
        $pdf->Cell(15,0,'Ordered by',0,2,'C');
        $pdf->Cell(210,0,"HRD Officer",0,2,'C');
        $pdf->Cell(205,0,"Finance Officer",0,2,'R');




        $pdf->Output('I','sample.pdf');
    
?>