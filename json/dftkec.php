<?php 	
	require('../kelas/class.db.php');
	$cit = new db();
	$data=$cit->tampil("*","tabeldesa","kecamatan like '%".$_GET['nmkec']."%'",'kecamatan',0);
	echo json_encode($data);
?>