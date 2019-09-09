<hr><center><h3>Tabel Laporan Distribusi LPG Tabung 3 Kg</h3></center><hr>


Silahkan Pilih Agen :
		<div class="form-group">
			<select id="agen" class="form-control">
				<option>Pilih Agen</option>
				<option>PT Serayu Mitra Selaras</option>
				<option>PT Mudah Hasil</option>
				<option>PT Viroma Guyub Abadi</option>
				<option>PT Budi Seger Jaya</option>
				<option>PT Satria Gas Abadi</option>
				<option>PT Ranasa Abadi Makmur</option>
			</select>	
		</div>

Silahkan Pilih Kecamatan :
		<div class="form-group">
			<select id="kecamatan" class="form-control">
				<option>Pilih Kecamatan</option>
				<option>Susukan</option>
				<option>Purwareja Klampok</option>
				<option>Mandiraja</option>
				<option>Purwonegoro</option>
				<option>Bawang</option>
				<option>Banjarnegara</option>
				<option>Sigaluh</option>
				<option>Madukara</option>
				<option>Banjarmangu</option>
				<option>Wanadadi</option>
				<option>Rakit</option>
				<option>Punggelan</option>
				<option>Karangkobar</option>
				<option>Pagentan</option>
				<option>Pejawaran</option>
				<option>Batur</option>
				<option>Wanayasa</option>
				<option>Kalibening</option>
				<option>Pandanarum</option>
				<option>Pagedongan</option>
			</select>
		</div>

		Silahkan Pilih Desa :
		<div class="form-group">
			<select id="desa" class="form-control">
			</select>
		</div>

	Laporan Bulan :
		<div class="form-group">
			<select id="bulan" class="form-control">
				<option>Pilih Bulan</option>
				<option>Januari</option>
				<option>Februari</option>
				<option>Maret</option>
				<option>April</option>
				<option>Mei</option>
				<option>Juni</option>
				<option>Juli</option>
				<option>Agustus</option>
				<option>September</option>
				<option>Oktober</option>
				<option>November</option>
				<option>Desember</option>
			</select>	
		</div>

<table class="table table-striped">
		<thead>
			<tr>
				<th>NIP</th>
				<th>Pangkalan</th>
				<th>Agen</th>
				<th>Desa</th>
				<th>Kecamatan</th>
				<th>Realisasi</th>
				<th>Kontrol</th>
			</tr>
		</thead>
<!--
<div>
	<?php include("./pangkalan/datapangkalan.php");?> <!-- perintah disamping untuk memanggil data dari datapangkalan.php bro -->
<!--	<?php nomorHalaman(); ?>
</div>

<!--

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
							<a href='./?menu=formulirPangkalan&modus=update&id=".$anggota[$i]['idPangkalan']."'>Edit</a>
							 Hapus
						</td>
					</tr>
					";
				}
			?>
		</tbody>
-->
</table>