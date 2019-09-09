<?php
	require('./kelas/class.db.php');
	$cit = new db();

	$nid=$_GET['nid'];
	$pangdes = $cit->tampil("tabelpangkalan.*, tabeldesa.desa namadesa","tabelpangkalan,tabeldesa",
		"tabeldesa.nid=tabelpangkalan.desa && tabelpangkalan.desa = '$nid'","tabeldesa.desa",0);

	echo json_encode($pangdes);
?>