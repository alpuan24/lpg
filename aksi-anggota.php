<?php
//print_r($_POST);
//Array ([modus] => simpan [nomor] => [nama] => )

//panggil file class.db.php
require("../kelas/class.db.php");

//buat objek dari class.db
$ci = new db();

if($_POST['modus'] == 'simpan'){
	//simpan data anggota
	//$ci->simpan ($tabel,$kolom,$data)
	$tabel = "anggota"; $kolom = "nomor, nama";

	//sesuaikan format data
	$nomor = $_POST['nomor'];
	$nama = $_POST['nama'];

	$data = "'$nomor','$nama'";

	$ci->simpan($tabel,$kolom,$data);
}elseif($_POST['modus'] == 'update'){
	echo "Update Data Anggota";
}

//arahkan kembali ke file rformulir
echo "<a href='../formulir/formulirAnggota.php?modus='".$_POST['modus']."'>
<hr/>Kembali...</a>";

?>