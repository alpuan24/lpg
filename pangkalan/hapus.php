<?php
require('../kelas/class.db.php');
	$db = new db();
	$tabel = "tabelpangkalan";
	$kondisi = "idPangkalan=".$_GET['id'];
	$db -> hapus($tabel, $kondisi);
?>