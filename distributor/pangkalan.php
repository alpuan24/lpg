<?php

$p = !$_GET['p']? 1 : $_GET['p'];
$pkln = $agen->dataPangkalan($_SESSION['niap'],$p);
//$halaman = $agen->halaman($_SERVER['QUERY_STRING']);
// print_r($pkln);
//var_dump($pkln);


?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h2>DATA PANGKALAN</h2>
            <table class="table"><tr><?php gahal($_GET['p']) ;?></tr></table>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <td>ID PANGKALAN</td>
                    <td>NAMA / PEMILIK</td>
                    <td>DESA</td>
                    <td>KECAMATAN</td>
                    </tr>
                </thead>
                <tbody>

                <?php foreach($pkln AS $pangkalan ): ?>
                    <tr>
                        <td><?=$pangkalan['idPangkalan']?></td>
                        <td><?=$pangkalan['pemilikPangkalan']?></td>
                        <td><?=$pangkalan['namadesa']?></td>
                        <td><?=$pangkalan['kecamatan']?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <table class="table"><tr><?php gahal($_GET['p']) ;?></tr></table>
        </div>
    </div>
</div>
<?php
function gahal($p=1){
    if( $p == 1 ){
        $hs = 1;
    }else{
        $hs = $p-1;
    }
    $hb = $p+1;
    echo "<td width='50%' align='left'><a href='./?menu=pangkalan&p=$hs'>Sebelum</a></td>";
    echo "<td width='50%' align='right'><a href='./?menu=pangkalan&p=$hb'>Berikut</a></td?";
}
?>