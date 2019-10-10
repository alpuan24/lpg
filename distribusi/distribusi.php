<div class="container-fluid" style="min-height:500px;">
	<div class="row">
		<div class="col-lg-12">
		<center><h3>Tabel Laporan Distribusi LPG Tabung 3 Kg</h3></center>		
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			Silahkan Pilih Agen :
			<div class="form-group">
				<select id="agen" class="form-control">
					<option>Pilih Agen</option>
					<?php
						// tampil($kolom,$tabel,$kondisi,$urut,$baris)
						$agen = $cit->tampil("niap , namaAgen " , "tabelagen" , "1" , "namaAgen" , 0);
						foreach($agen as $agn){
							echo "<option value='{$agn['niap']}'>{$agn['namaAgen']}</option>";
						}
					?>
				</select>	
			</div>		
		</div>
		<div class="col-md-6">
			Laporan Bulan :
			<div class="form-group">
				<select id="bulan" class="form-control">
					<option>Pilih Bulan</option>
					<option value="<?=date('Y');?>-01">Januari</option>
					<option value="<?=date('Y');?>-02">Februari</option>
					<option value="<?=date('Y');?>-03">Maret</option>
					<option value="<?=date('Y');?>-04">April</option>
					<option value="<?=date('Y');?>-05">Mei</option>
					<option value="<?=date('Y');?>-06">Juni</option>
					<option value="<?=date('Y');?>-07">Juli</option>
					<option value="<?=date('Y');?>-08">Agustus</option>
					<option value="<?=date('Y');?>-09">September</option>
					<option value="<?=date('Y');?>-10">Oktober</option>
					<option value="<?=date('Y');?>-11">November</option>
					<option value="<?=date('Y');?>-12">Desember</option>
				</select>	
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
		Silahkan Pilih Kecamatan :
		<div class="form-group">
			<select id="kecamatan" class="form-control">
				<option>Pilih Kecamatan</option>
				<option>Banjarmangu</option>
				<option>Banjarnegara</option>
				<option>Batur</option>
				<option>Bawang</option>
				<option>Kalibening</option>
				<option>Karangkobar</option>
				<option>Madukara</option>
				<option>Mandiraja</option>
				<option>Pagedongan</option>
				<option>Pagentan</option>
				<option>Pandanarum</option>
				<option>Pejawaran</option>
				<option>Punggelan</option>
				<option>Purwareja Klampok</option>
				<option>Purwonegoro</option>
				<option>Rakit</option>
				<option>Sigaluh</option>
				<option>Susukan</option>
				<option>Wanadadi</option>
				<option>Wanayasa</option>
			</select>
		</div>
		</div>
		<div class="col-md-6">
			Silahkan Pilih Desa :
			<div class="form-group">
				<select id="desa" class="form-control">
				</select>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>NIP</th>
						<th>Pangkalan</th>
						<th>Agen</th>
						<th>Desa</th>
						<th>Kecamatan</th>
						<th>Realisasi</th>
					</tr>
				</thead>
				<tbody id="distAgen"></tbody>
			</table>		
		</div>
	</div>
</div>


<script>
	$(document).ready(function(){
		$("#desa").change( function(){
			let nia = $("#agen").val();
			let bl = $("#bulan").val();
			let ds = $("#desa").val();
			let agn = $("#agen option:selected").text();
			$("#distAgen tr").remove();
			$.getJSON(`distribusi/qDistAgen.php?nia=${nia}&bl=${bl}&ds=${ds}` , function(dadis){
				$.each(dadis , function(i,data){
					$("#distAgen").append(`
					<tr>
					<td>${nia}</td>
					<td>${data.pkl}</td>
					<td>${data.agn}</td>
					<td>${data.dsa}</td>
					<td>${data.kec}</td>
					<td align='right'>${data.jml}</td>
					</tr>
					`);
				})
			})
		})
	});
</script>