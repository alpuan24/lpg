<?php
require('../kelas/class.db.php');
	$db = new db();
	$tabel = "tabelagen";
	$kondisi = "niap=".$_GET['id'];
	$db -> hapus($tabel, $kondisi);
?>