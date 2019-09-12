<?php
if(!$_GET['menu']){
    include "profil.php";
}else{
    if($_GET['menu'] == 'profil') { include "profil.php";}
    if($_GET['menu'] == 'pangkalan') { include "pangkalan.php";}
}
