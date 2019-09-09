<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<?php 	
		require('../kelas/class.db.php');
		$cit = new db();
	?>
	<h1>DAFTAR DESA SE-KABUPATEN BANJARNEGARA</h1>
	<a class="btn btn-primary" href="formulirAgen.php?modus=input">Tambah Desa</a>
	<table class="table">
		<thead>
			<tr>
				<th>Nomor Induk Desa</th>
				<th>Kecamatan</th>
				<th>Desa</th>
				<th>kontrol</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$anggota = $cit->tampil("*","tabeldesa",1,'desa',0);
		for($i = 0 ; $i < COUNT($anggota) ; $i++ ){
			echo
			"
			<tr>
				<td>".$anggota[$i]['nid']."</td>
				<td>".$anggota[$i]['kecamatan']."</td>
				<td>".$anggota[$i]['desa']."</td>
				<td>
					<a href='formulirDesa.php?modus=update&id=".$anggota[$i]['nid']."'>Edit</a>
					Hapus</td>
			</tr>
			";
		}
		?>
		</tbody>
	</table>
</div>

</body>
</html>
