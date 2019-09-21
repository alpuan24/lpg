<?php
require 'agen.class.php';
$agen = new agen();
$pangkalan = $agen->dataDistrib($_GET['niap'],$_GET['tgl']);
echo json_encode($pangkalan);