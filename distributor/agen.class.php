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

    function setDistribusi($data){
       

        $conn = $this->koneksi();
        $sql = "INSERT INTO tabeldistribusi SET idDistribusi = ?, tanggal  = ? , niap  = ? , idPangkalan  = ?, jumlah  = ?";
        $qry = $conn->prepare($sql);
        
        $qry->bind_param("ssssi" ,$data['distId'],$data['tanggal'],$data['niap'],$data['pangkalan'],$data['jumlahtabung']);
        
        $qry->execute();
        
        return $qry->affected_rows;

        $conn->close(); $qry->close();
        
    }

    function getDistid(){
        $now = date('ymd')."%";
        $conn = $this->koneksi();
        
        $sql = "SELECT MAX(idDistribusi) distId FROM tabeldistribusi WHERE idDistribusi LIKE ?";
        $qry = $conn->prepare($sql);
        $qry->bind_param("s",$now);
        $qry->execute();
        $qry->bind_result($distId);
        $data = '';
        while($qry->fetch()){
            $data = $distId;
        }

        return $data;
        $conn->close(); $qry->close();
    }

    function getDistribusi($niap,$bulan){
        $conn = $this->koneksi();

        $sql = "SELECT tabeldistribusi.idDistribusi , DATE_FORMAT(tabeldistribusi.tanggal ,'%d/%m/%Y') as tanggal , tabelpangkalan.pemilikPangkalan as pangkalan , tabeldesa.desa , tabelpangkalan.kecamatan , tabeldistribusi.jumlah FROM tabeldistribusi , tabelpangkalan , tabeldesa WHERE tabelpangkalan.idPangkalan = tabeldistribusi.idPangkalan && tabeldesa.nid = tabelpangkalan.desa && tabeldistribusi.niap = ? && LEFT(tabeldistribusi.tanggal , 7) = ?";

        $qry = $conn->prepare($sql);
        $qry->bind_param("ss" ,$niap,$bulan);

        $qry->execute();
        $qry->bind_result($distId,$tanggal,$pangkalan,$desa,$kecamatan,$jumlah);
        $data = [];
        while($qry->fetch()){
            $res = [
                'idDistribusi' => $distId,
                'tanggal' => $tanggal,
                'pangkalan' => $pangkalan,
                'desa' => $desa,
                'kecamatan' => $kecamatan,
                'jumlah' => $jumlah
            ];
            array_push($data , $res);
        }
        return $data;
        
        $conn->close(); $qry->close();
    }

    function dataDistrib($niap,$tgl){
        $conn = $this->koneksi();
        $sql = "SELECT DATE_FORMAT(tanggal,'%d/%m/%Y') tanggal , tabelpangkalan.pemilikPangkalan, tabeldesa.desa, tabelpangkalan.kecamatan, jumlah FROM tabeldistribusi , tabelpangkalan , tabeldesa WHERE tabeldistribusi.niap= ? && tanggal = ? && tabelpangkalan.idPangkalan = tabeldistribusi.idPangkalan && tabeldesa.nid = tabelpangkalan.desa ORDER BY kecamatan,desa,pemilikPangkalan";
        $qry = $conn->prepare($sql);
        $qry->bind_param("ss" ,$niap,$tgl);

        $qry->execute();
        $qry->bind_result($tgl,$pang,$desa,$kcmt,$jmlh);
        $data = [];
        while($qry->fetch()){
            $res = [
                'tanggal' => $tgl,
                'pangkalan' => $pang,
                'desa' => $desa,
                'kecamatan' =>$kcmt,
                'jumlah' => $jmlh
            ];
            array_push($data , $res);
        }
        return $data;
        
        $conn->close(); $qry->close();

    }

}