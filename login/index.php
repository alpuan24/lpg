<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Pelaporan LPG Bersubsidi Tabung 3Kg (SIMPEL)</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<!--center><h2>Ketikan Username dan Password untuk Masuk !</h2></center-->	
	<br/>
	<div class="login">
	<div id="loginimg">
		<img src="../img/lpg3kg.png" alt="lpgdroid">
	</div>
		<h4 style='text-align:center;'>Login Simpel LPG - 3Kg</h4>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" value="admpemda"/>
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" value="admpemda3304banjar" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>