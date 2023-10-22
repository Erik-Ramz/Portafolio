<?php

$peticion='index';
extract($_REQUEST);

switch($peticion){
    case 'index':
        require_once 'view/html/index.php';
    break;
    case 'reservation':
        require_once 'view/html/reservation.php';
    break;
}
?>