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
	$tabel = "tabeluser"; $kolom = "id,nama,email,user,password,no_hp,kelas,niap";
	$newPassword = md5($_POST['user'].'***'.$_POST['password']);
	// sesuaikan format data
	$id = $_POST['id'];
	$nama  = $_POST['nama'];
	$email  = $_POST['email'];
	$user  = $_POST['user'];
	$password  = $newPassword;
	$no_hp  = $_POST['no_hp'];
	$kelas  = $_POST['kelas'];
	$niap  = $_POST['niap'];
	
	$data ="'$id','$nama','$email','$user','$password','$no_hp','$kelas','$niap'";
	
	$ci->simpan($tabel,$kolom,$data);
	
	
}elseif($_POST['modus'] == 'update' ){
	
	// sesuaikan format data
	$id = $_POST['id'];
	$nama  = $_POST['nama'];
	$email  = $_POST['email'];
	$user  = $_POST['user'];
	$no_hp  = $_POST['no_hp'];
	$kelas  = $_POST['kelas'];
	$niap  = $_POST['niap'];
	$newPassword = md5($_POST['user'].'***'.$_POST['password']);
	$dataset = "nama = '$nama', email='$email', user='$user',  no_hp='$no_hp', kelas='$kelas', niap='$niap'";
	$kondisi = "id= '$id'";
	
	//update data anggota
	// $ci->update($tabel,$dataset,$kondisi);
	
	$ci->update('tabeluser',$dataset,$kondisi);

}
// arahkan kembali ke file formulirAnggota

echo "<hr/><a href='../?menu=user&p=1'>Kembali ..</a>";
?>
 
