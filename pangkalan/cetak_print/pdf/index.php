<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'PEMERINTAH KABUPATEN BANJARNEGARA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR PANGKALAN LPG TABUNG 3 KG',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIP',1,0);
$pdf->Cell(60,6,'NAMA PANGKALAN',1,0);
$pdf->Cell(25,6,'DESA',1,0);
$pdf->Cell(35,6,'KECAMATAN',1,0);
$pdf->Cell(50,6,'AGEN',1,1);
 
$pdf->SetFont('Arial','',10);
 
include 'koneksi.php';
$tabelpangkalan = mysqli_query($connect, "select * from tabelpangkalan");
while ($row = mysqli_fetch_array($tabelpangkalan)){
    $pdf->Cell(20,6,$row['idPangkalan'],1,0);
    $pdf->Cell(60,6,$row['pemilikPangkalan'],1,0);
    $pdf->Cell(25,6,$row['desa'],1,0);
    $pdf->Cell(35,6,$row['kecamatan'],1,0); 
    $pdf->Cell(50,6,$row['niap'],1,1);
}

$pdf->Cell(190,20,'',0,0);
$pdf->Cell(140,6,'',0,0);
$pdf->Cell(50,20,'sing teken',0,0);
$pdf->Cell(190,60,'',0,0);
$pdf->Cell(140,6,'',0,0);
$pdf->Cell(50,20,'jenenge',0,0);
$pdf->Output();
?>