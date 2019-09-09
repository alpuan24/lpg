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
	<?php 	
	//	require('./kelas/class.db.php');
	//	$cit = new db();
	?>
	<h3 class="noprint"><center></center></h3><hr>
	
	<a class="btn btn-primary" style="background-color:#228B22"  class="noprint"
		href="./?menu=tbpangkalan&modus=input">Tambah Pangkalan
	</a>
	<!-- fungsi untuk mencetak -->
	<a href="datapangkalan.php"  class="noprint"> 
    	<button class="btn btn-primary" style="background-color:#228B22" 
    			onClick="window.print();">
    			<i style="font-size:16px" class="fa">&#xf02f;</i> Cetak
    	</button> 
    </a>
    
	<!--batas script untuk cetak word dan print preview -->
	<!--batas script untuk cetak word dan print preview -->
	<hr>

	<!--batas filter data -->
		<h4  class="noprint">PENCARIAN</h4>
		<p  class="noprint">Silahkan Pilih Kecamatan :</p>
		<div class="form-group"  class="noprint">
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
		<div class="form-group"  class="noprint">
			<select id="desa" class="form-control">
			</select>
		</div>
	<!--batas filter data -->
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