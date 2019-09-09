<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>untitled</title>
<meta name="generator" content="Geany 1.33" />
<script>
	$(document).ready( function(){
		$("#kecamatan").on('change',function(){
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
		});
	})
</script>
</head>

<body>

	<select id="kecamatan">
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

	<select id="desa">
	</select>


<script>


</script>

</body>

</html>