<?php

  // class php untuk koneksi, insert, select, update dan delete
  class db
  {
    // set properti host, user, password dan nama database
    public $db_host = "localhost";      // sesuaikan dengan konfigurasi
    public $db_user = "root";     // sesuaikan dengan konfigurasi
    public $db_pass = "";   // sesuaikan dengan konfigurasi
    public $db_name = "lpg";      // sesuaikan dengan konfigurasi

    // method untuk koneksi
    function koneksi(){
      // buat connection
      $conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

      // Check koneksi
      if ($conn->connect_error) {
          die("Connection gagal: " . $conn->connect_error);
      }
      // tampilkan pesan sukses
      // echo "Koneksi berhasil<br/>";
      // berikan $conn kepada fungsi pemanggil
      return $conn;
    }

    // method untuk menyisipkan / menyimpan data ke dalam tabel
    function simpan($tabel,$kolom,$data){

      //buka koneksi
      $conn = $this->koneksi();

      // pola sintaks mysql insert
      // INSERT INTO nama tabel (kolom-kolom) VALUES ('data','data');
      $sql = "INSERT INTO $tabel ($kolom) VALUES ($data)";

      // cek query
      if ($conn->query($sql) === TRUE) {

          // tampilkan pesan berhasil
          echo "Data berhasil disimpan<br />";
      } else {
          // tampilkan pesan kesalahan
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      // tutup koneksi
      $conn->close();
    }

    // method untuk menyisipkan / menyimpan data ke dalam tabel
    function tampil($kolom,$tabel,$kondisi,$urut,$baris){

      // buka koneksi
      $conn = $this->koneksi();

      // pola sintaks mysql select
      // anggap sekali baca dibatasi 40 baris. ganti bila perlu.
      $sql = "SELECT $kolom FROM $tabel WHERE $kondisi ORDER BY $urut LIMIT $baris, 40";

      // eksekusi query
      $res = $conn->query($sql);

      // cek hasil query, cek banyaknya baris yang didapat
      if ($res->num_rows > 0) {

        // buat variabel penampung isi tabel bertipe array;
        $output = array();

        //tampilkan tiap-tiap baris dengan perulangan while
        while($row = $res->fetch_assoc()) {

          // sisipkan array hasil pembacaan ke variabel $output
          array_push($output,$row);
          }
          return $output;
      } else {
          echo "Tidak ada hasil <br />";
      }

      // tutup koneksi
      $conn->close();
    }

    // method untuk mengupdate data tabel
    function update($tabel,$dataset,$kondisi){

      //buka koneksi
      $conn = $this->koneksi();

      // pola sintaks mysql update
      // UPDATE nama tabel SET { kolom = isi, kolom = isi }
      //  WHERE kolom { kunci = data kunci }
      $sql = "UPDATE $tabel SET $dataset WHERE $kondisi";

      // cek query
      if ($conn->query($sql) === TRUE) {

          // tampilkan pesan berhasil
          echo "Data berhasil diupdate<br />";
      } else {
          // tampilkan pesan kesalahan
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      // tutup koneksi
      $conn->close();
    }

    // method untuk menghapus data
    function hapus($tabel,$kondisi){

      //buka koneksi
      $conn = $this->koneksi();

      // pola sintaks mysql delete
      // DELETE FROM tabel WHERE kondisi
      $sql = "DELETE FROM $tabel WHERE $kondisi";

      // cek query
      if ($conn->query($sql) === TRUE) {

          // tampilkan pesan berhasil
          echo "Data berhasil dihapus<br />";
      } else {
          // tampilkan pesan kesalahan
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      // tutup koneksi
      $conn->close();
    }

  }

?>
