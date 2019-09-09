<!-- FORM ANGGOTA -->
<?php

if($_GET['modus'] == "input" ){
	echo "Modus input data";
	$niap = "";
	$namaAgen  = "";
	$alamat  = "";
	$penjab  = "";
	$modus = "simpan";
}else{
	require('../kelas/class.db.php');
	$cit = new db();
	$id  = $_GET['id'];
	
	// fungsi tampil($kolom,$tabel,$kondisi,$urut,$baris)
	$data = $cit->tampil("*","tabeldesa","nid = '$id'","desa",0);
	
	//print_r($data);
	// outputnya Array ( [0] => Array ( [nomor] => 1 [nama] => Abdulah Jongos ) )
	
	$nid = $data[0]['nid'];
	$kecamatan  =  $data[0]['kecamatan'];
	$desa  =  $data[0]['desa'];
	$modus = "update";
}

?>

<form action="aksi-desa.php" method="POST">
	<input type="hidden" name="modus" value="<?php echo $modus; ?>" />
	
	<div class="form-group">
		<label>Nomor Induk Desa</label>
		<input type="text" class="form-control" name="nid" 
		value="<?php echo $nid; ?>" />
	</div>
	
	<div class="form-group">
		<label>Nama Kecamatan</label>
		<input type="text" class="form-control" name="kecamatan" 
		value="<?php echo $kecamatan; ?>" />
	</div>
	

	<div class="form-group">
		<label>Nama Desa</label>
		<input type="text" class="form-control" name="desa" 
		value="<?php echo $desa; ?>" />
	</div>

	<div style="text-align:right">
		<input type="submit" value="Simpan" class="btn btn-primary" />
	</div>
</form>
