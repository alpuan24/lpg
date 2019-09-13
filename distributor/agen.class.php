<?php
require "../kelas/class.db.php";
class agen extends db
{
    function profil($niap){
        $conn = $this->koneksi();

        $sql = "SELECT * FROM tabelagen WHERE niap = '{$niap}' ";
        $qry = $conn->query($sql);
        $res = $qry->fetch_assoc();
        return $res;
    }

    function updateProfil($data){
        $conn = $this->koneksi();
        $sql  = "UPDATE tabelagen SET namaAgen =  ? , alamat = ? , penjab =  ? WHERE niap = ?" ;

        $qry = $conn->prepare($sql);
        $qry->bind_param("ssss" ,$data['namaAgen'],$data['alamat'],$data['pimpinan'],$data['niap']);

        $qry->execute();
        
        return $qry->affected_rows;

        $conn->close(); $qry->close();
    }

    function dataPangkalan($niap,$halaman){
        $halaman = ($halaman-1) * rows;
        $conn = $this->koneksi();

        $sql = "SELECT tabelpangkalan.* , tabeldesa.desa namadesa FROM tabelpangkalan, tabeldesa WHERE tabelpangkalan.niap = '{$niap}' && tabeldesa.nid = tabelpangkalan.desa LIMIT $halaman , " .rows;

        $res = $conn->query($sql);
        
        $data = [];
        if($res->num_rows > 0 ){
            while($row = $res->fetch_assoc()){
                array_push($data , $row);
            }
        }
        return $data;
        $conn->close(); $qry->close();
    }

    function cariPangkalan($niap,$nama){
        $conn = $this->koneksi();
        $nama = "%".$nama."%";
        $sql = "SELECT idPangkalan , pemilikPangkalan FROM tabelpangkalan WHERE niap = ? && pemilikPangkalan  LIKE ?";
        $qry = $conn->prepare($sql);
        $qry->bind_param("ss" ,$niap,$nama);

        $qry->execute();
        $qry->bind_result($idp,$nmp);
        $data = [];
        while($qry->fetch()){
            $res = ['idPang' => $idp , 'nmPang' => $nmp];
            array_push($data , $res);
        }
        return $data;
        
        $conn->close(); $qry->close();
    }
}