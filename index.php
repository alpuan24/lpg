<?php 	
	require('./kelas/class.db.php');
	$cit = new db();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Informasi Pelaporan LPG Bersubsidi Tabung 3Kg (SIMPEL)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script>
		$(document).ready( function(){
			/*desa per kecamatan*/
			$("#kecamatan").on('change',function(){
				// desa per cam
				let kec = $(this).val();
				$.getJSON("desakec.php?kec="+kec, function(desa){
					$("#desa option").remove();
					$("#desa").append("<option>Pilih Desa</option>");
					$.each(desa, function(i,data){
						$("#desa").append(
						"<option value="+data.nid+">"+data.desa+"</option>"
						);
					});
				});

				// pang per cam
				
			});

			/**pangkalan per desa*/
			$("#desa").on('change',function(){
				let nid = $(this).val();
				$.getJSON("pangdes.php?nid="+nid, function(pkl){
					$("#filterdesa tr").remove();
					$.each(pkl, function(i,data){
						$("#filterdesa").append(
							"<tr>"+
							"	<td>"+data.idPangkalan+"</td>"+
							"	<td>"+data.pemilikPangkalan+"</td>"+
							"	<td>"+data.namadesa+"</td>"+
							"	<td>"+data.kecamatan+"</td>"+
							"	<td>"+data.niap+"</td>"+
							"	<td>"+
							"		<a class='btn btn-success' href='./?menu=formulirPangkalan&modus=update&id="+data.idPangkalan+"'><span class='glyphicon glyphicon-pencil'></span> Edit</a>"+
							"		<a class='btn btn-danger' href='./pangkalan/hapus.php?id="+data.idPangkalan+"'><span class='glyphicon glyphicon-remove'></span> Hapus </a></td>"+
							"</tr>"
						);
					});
				});
			});

			//daftar desa
			$("#pkldesa").keyup(function(){

				$.getJSON("json/dftdesa.php?nmdesa="+$(this).val(),
					function(desa){
						$("#dftdesa option").remove();
						$.each(desa, function(i,data){
							$("#dftdesa").append(
								"<option value="+data.nid+">"+data.desa+", "+data.kecamatan+"</option>"
							);
						})
					});
			});

			// nama kecamatan
			$("#pkldesa").blur(function(){

				$.getJSON("json/kecamatan.php?kode="+$("#pkldesa").val(),
					function(kec){
						$("#pklKecamatan").val(kec[0].kecamatan);
					})
			});

			// daftar agen
			$("#pklniap").keyup(function(){

				$.getJSON("json/dftAgen.php?nmagen="+$(this).val(),
					function(agen){
						$("#dftagen option").remove();
						$.each(agen, function(i,data){
							$("#dftagen").append(
								"<option value="+data.niap+">"+data.namaAgen+"</option>"
							);
						})
					});
			});
		})
	</script>
	<style>

	html,body
		{
		background-color:#DCDCDC;
		}

	.container
		{
		background-color:#fff;
		}

	.jumbotron
		{
		background-color:#228B22;
		}

	.header{background:#228B22; padding:20px;}
    .header a.judul{font-size:200%; color:#fff;}
    .header a.deskripsi{font-size:140%; color:#fff;}
    .responsive img 
   		{
   		max-width:40%;
    	/*width:100%;*/
    	height: auto;
    	float: center;
    	
		}

	#konten 
		{
			height: auto;	
		}

		/* SET BACKGROUND FOOTER*/
	footer 
		{
			background-color:#555;
			color: white;
			padding: 15px;
		}

		@media print {
			.noprint { display: none; }
		}

	</style>
</head>
<body>

<div class="container">
<!--HEADER-->

    <div class="header noprint">
    	<div class="row">
    		<!--<div class="col-lg-2">
    			<span class="responsive"><img src="http://2.bp.blogspot.com/-ZhIHKAWQaMk/TyvrmllG4kI/AAAAAAAAEvQ/iSJDKxbEo5k/s1600/LOGO+KABUPATEN+BANJARNEGARA.png" ></span>
    		</div>-->
    		<div class="col-lg-12">
		        <a class="judul">SISTEM INFORMASI PELAPORAN LPG TABUNG 3 Kg (SIMPEL)</a><br>
		        <a class="deskripsi">PEMERINTAH KABUPATEN BANJARNEGARA</a>
			   	<p style="color:#fff;">Jl. A. Yani No. 16 Telp. (0286) 591041, 591082, 591213, 591214, 591218 (PABX) Telex. 25644 Fax. 591187, Banjarnegara 53414<br>
			   		website : banjarnegarakab.go.id email:info@banjarnegarakab.go.id</p>
		    </div>
		</div>
	</div>

<!--
	<div class="jumbotron">
	  <div>
	    <h2>SISTEM APLIKASI PELAPORAN LPG TABUNG 3 Kg (SIMPEL)</h2>
	    <h5><p>PEMERINTAH KABUPATEN BANJARNEGARA</p>
	   	<p>Jl. A. Yani No. 16 Banjarnegara</p></h5>
	  </div>
	</div>
<!--KONTAINER-->

<!--NAVBAR DAN KONTEN-->
	<div class="row" id="konten">
		<!--NAVIGASI-->
		<div  class="col-lg-2 noprint">
			<!--A Vertical Navbar-->
			<?php include("navbar.php");?>
		</div>

		<!--KONTEN-->
		<div 
			class="col-lg-10">
			<?php include("konten.php");?> 
		</div>

	</div>

<!--FOOTER-->
	<footer class="container-fluid text-center noprint">
		<div class="col-lg-8">
			<marquee direction="left">@2018:by-ALPUAN "Sistem Informasi Pelaporan LPG Bersubsidi Tabung 3 Kg Kabupaten Banjarnegara"</marquee></div>
			<div class="col-lg-4">
				<div class="col-md-4"><i style='font-size:24px' class='fab'>&#xf16d;</i> alpuan</div>
				<div class="col-md-4"><i style='font-size:24px' class='fab'>&#xf081;</i> alpuan24</div>
				<div class="col-md-4"> <i style='font-size:24px' class='fab'>&#xf09a;</i> Alpuan</div>
			</div>
		</div>
	</footer>

</div>

</body>
</html>