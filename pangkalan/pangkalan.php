<!--
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
-->
<div  class="noprint">
	<!--batas filter data -->
		<h4  class="noprint">PENCARIAN</h4>
		<p  class="noprint">Silahkan Pilih Kecamatan :</p>
		<div class="form-group"  class="noprint">
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

		Silahkan Pilih Desa :
		<div class="form-group"  class="noprint">
			<select id="desa" class="form-control">
			</select>
		</div>
	<!--batas filter data -->
	<a class="btn btn-primary" style="background-color:#228B22"  class="noprint"
		href="./?menu=tbpangkalan&modus=input">Tambah Pangkalan
	</a>
	<!-- fungsi untuk mencetak -->
	<button id="export" class="btn btn-primary" style="background-color:#228B22" >
			<i style="font-size:16px" class="fa">&#xf02f;</i> Export
	</button> 
	<!--batas script untuk cetak word dan print preview -->
	<script>
	$(document).ready( function(){
		$("#export").click( function(){
			let kec = $("#kecamatan").val();
			window.location.href='./export/pangkalan.php?kec='+kec;
		})
	})
	</script>
	<!--batas script untuk cetak word dan print preview -->
	<hr>
</div>
<div>
	<?php include("datapangkalan.php");?> <!-- perintah disamping untuk memanggil data dari datapangkalan.php bro -->
	<!--yang di bawah ini juga sama bro, salah satu fungsi -->
	<?php nomorHalaman(); ?>
</div>

</body>
</html>

<div  class="noprint">
<?php
//untuk membuat fungsi tampul pada halaman berikutnya maupun sebelumnya
function nomorHalaman()
	{
		$halSekarang = $_GET['p'];
		$halSebelum = $halSekarang-1;
		$halBerikut = $halSekarang+1;
		if ($halSekarang == 1) /*== untuk membandingkan, biar bisa membaca perintah kita*/
			{
				$halSebelum = 1;
			}

		echo '<a href="./?menu=pangkalan&p='.$halSebelum.'">
				<button type="button" class="btn btn-default btn-sm">
          			<span class="far fa-caret-square-left"></span> Sebelumnya
          		</button></a>'; 

		echo '<a href="./?menu=pangkalan&p='.$halBerikut.'">
				<button type="button" class="btn btn-default btn-sm">
         		 	<span class="far fa-caret-square-right"></span> Berikutnya
        		</button></a>';
	}

?>
</div>

<br>