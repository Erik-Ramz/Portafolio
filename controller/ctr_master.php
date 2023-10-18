<?php

$peticion='inicio';
extract($_REQUEST);

switch($peticion){
    case 'inicio':
        require_once 'view/html/inicio.php';
    break;
}
?>