<?php
	require('./kelas/class.db.php');
	$cit = new db();

	$nid=$_GET['nid'];
	$p=($_GET['p']-1)*40;
	$pangdes = $cit->tampil("tabelpangkalan.*, tabeldesa.desa namadesa","tabelpangkalan,tabeldesa",
		"tabeldesa.nid=tabelpangkalan.desa && tabelpangkalan.kecamatan='$nid'","tabeldesa.desa",$p);

	echo json_encode($pangdes);
?>