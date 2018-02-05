<?php 


 $name=$_POST['name'];
 $rollno=$_POST['rollno'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $hallno=$_POST['hallno']; 
 $purpose=$_POST['purpose'];
 $strength=$_POST['strength'];
 $date=$_POST['date'];
 $fromtime=$_POST['fromtime'];
 $totime=$_POST['totime'];
 $currentDate = date("j/n/Y");
require('fpdf.php');
$pdf = new FPDF();
$title = "Hall request Form";
$pdf->SetTitle($title);


// $pdf->PrintChapter(1,'A RUNAWAY REEF','20k_c1.txt');
// $pdf->PrintChapter(2,'THE PROS AND CONS','20k_c2.txt');

$pdf->AddPage();
$pdf->SetTopMargin(0);
$pdf->Image('logo.png',2,5,40);

 $pdf->SetFont('helvetica','',16);

$pdf->SetLeftMargin(50);
 $pdf->Cell(0,20,'INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,  ',0,0);
 $pdf->Ln(10);
 $pdf->SetLeftMargin(40);
  $pdf->Cell(0,20,'  DESIGN AND MANUFACTURING, KANCHEEPURAM',0,0);

$pdf->SetFont('helvetica','',12);
$pdf->SetLeftMargin(18);
 $pdf->Ln(10);
$pdf->Cell(0,35,'An Institute of National Importance Established by the Ministry of HRD, Government of India',0,0);

 $pdf->SetFont('helvetica','',17);
$pdf->SetLeftMargin(80);
$pdf->Ln(25);
$pdf->Cell(0,20,'Hall Permission Form',0,0);

$pdf->Rect(00,56,300,0);

$pdf->SetFont('helvetica','',12);
$pdf->SetLeftMargin(140);
$pdf->Ln(7);
$pdf->Cell(0,30,'Date: '.$currentDate,0,0);
$pdf->SetLeftMargin(30);
$pdf->Ln(4);

$pdf->Cell(0,50,'Name: '.$name,0,0);
 $pdf->Ln(10);
 $pdf->Cell(0,50,'Roll Number: '.$rollno,0,0);
 $pdf->Ln(10);
 $pdf->Cell(0,50,'Email ID : '.$email,0,0);
 $pdf->Ln(10);
 $pdf->Cell(0,50,'Mobile Number: '.$mobile,0,0);
 $pdf->Ln(10);
 $pdf->Cell(0,50,'Hall Number: '.$hallno,0,0);
 $pdf->Ln(10);
 $pdf->Cell(0,50,'Purpose: '.$purpose,0,0);
 $pdf->Ln(10);
 $pdf->Cell(0,50,'Expected Strength: '.$strength,0,0);
 $pdf->Ln(10);
 $pdf->Cell(42,50,'Time: From '.$fromtime,0,0);
 $pdf->Cell(0,50,'to '.$totime,0,0);
 $pdf->Ln(10);
 $pdf->Cell(0,50,'Date: '.$date,0,0);

$pdf->Ln(25);

$pdf->Rect(0,180,400,0);
$pdf->Ln(10);
$pdf->SetLeftMargin(80);
$pdf->Cell(0,10,"(for office use only)",0,0);

$pdf->SetLeftMargin(20);
$pdf->Ln(10);
$pdf->SetFont('Times','i',20);
$pdf->Cell(0,10,"with the above request, the following hall allotment is made ",0,0);
$pdf->SetFont('Times','i',12);
$pdf->Ln(10);

$pdf->Ln(7);
$pdf->SetFont('helvetica','',12);
$pdf->SetLeftMargin(30);
$pdf->Cell(80,5,'Date: '.$date,0,0);
 
$pdf->SetLeftMargin(100);
$pdf->Cell(80,5,'Hall number: '.$hallno,0,0);


$pdf->SetLeftMargin(30);
$pdf->Ln(10);
$pdf->Cell(80,5,'Time: From: '.$fromtime,0,0);
$pdf->SetLeftMargin(100);
$pdf->Cell(80,5,'To: '.$totime,0,0);

$pdf->SetFont('Times','i',15);
$pdf->SetLeftMargin(50);
$pdf->Ln(10);
$pdf->Cell(50,10,'The hall shall be opened as per the details given below : ',0,0);


$pdf->SetFont('helvetica','',12);
$pdf->SetLeftMargin(30);
$pdf->Ln(15);
$pdf->Cell(80,5,'Date: '.$date,0,0);
 
$pdf->SetLeftMargin(100);
$pdf->Cell(80,5,'Hall number: '.$hallno,0,0);


$pdf->SetLeftMargin(30);
$pdf->Ln(10);
$pdf->Cell(80,5,'Time: From: '.$fromtime,0,0);
$pdf->SetLeftMargin(80);
$pdf->Cell(80,5,'To: '.$totime,0,0);


$pdf->SetLeftMargin(140);
$pdf->Ln(16);
$pdf->Cell(10,5,'Controlling officer ',0,0);


$pdf->Output();










 ?>