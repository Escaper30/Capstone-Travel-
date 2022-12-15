<?php
require('fpdf184/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image('img/logo_capstone/logo_1.png',95,15,30);
$pdf->Ln(30);
$pdf->SetFont('Arial', 'B', 12);
    // Move to the right
    $pdf->Ln(15);
    $pdf->Cell(80);
    // Title
    $pdf->Cell(35,10,'Voyager Inc.',0,0,'C');
    $pdf->Ln(10);
    $pdf->Cell(80);
    $pdf->Cell(35,10,'Tours & Travels',0, 1,'C');
    

    
// $pdf->Cell(55, 5, 'Reference Code', 0, 0);
// $pdf->Cell(58, 5, ': 026ETY', 0, 0);
$pdf->Cell(165, 15, 'Date', 0, 0, 'R');
$pdf->Cell(0, 15, ': 15-12-2022', 0, 1, 'R');
// $pdf->Cell(55, 5, 'Amount', 0, 0);
// $pdf->Cell(58, 5, ': 2674', 0, 0);
// $pdf->Cell(25, 5, 'Channel', 0, 0);
// $pdf->Cell(52, 5, ': WEB', 0, 1);
$pdf->Cell(55, 15, 'Status', 0, 0);
$pdf->Cell(58, 15, ': In-Progress', 0, 1);
$pdf->Line(10, 85, 200, 85);
$pdf->Ln(10);
$pdf->Cell(55, 5, 'Product Name', 0, 0);
$pdf->Cell(58, 5, ': Maldives', 0, 1);
$pdf->Cell(55, 5, 'No. of Person', 0, 0);
$pdf->Cell(58, 5, ': 2', 0, 1);
$pdf->Cell(55, 5, 'Total Charges', 0, 0);
$pdf->Cell(58, 5, ': $498.00', 0, 1);
// $pdf->Cell(55, 5, 'Product Delivery Charge', 0, 0);
// $pdf->Cell(58, 5, ': 0', 0, 1);
$pdf->Line(10, 100, 200, 100);
$pdf->Ln(10);//Line break
$pdf->Cell(55, 5, 'Paid by', 0, 0);
$pdf->Cell(58, 5, ': Test', 0, 1);
$pdf->Cell(55, 5, 'Email Id', 0, 0);
$pdf->Cell(58, 5, ': test@gmail.com', 0, 1);
$pdf->Line(155, 175, 195, 175);
$pdf->Ln(32);//Line break
$pdf->Cell(140, 5, '', 0, 0);
$pdf->Cell(50, 5, ' Signature', 0, 1, 'C');
$pdf->Output();
?>
$pdf->Output();
?>

<!-- 
//include connection file
//include "db_conn.php";
//include_once('fpdf184/fpdf.php');

// $cartlist = "";



// class PDF extends FPDF
// {
// // Page header
// function Header()
// {
//     // Logo
    
//     $this->Image('assets/img2.png',95,10,30);
//     $this->Ln(30);
//     $this->SetFont('Arial','B',13);
//     // Move to the right
//     $this->Ln(10);
//     $this->Cell(80);
//     // Title
//     $this->Cell(35,10,'Tony Toys',0,0,'C');
//     $this->Ln(10);
//     $this->Cell(80);
//     $this->Cell(35,10,'For the child within you',0,0,'C');

//     // Line break
//     // Line break
// }

// // Page footer
// function Footer()
// {
//     // Position at 1.5 cm from bottom
//     $this->SetY(-30);
//     // Arial italic 8
//     $this->SetFont('Arial','I',8);
//     // Page number
//     $this->Cell(0, 10, 'Copyright Tony Toys 2022', 0, 0, 'C');
//     $this->Ln(10);
//     $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
// }
// }
// if(isset($_SESSION["cartlist"]) && !empty($_SESSION["cartlist"])){
//     $session = $_SESSION["cartlist"];     
//     $total = 0;
//     $checkoutproduct = new checkoutproduct();
   
//     $result = $checkoutproduct->checkoutproduct($session);


// $pdf = new PDF();
// $pdf->AliasNbPages();
// $pdf->AddPage();

// // $result = mysqli_query($conn, "SELECT * FROM oop_reglog.products") or die("database error:". mysqli_error($conn));
// // $row = mysqli_fetch_array($result, MYSQLI_ASSOC)

// // $table2 = mysqli_query($conn, "SELECT * FROM poojadimple_bookland.customer") or die("database error:". mysqli_error($conn));

// $display_heading = array('product_id'=>'Id', 'pname'=> 'Product Name', 'price'=> 'Price', 'category'=>'Category', 'total'=>'Total Price');
// //$display_table2 = array('customer_id'=>'Customer Id', 'customer_name'=>'Customer Name : ', 'customer_email'=>'Customer Email : ', 'customer_add'=>'Customer Address : ');

// // $header = mysqli_query($conn, "SHOW columns FROM oop_reglog.products");
// // $row = mysqli_fetch_array($result, MYSQLI_ASSOC)

// while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
        
//     $pdf->Ln(20);

//     $pdf->Cell(200,10,'Invoice Details',0,0,'C');
//     $pdf->Ln(20);

//     $pdf->Cell(60,10,$display_heading['pname'],1, 0, 'C');
//     $pdf->Cell(60,10,$display_heading['price'],1, 0, 'C');
//     $pdf->Cell(60,10,$display_heading['category'],1, 0, 'C');

    
//     foreach($result as $row){
//         $pdf->Ln(10);
//         $pdf->SetFont('Arial','',14);
//         // Displaying book table records
//         $pdf->Cell(60,10,$row['pname'],1, 0, 'C');
//         $pdf->Cell(60,10,"$".$row['price'],1, 0, 'C');
//         $pdf->Cell(60,10,$row['category'],1, 0, 'C');
//         $total+=$row['price'];

//     }
//     // Performing Sum of all the values in price column 
//     // $row = mysqli_fetch_array($result, MYSQLI_ASSOC)

//     $pdf->Ln(20);
//     $pdf->Cell(130);

//     $pdf->SetFont('Arial','B',14);
//     $pdf->Cell(10,10,"Total", 0, 'R');
//     $pdf->Cell(10,10,"$".$total, 0, 'R');
//     // $pdf->AddPage();
    
// }




// $pdf->Output();
// }

// 
