<center><h3>DATA PANGKALAN LPG TABUNG 3 KG KABUPATEN BANJARNEGARA</h3></center><hr>
<table class="table table-striped">
		<thead>
			<tr>
				<th>NIP</th>
				<th>Nama Pangkalan</th>
				<th>Desa</th>
				<th>Kecamatan</th>
				<th>NIAP</th>
				<th>Kontrol Data</th>
			</tr>
		</thead>
		<tbody id="filterdesa">
	<?php
		$baris=($_GET['p']-1) *40; /* untuk menetukan tampulan pada halaman selanjutnya*/
		$anggota = $cit->tampil("*","tabelpangkalan",1,'pemilikPangkalan',$baris); /*baris hanya sebuah variabel untuk memberikan nama*/
		for($i = 0 ; $i < COUNT($anggota) ; $i++ ){
			echo
			"
			<tr>
				<td>".$anggota[$i]['idPangkalan']."</td>
				<td>".$anggota[$i]['pemilikPangkalan']."</td>
				<td>".$anggota[$i]['desa']."</td>
				<td>".$anggota[$i]['kecamatan']."</td>
				<td>".$anggota[$i]['niap']."</td>
				<td>
					<a class='btn btn-success' href='./?menu=formulirPangkalan&modus=update&id=".$anggota[$i]['idPangkalan']."'>
					 <span class='glyphicon glyphicon-pencil'></span> Edit </a>

					<a class='btn btn-danger' href='pangkalan/hapus.php?id=".$anggota[$i]['idPangkalan']."'>
					<span class='glyphicon glyphicon-remove'></span> Hapus </a>

				</td>
			</tr>
			";
		}
	?>
	</tbody>
</table>