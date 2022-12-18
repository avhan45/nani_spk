<?php
// Import Librari FPDF dan bentuk Objek
include_once('core/config.php');
require('fpdf/fpdf.php');
$pdf = new FPDF('p', 'mm', 'A4');
$pdf->AddPage();

// Tampilkan Judul Laporan
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'Data Rangking SPK SAW',0,1,'C');

// Buat Header Tabel
$pdf->SetFont('Arial','B','12');
$pdf->Cell(8,6,'No',1,0,'C');
$pdf->Cell(70,6,'Nama Guru',1,0,'C');
$pdf->Cell(40,6,'Nilai',1,0,'C');
$pdf->Cell(30,6,'Rangking',1,0,'C');

$pdf->SetFont('Arial','B',10);
$pdf->cell(8,6,'1',1,0,'C',);
    $no=1;
    $query3 = "SELECT * FROM rangking INNER JOIN guru WHERE rangking.id_guru=guru.id_guru ORDER BY nilai_rangking DESC";
    $r = mysqli_query($con, $query3);
    while ( $hasil = mysqli_fetch_array($r)){
        $pdf->Cell(8,6,$no++,1,0,'C');
    }
    //     foreach($r as $rw){
    //         $pdf->Cell(8,6,$no++,1,0,'C');

    //     };



$pdf->Output();
?>