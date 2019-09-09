<?php
// buat agar bisa diakses seluruh domain
header("Access-Control-Allow-Origin: *");

// panggil class db
require('dbclass/class.db.php');

// buat objek baru dari class db
$wb = new db();

// panggil fungsi tampil, simpan outuputnya
// di variabel $data
// tampil($kolom,$tabel,$kondisi,$urut,$baris)
$data = $wb->tampil('*','tabelagen',1,'niap',0); //untuk kolom tabel disesuaikan dengan tabel yang akan di tampilkan

// tampilkan $data dalam format json
echo json_encode($data);

?>
