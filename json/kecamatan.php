<?php
	require('../kelas/class.db.php');
	$db = new db();
	$kec=$db->tampil("kecamatan","tabeldesa","nid='".$_GET['kode']."'","kecamatan",0);
	echo json_encode($kec);
?>