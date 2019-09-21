<?php
require 'agen.class.php';
$agen = new agen();
$distId = $agen->getDistid();

if($distId == NULL || $distId == ''){
    $idDist = date('ymd').'001';
    echo $idDist;
}else{
    $idDist = $distId + 1;
    echo $idDist;
}
$_POST['distId'] = $idDist;
// print_r($_POST);

if($agen->setDistribusi($_POST) > 0){
    // echo "OK";
    header("Location:./?menu=distribusi");
}else{
    echo "KO";
}
