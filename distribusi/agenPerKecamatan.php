<?php
//SELECT tanggal,namaAgen , kecamatan , sum(jumlah) jumlah FROM vwDisribusi WHERE left(tanggal,7) = '2019-09' GROUP BY namaAgen , kecamatan;
    require "../kelas/class.db.php";
    $adm = new db();

    $sql = "SELECT tanggal,namaAgen , kecamatan , sum(jumlah) jumlah FROM vwDisribusi WHERE left(tanggal,7) = ? GROUP BY namaAgen , kecamatan";

    $dbh = $adm->koneksi();
    $qry=$dbh->prepare($sql);
    
    $qry->bind_param("s" , $_GET['bl']);

    $qry->execute();
    $qry->bind_result($tgl,$agn,$kec,$jml);
    $data = [];
    while($qry->fetch()){
        $res = [
            'tgl'=>$tgl,
            'agn'=>$agn,
            'kec'=>$kec,
            'jml'=>$jml
        ];
        array_push($data , $res);
    }
    
    echo json_encode( $data , JSON_PRETTY_PRINT );
    
    $qry->close(); $qry->close();