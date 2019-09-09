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
<div class="noprint">
	<?php 	
	//	require('./kelas/class.db.php');
	//	$cit = new db();
	?>
	<center><h3></h3></center><hr>

	<a class="btn btn-primary" style="background-color:#228B22" href="./?menu=tbuser&modus=input" >Tambah User</a><hr>
</div>
	<center><h3>Daftar User / Pengguna</h3></center><hr>
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Email</th>
				<th>User</th>
				<th>Password</th>
				<th>Nomor HP</th>
				<th>Kelas</th>
				<th>NIAP</th>
				<th>Kontrol</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$anggota = $cit->tampil("*","tabeluser",1,'nama',0);
		for($i = 0 ; $i < COUNT($anggota) ; $i++ ){
			echo
			"
			<tr>
				<td>".$anggota[$i]['id']."</td>
				<td>".$anggota[$i]['nama']."</td>
				<td>".$anggota[$i]['email']."</td>
				<td>".$anggota[$i]['user']."</td>
				<td>".$anggota[$i]['password']."</td>
				<td>".$anggota[$i]['no_hp']."</td>
				<td>".$anggota[$i]['kelas']."</td>
				<td>".$anggota[$i]['niap']."</td>
				<td>
					<a class='btn btn-success' href='./?menu=formulirUser&modus=update&id=".$anggota[$i]['id']."'>
					<span class='glyphicon glyphicon-pencil'></span>Edit</a>

					<a class='btn btn-danger' href='user/hapus.php?id=".$anggota[$i]['id']."'>
					<span class='glyphicon glyphicon-remove'></span>Hapus </a>
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
