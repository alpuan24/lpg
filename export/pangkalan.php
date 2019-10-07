<?php
require("../kelas/class.db.php");
$exp = new db();
$conn = $exp->koneksi();

$kec = $_GET['kec'];
$sql = "SELECT tabelpangkalan.idPangkalan , tabelpangkalan.pemilikPangkalan , tabeldesa.desa , tabelpangkalan.kecamatan , tabelagen.namaAgen FROM tabelpangkalan , tabelagen , tabeldesa WHERE tabeldesa.nid = tabelpangkalan.desa && tabelagen.niap = tabelpangkalan.niap && tabelpangkalan.kecamatan = '{$kec}' ORDER BY desa,pemilikPangkalan";

$qry = $conn->query($sql);
$pkl = [];
while($res = $qry->fetch_assoc()){
    array_push( $pkl , $res );
}
$conn->close();

$sekarang=date('Ymd-his');
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Pangkalan-{$kec}-{$sekarang}.xls");
?>

<table>
    <thead>
    <tr>
    <td colspan="5"><h4>DATA PANGKALAN KECAMATAN <?=strtoupper($kec);?></h4></td>
    </tr>
    <tr>
    <td colspan="5"><h4>Tanggal <?=date('d/m/Y');?></h4></td>
    </tr>
        <tr>
            <th>ID Pangkalan</th>
            <th>Desa</th>
            <th>Nama / Pemilik Pangkalan</th>
            <th>Kecamatan</th>
            <th>Agen</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($pkl AS $i=>$data): ?>
    <tr>
        <td><?=$data['idPangkalan'];?></td>
        <td><?=$data['desa'];?></td>
        <td><?=$data['pemilikPangkalan'];?></td>
        <td><?=$data['kecamatan'];?></td>
        <td><?=$data['namaAgen'];?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>