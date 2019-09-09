<!--<!DOCTYPE html>
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
-->
<div  class="noprint">
	<?php 	
	//	require('./kelas/class.db.php');
	//	$cit = new db();
	?>
	<center><h3></h3></center><hr> <!--sebagai batas jarak saja biar sedikit keliatan rapih-->
	<a class="btn btn-primary" style="background-color:#228B22" href="./?menu=tbagen&modus=input" >Tambah Agen</a><hr>
</div>

	<center><h3>Daftar Agen LPG Tabung 3 Kg Kabupaten Banjarnegara</h3></center><hr>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>Nomor</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Pimpinan</th>
				<th>Kontrol</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$anggota = $cit->tampil("*","tabelagen",1,'namaAgen',0);
		for($i = 0 ; $i < COUNT($anggota) ; $i++ ){
			echo
			"
			<tr>
				<td>".$anggota[$i]['niap']."</td>
				<td>".$anggota[$i]['namaAgen']."</td>
				<td>".$anggota[$i]['alamat']."</td>
				<td>".$anggota[$i]['penjab']."</td>
				<td>
					<a class='btn btn-success' href='./?menu=formulirAgen&modus=update&id=".$anggota[$i]['niap']."'>
					<span class='glyphicon glyphicon-pencil'></span>Edit</a>

					<a class='btn btn-danger' href='agen/hapus.php?id=".$anggota[$i]['niap']."'>
					<span class='glyphicon glyphicon-remove'></span> Hapus </a>
					</td>
			</tr>
			";
		}
		?>
		</tbody>
	</table>
</div>

</body>
</html>
