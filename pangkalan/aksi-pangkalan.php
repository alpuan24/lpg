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
	$tabel = "tabelpangkalan"; $kolom = "idPangkalan,pemilikPangkalan,desa,kecamatan,niap";
	
	// sesuaikan format data
	$idPangkalan = $_POST['idPangkalan'];
	$pemilikPangkalan  = $_POST['pemilikPangkalan'];
	$desa  = $_POST['desa'];
	$kecamatan  = $_POST['kecamatan'];
	$niap  = $_POST['niap'];
	
	$data ="'$idPangkalan','$pemilikPangkalan','$desa','$kecamatan','$niap'";
	
	$ci->simpan($tabel,$kolom,$data);
	
	
}elseif($_POST['modus'] == 'update' ){
	
	// sesuaikan format data
	$idPangkalan = $_POST['idPangkalan'];
	$pemilikPangkalan  = $_POST['pemilikPangkalan'];
	$desa  = $_POST['desa'];
	$kecamatan  = $_POST['kecamatan'];
	$niap  = $_POST['niap'];
	
	$dataset = "pemilikPangkalan = '$pemilikPangkalan', desa='$desa', kecamatan='$kecamatan', niap='$niap'";
	$kondisi = "idPangkalan= '$idPangkalan'";
	
	//update data anggota
	// $ci->update($tabel,$dataset,$kondisi);
	
	$ci->update('tabelpangkalan',$dataset,$kondisi);
	
	
}
// arahkan kembali ke file formulirAnggota

echo "<hr/><a href='../?menu=pangkalan&p=1'>Kembali ..</a>";
?>
 
