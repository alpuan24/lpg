<?php

$p = !$_GET['p']? 1 : $_GET['p'];
$pkln = $agen->dataPangkalan($_SESSION['niap'],$p);
// print_r($pkln);
//var_dump($pkln);


?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h2>DATA PANGKALAN</h2>
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
        </div>
    </div>
</div>
-->