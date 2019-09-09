<!-- FORM INPUT -->

<?php

	if($_GET['modus']=="input"){
		echo "Modus input data";
		$nomor = "";
		$nama = "";
		$modus = "simpan";
		}

		else{
			echo "Modus edit data";
		}
?>

<form action="./basisdata/aksi-anggota.php" method="POST"> <!--sesuaikan alamatnya-->
	<input type="hidden" name="modus" value="<?php echo $modus; ?>" />
	<!--sesuaikan dengan tabel di database yang akan di gunakan untuk menyimpan data formulir-->
		<div class="form-group">
			<label>Nomor Anggota</label>
			<input type="text" class="form-control" name="nomor"
			value="<?php $nomor; ?>" />
		</div>

		<div class="form-group">
			<label>Nama Anggota</label>
			<input type="text" class="form-control" name="nama"
			value="<?php $nama; ?>" />
		</div>

		<div style="text-align:right">
			<input type="submit" value="Simpan" class="btn btn-primary" />
		</div>

</form>