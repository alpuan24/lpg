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
	//require('./kelas/class.db.php');
	//$cit = new db();
	$id  = $_GET['id'];
	
	// fungsi tampil($kolom,$tabel,$kondisi,$urut,$baris)
	$data = $cit->tampil("*","tabelagen","niap = '$id'","namaAgen",0);
	
	//print_r($data);
	// outputnya Array ( [0] => Array ( [nomor] => 1 [nama] => Abdulah Jongos ) )
	
	$niap = $data[0]['niap'];
	$namaAgen  =  $data[0]['namaAgen'];
	$alamat  =  $data[0]['alamat'];
	$penjab  =  $data[0]['penjab'];
	$modus = "update";
}

?>

<form action="agen/aksi-agen.php" method="POST">
	<input type="hidden" name="modus" value="<?php echo $modus; ?>" />
	
	<div class="form-group">
		<label>NIAP</label>
		<input type="text" class="form-control" name="niap" 
		value="<?php echo $niap; ?>" />
	</div>
	
	<div class="form-group">
		<label>Nama Agen</label>
		<input type="text" class="form-control" name="namaAgen" 
		value="<?php echo $namaAgen; ?>" />
	</div>
	

	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat" 
		value="<?php echo $alamat; ?>" />
	</div>
	
	<div class="form-group">
		<label>Pimpinan</label>
		<input type="text" class="form-control" name="penjab" 
		value="<?php echo $penjab; ?>" />
	</div>

	<div style="text-align:right">
		<input type="submit" value="Simpan" class="btn btn-primary" />
	</div>
</form>
