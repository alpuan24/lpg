<?php
//print_r($_POST);
//Array ( [modus] => simpan [nomor] => [nama] => )

// panggil file class.db.php
require("../kelas/class.db.php");

// buat objek dari class.db
$ci = new db();

	// sesuaikan format data
	$id = $_POST['id'];
	$nama  = $_POST['nama'];
	$newPassword = md5($_POST['user'].'***'.$_POST['password']);
	$dataset = "password = '{$newPassword}'";
	$kondisi = "id= '$id'";
	
	//update data anggota
	// $ci->update($tabel,$dataset,$kondisi);
	
	$ci->update('tabeluser',$dataset,$kondisi);

// arahkan kembali ke file formulirAnggota

echo "<hr/><a href='../?menu=user&p=1'>Kembali ..</a>";
?>
 
