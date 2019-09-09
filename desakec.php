<?php
	require('./kelas/class.db.php');
	$cit = new db();

	$kecamatan = $_GET['kec'];
	$desa = $cit->tampil("nid,desa", "tabeldesa","kecamatan='$kecamatan'",'desa',0);
	echo json_encode($desa);

?>