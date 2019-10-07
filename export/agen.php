<?php
require("../kelas/class.db.php");
$exp = new db();
$conn = $exp->koneksi();

$agen = $exp->tampil("*","tabelagen",1,"namaAgen",0);

$sekarang=date('Ymd-his');
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Agen-{$sekarang}.xls");
?>

<table>
    <thead>
        <tr>
            <td colspan="5"><h4>DATA AGEN LPG</h4></td>
        </tr>
        <tr>
            <td colspan="5"><h4>Tanggal <?=date('d/m/Y');?></h4></td>
        </tr>
        <tr>
            <th>NIAP</th>
            <th>Nama Agen</th>
            <th>Alamat</th>
            <th>Pimpinan</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($agen AS $i=>$data): ?>
    <tr>
        <td><?=$data['niap'];?></td>
        <td><?=$data['namaAgen'];?></td>
        <td><?=$data['alamat'];?></td>
        <td><?=$data['penjab'];?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>