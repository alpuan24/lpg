<?php
//SELECT tanggal, kecamatan , sum(jumlah) jumlah FROM vwDisribusi WHERE left(tanggal,7) = '2019-09' GROUP BY kecamatan;
    require "../kelas/class.db.php";
    $adm = new db();

    $sql = "SELECT tanggal, kecamatan , sum(jumlah) jumlah FROM vwDisribusi WHERE left(tanggal,7) = ? GROUP BY kecamatan";

    $dbh = $adm->koneksi();
    $qry=$dbh->prepare($sql);
    
    $qry->bind_param("s" , $_GET['bl']);

    $qry->execute();
    $qry->bind_result($tgl,$kec,$jml);
    $data = [];
    while($qry->fetch()){
        $res = [
            'tgl'=>$tgl,
            'kec'=>$kec,
            'jml'=>$jml
        ];
        array_push($data , $res);
    }
    
    echo json_encode( $data , JSON_PRETTY_PRINT );
    
    $qry->close(); $qry->close();