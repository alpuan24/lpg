<!-- FORM ANGGOTA -->
<?php

if($_GET['modus'] == "input" ){
	echo "Modus input data";
	$id = "";
	$nama  = "";
	$email  = "";
	$user  = "";
	$password  = "";
	$no_hp  = "";
	$kelas  = "";
	$niap  = "";
	$modus = "simpan";
}else{
	//require('./kelas/class.db.php');
	//$cit = new db();
	$id  = $_GET['id'];
	
	// fungsi tampil($kolom,$tabel,$kondisi,$urut,$baris)
	$data = $cit->tampil("*","tabeluser","id = '$id'","nama",0);
	
	//print_r($data);
	// outputnya Array ( [0] => Array ( [nomor] => 1 [nama] => Abdulah Jongos ) )
	
	$id = $data[0]['id'];
	$nama  =  $data[0]['nama'];
	$email  =  $data[0]['email'];
	$user  =  $data[0]['user'];
	$password  =  $data[0]['password'];
	$no_hp  =  $data[0]['no_hp'];
	$kelas  =  $data[0]['kelas'];
	$niap  =  $data[0]['niap'];
	$modus = "update";
}

?>

<form action="user/aksi-user.php" method="POST">
	<input type="hidden" name="modus" value="<?php echo $modus; ?>" />
	
	<div class="form-group">
		<label>ID</label>
		<input type="text" class="form-control" name="id" 
		value="<?php echo $id; ?>" />
	</div>
	
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama" 
		value="<?php echo $nama; ?>" />
	</div>
	

	<div class="form-group">
		<label>E-mail</label>
		<input type="email" class="form-control" name="email" 
		value="<?php echo $mail; ?>" />
	</div>
	
	<div class="form-group">
		<label>User</label>
		<input type="text" class="form-control" name="user" 
		value="<?php echo $user; ?>" />
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" class="form-control" name="password" 
		value="<?php echo $password; ?>" />
	</div>

	<div class="form-group">
		<label>Nomor HP</label>
		<input type="text" class="form-control" name="no_hp" 
		value="<?php echo $no_hp; ?>" />
	</div>

	<div class="form-group">
		<label>Kelas</label>
		<input type="text" class="form-control" name="kelas" 
		value="<?php echo $kelas; ?>" />
	</div>

	<div class="form-group">
		<label>NIAP</label>
		<input type="text" class="form-control" name="niap" 
		value="<?php echo $niap; ?>" />
	</div>

	<div style="text-align:right">
		<input type="submit" value="Simpan" class="btn btn-primary" />
	</div>
</form>
