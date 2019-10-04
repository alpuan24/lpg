<?php
    require "../kelas/class.db.php";
    $adm = new db();
    $sql = "SELECT idPangkalan , pemilikPangkalan , namaAgen , iddesa , kecamatan , jumlah FROM vwDisribusi WHERE niap = ? && LEFT(tanggal,7) = ? && iddesa = ? LIMIT 200";

    $dbh = $adm->koneksi();
    $qry=$dbh->prepare($sql);
    
    $qry->bind_param("sss" ,$_GET['nia'],$_GET['bl'],$_GET['ds']);

    $qry->execute();
    $qry->bind_result($idp,$pkl,$agn,$dsa,$kec,$jml);
    $data = [];
    while($qry->fetch()){
        $res = [
            'idp'=>$idp,
            'pkl'=>$pkl,
            'agn'=>$agn,
            'dsa'=>$dsa,
            'kec'=>$kec,
            'jml'=>$jml
        ];
        array_push($data , $res);
    }
    
    echo json_encode( $data , JSON_PRETTY_PRINT );
    
    $qry->close(); $qry->close();
?>