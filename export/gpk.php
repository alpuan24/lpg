<?php
require("../kelas/class.db.php");
$exp = new db();
$conn = $exp->koneksi();

$sql = "SELECT DATE_FORMAT(tanggal,'%m/%Y') tanggal, kecamatan , sum(jumlah) jumlah FROM vwDisribusi WHERE left(tanggal,7) = ? GROUP BY kecamatan";

    $qry=$conn->prepare($sql);
    
    $qry->bind_param("s" , $_GET['bl']);

    $qry->execute();
    $qry->bind_result($tgl,$kec,$jml);
    $gpk = [];
    $tdt = 0;
    while($qry->fetch()){
        $res = [
            'tgl'=>$tgl,
            'kec'=>$kec,
            'jml'=>$jml
        ];
        $tdt += $res['jml'];
        array_push($gpk , $res);
    }
$conn->close();

$sekarang=date('Ymd-his');
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DistribusiPerAgen-{$_GET['bl']}.xls");
?>

<table>
    <thead>
    <tr>
    <td colspan="3"><h4>DATA DISTRIBUSI PER KECAMATAN</h4></td>
    </tr>
    <tr>
    <td colspan="3"><h4>Bulan <?=$_GET['bl'];?></h4></td>
    </tr>
        <tr>
            <th>Bulan</th>
            <th>Kecamatan</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($gpk AS $i=>$data): ?>
    <tr>
        <td><?=$data['tgl'];?></td>
        <td><?=$data['kec'];?></td>
        <td align='right'><?=$data['jml'];?> Tabung</td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="2">Jumlah Keseluruhan</td>
        <td align='right'><?=$tdt;?> Tabung</td>
    </tr>
    </tbody>
</table>