<?php 	
	require('../kelas/class.db.php');
	$cit = new db();
	$data=$cit->tampil("*","tabeldesa","desa like '%".$_GET['nmdesa']."%'",'desa',0);
	echo json_encode($data);
?>