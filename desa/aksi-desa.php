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
	$tabel = "tabeldesa"; $kolom = "nid,kecamatan,desa";
	
	// sesuaikan format data
	$nid = $_POST['nid'];
	$kecamatan  = $_POST['kecamatan'];
	$desa  = $_POST['desa'];
	
	$data ="'$nid','$kecamatan','$desa'";
	
	$ci->simpan($tabel,$kolom,$data);
	
	
}elseif($_POST['modus'] == 'update' ){
	
	// sesuaikan format data
	$nid = $_POST['nid'];
	$kecamatan  = $_POST['kecamatan'];
	$desa  = $_POST['desa'];
	
	$dataset = "kecamatan = '$kecamatan', desa='$desa'";
	$kondisi = "nid= '$nid'";
	
	//update data anggota
	// $ci->update($tabel,$dataset,$kondisi);
	
	$ci->update('tabeldesa',$dataset,$kondisi);
	
	
}
// arahkan kembali ke file formulirAnggota

echo "<hr/><a href='./desa.php'>Kembali ..</a>";
?>
 
