<!-- FORM ANGGOTA -->
<?php

if($_GET['modus'] == "input" ){
	echo "";
	$idPangkalan = "";
	$pemilikPangkalan  = "";
	$desa  = "";
	$kecamatan  = "";
	$niap  = "";
	$modus = "simpan";
}else{
	//require('./kelas/class.db.php');
	//$cit = new db();
	$id  = $_GET['id'];
	
	// fungsi tampil($kolom,$tabel,$kondisi,$urut,$baris)
	$data = $cit->tampil("*","tabelpangkalan","idPangkalan = '$id'","pemilikPangkalan",0);
	
	//print_r($data);
	// outputnya Array ( [0] => Array ( [nomor] => 1 [nama] => Abdulah Jongos ) )
	
	$idPangkalan = $data[0]['idPangkalan'];
	$pemilikPangkalan  =  $data[0]['pemilikPangkalan'];
	$desa  =  $data[0]['desa'];
	$kecamatan  =  $data[0]['kecamatan'];
	$niap  =  $data[0]['niap'];
	$modus = "update";
}

?><hr>
<center><h3>FORMULIR TAMBAH DATA PANGKALAN</h3>
<p>Pangkalan LPG Tabung 3 Kg Kabupaten Banjarnegara</p></center><hr>

<form action="pangkalan/aksi-pangkalan.php" method="POST">
	<input type="hidden" name="modus" value="<?php echo $modus; ?>" />
	
	<div class="form-group">
		<label>Nomor Induk Pangkalan</label>
		<input type="text" class="form-control" name="idPangkalan" 
		value="<?php echo $idPangkalan; ?>" />
	</div>
	
	<div class="form-group">
		<label>Nama Pangkalan</label>
		<input type="text" class="form-control" name="pemilikPangkalan" 
		value="<?php echo $pemilikPangkalan; ?>" />
	</div>
	

	<div class="form-group">
		<label>Desa</label>
		<input type="text" class="form-control" name="desa"  list="dftdesa"
		value="<?php echo $desa; ?>" id='pkldesa'/>
		<datalist id="dftdesa"></datalist>
	</div>
	
	<div class="form-group">
		<label>Kecamatan</label>
		<input type="text" class="form-control" name="kecamatan" id="pklKecamatan"
		value="<?php echo $kecamatan; ?>" />
	</div>

	<div class="form-group">
		<label>NIAP</label>
		<input type="text" class="form-control" name="niap"  id="pklniap" list="dftagen"
		value="<?php echo $niap; ?>" />
		<datalist id="dftagen"></datalist>
	</div>

	<div style="text-align:left">
		<input type="submit" value="Simpan" class="btn btn-primary" /><br>
	</div><hr>
</form>
