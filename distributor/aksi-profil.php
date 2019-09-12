<?php 	
    session_start();
    require('agen.class.php');
    $agen = new agen();
    $data = $agen->updateProfil($_POST);
    if( $data > 0){
        header("Location:./");
    }else{
        echo "Check Query Please! <br>";
        echo "returning: ".$data;
    }


