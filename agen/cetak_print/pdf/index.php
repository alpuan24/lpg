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
$pdf->Cell(190,7,'DAFTAR AGEN LPG TABUNG 3 KG',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIAP',1,0);
$pdf->Cell(50,6,'NAMA PANGKALAN',1,0);
$pdf->Cell(57,6,'ALAMAT',1,0);
$pdf->Cell(50,6,'PEMIMPIN',1,1);
 
$pdf->SetFont('Arial','',10);
 
include 'koneksi.php';
$tabelagen = mysqli_query($connect, "select * from tabelagen");
while ($row = mysqli_fetch_array($tabelagen)){
    $pdf->Cell(20,6,$row['niap'],1,0);
    $pdf->Cell(50,6,$row['namaAgen'],1,0);
    $pdf->Cell(57,6,$row['alamat'],1,0);
    $pdf->Cell(50,6,$row['penjab'],1,1); 
}
 
$pdf->Output();
?>