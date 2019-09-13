<?php
require 'agen.class.php';
$agen = new agen();
$pangkalan = $agen->cariPangkalan($_GET['niap'],$_GET['nama']);
echo json_encode($pangkalan);