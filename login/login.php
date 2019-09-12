<?php 
session_start();

require "../kelas/class.db.php";
$login = new db();

// $username = $_POST['username'];
$password = md5($_POST['username']."***".$_POST['password']);

// tampil($kolom,$tabel,$kondisi,$urut,$baris)
$user = $login->tampil("*" ,"tabeluser" ,"password = '".$password."'" , "id" ,0);

 
if(count($user) > 0){

	$_SESSION['user_id'] = $user[0]['id'];
	$_SESSION['username'] = $user[0]['nama'];
	$_SESSION['kelas'] = $user[0]['kelas'];

	if( $user[0]['kelas'] == 1 ){
		//echo "Kelas 1";
		header("Location: ../");
	}else{
		echo "Bukan Kelas 1";
		header("Location: ../distributor/");
	}
}else{
	header("location:./");	
}
 