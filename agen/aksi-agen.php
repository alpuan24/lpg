<?php
//print_r($_POST);
//Array ( [modus] => simpan [nomor] => [nama] => )

// panggil file class.db.php
require("../kelas/class.db.php");

// buat objek dari class.db
$ci = new db();

if($_POST['modus'] == 'simpan'){
	// simpan data anggota
	// $ci->simpan($tabel,$kolom,$data)
	$tabel = "tabelagen"; $kolom = "niap,namaAgen,alamat,penjab";
	
	// sesuaikan format data
	$niap = $_POST['niap'];
	$namaAgen  = $_POST['namaAgen'];
	$alamat  = $_POST['alamat'];
	$penjab  = $_POST['penjab'];
	
	$data ="'$niap','$namaAgen','$alamat','$penjab'";
	
	$ci->simpan($tabel,$kolom,$data);
	
	
}elseif($_POST['modus'] == 'update' ){
	
	// sesuaikan format data
	$niap = $_POST['niap'];
	$namaAgen  = $_POST['namaAgen'];
	$alamat  = $_POST['alamat'];
	$penjab  = $_POST['penjab'];
	
	$dataset = "namaAgen = '$namaAgen', alamat='$alamat', penjab='$penjab'";
	$kondisi = "niap= '$niap'";
	
	//update data anggota
	// $ci->update($tabel,$dataset,$kondisi);
	
	$ci->update('tabelagen',$dataset,$kondisi);
	
	
}
// arahkan kembali ke file formulirAnggota

echo "<hr/><a href='../?menu=agen&p=1'>Kembali ..</a>";
?>
 
