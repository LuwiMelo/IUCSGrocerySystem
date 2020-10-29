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
        
       // $db = mysqli_connect('localhost','root','usbw','cpdiacms');
 //$conn = mysqli_connect('localhost','root','usbw','cpdiacms');


































$CaptainNameReport = strtoupper('Louie R. Melo');
















$SecretaryNameReport = strtoupper('Louie R. Melo');





$TreasurerNameReport = strtoupper('Louie R. Melo');

        
        //get data 
        //Building
        
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage('L','Letter');

        
    //header

    $brgyLogo = "fpdf/images/iucslogo.jpg";
    $cityLogo = "fpdf/images/citylogo.png";

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
    $pdf->Cell(0,10, $pdf->Image($cityLogo, $pdf->GetX(),$pdf->GetY(), 20),0,0,'L',false);


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
    $pdf->Cell(0,10,'',0,0,'C');
    $pdf->Ln(5);


    $pdf->SetFont('Arial','B',11);
    //$pdf->Cell(89);
    $pdf->Cell(0,10,'',0,0,'C');
    $pdf->Ln(5);


    $pdf->SetFont('Arial','B',11);
    //$pdf->Cell(89);
    $pdf->Cell(0,10,'',0,0,'C');
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
        $pdf->Ln(5);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(255,0,'Invoice of Grocery Items Ordered'.' ',0,2,'C');
        
        //table
        $pdf->SetFont('Arial','B',11);
        $pdf->Ln(10);
        //table-header
        $pdf->SetFillColor(200,200,200);
        //$pdf->SetX();
        $pdf->Cell(5);
        $pdf->Cell(35,8,'',0,0,2);
        $pdf->Cell(20,8,'Quantity',1,0,'C',true);
        $pdf->Cell(70,8,'Product Name',1,0,'C',true);
        $pdf->Cell(25,8,'Unit',1,0,'C',true);
        $pdf->Cell(30,8,'Price Per Unit',1,0,'C',true);
        //$pdf->Cell(25,8,'Status',1,0,'C',true);
        $pdf->Cell(40,8,'Accumulated Price',1,0,'C',true);
       // $pdf->Cell(25,8,'Civil Status',1,0,'C',true);
        //table-data
        $pdf->SetFont('Arial','',11);
        
        
                $pdf->Ln();
                $pdf->Cell(5);
                //$pdf->Cell(10,8,$row[],1,0,'C');
    $pdf->Cell(35,8,'',0,0,2);
                $pdf->Cell(20,8,'2',1,0,'C');
                $pdf->Cell(70,8,'Head and Shoulders',1,0,'C');
                $pdf->Cell(25,8,'11+1',1,0,'C');
                $pdf->Cell(30,8,'48.85',1,0,'C');
                //$pdf->Cell(25,8,'',1,0,'C');
                $pdf->Cell(40,8,'97.5',1,0,'C');
                //$pdf->Cell(25,8,'',1,0,'C');
                
                
                
            

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
                $pdf->Cell(5);
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
        $pdf->Cell(0,0,"__________________________________________________________________________________________________",0,2,'C');
        $pdf->Ln(1.5);
        $pdf->Cell(0,0,"__________________________________________________________________________________________________",0,2,'C');
        
        //signature


 $pdf->Ln(5);
 $pdf->Ln(5);
 $pdf->Ln(5);


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
                $pdf->Cell(40,8,'Total Amount:',1,0,'C');
                $pdf->Cell(25,8,'97.5',1,0,'C');
                











 $pdf->Ln(5);
 $pdf->Ln(5);

        $pdf->Ln(18);

    
        $pdf->Cell(10);
        $pdf->SetFont('Arial','',11.5);
        $pdf->Cell(20,0,"_________________________",0,2,'L');
        $pdf->Cell(0,0,"____________________________",0,2,'C');
        $pdf->Cell(20);
        $pdf->Cell(220,0,"_________________________",0,2,'R');

         $pdf->Ln(6);



         
        $pdf->Cell(30);
        $pdf->Cell(15,0, $CaptainNameReport,0,2,'C');
        $pdf->Cell(210,0,$SecretaryNameReport,0,2,'C');
        //$pdf->Cell(203,0,$TreasurerNameReport,0,2,'R');
        $pdf->Cell(220,0,$TreasurerNameReport,0,2,'R');
        $pdf->Ln(6);



         
        $pdf->Cell(30);
        $pdf->Cell(15,0,"Signatory",0,2,'C');
        $pdf->Cell(210,0,"Signatory",0,2,'C');
        $pdf->Cell(203,0,"Signatory",0,2,'R');




        $pdf->Output('I','sample.pdf');
    
?>