<?php
	require('../kelas/class.db.php');
	$db = new db();
	$kec=$db->tampil("niap,namaAgen","tabelagen","namaAgen LIKE '%".$_GET['nmagen']."%'","namaAgen",0);
	echo json_encode($kec);
?>