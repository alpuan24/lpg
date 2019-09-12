<?php 
session_start();

require "../kelas/class.db.php";
$login = new db();

// $username = $_POST['username'];
$password = md5($_POST['username']."***".$_POST['password']);

// tampil($kolom,$tabel,$kondisi,$urut,$baris)
$user = $login->tampil("*" ,"tabeluser" ,"password = '".$password."'" , "id" ,0);


 
if(count($user) > 0){
	/*
	[id] => 1
	[nama] => Admin Pemda
	[email] => lpg_bna@gmail.com
	[user] => admpemda
	[password] => 4ccdf7f5a80d7eeba69a88008548a99e
	[no_hp] => 82324423442
	[kelas] => 1
	*/

	$_SESSION['user_id'] = $user['id'];
	$_SESSION['username'] = $user['nama'];
	$_SESSION['kelas'] = $user['kelas'];
	if( $user['kelas'] == 1 ){
		header("Location: ../admin/");
	}else{
		header("Location: ../distributor/");
	}
}else{
	header("location:./");	
}
 