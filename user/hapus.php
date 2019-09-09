<?php
require('../kelas/class.db.php');
	$db = new db();
	$tabel = "tabeluser";
	$kondisi = "id=".$_GET['id'];
	$db -> hapus($tabel, $kondisi);
?>