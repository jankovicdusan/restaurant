<?php

require_once '../controller/Controller.php';



$controller = new Controller();

$page = isset($_GET['page'])?$_GET['page']:'';

switch($page){
    case 'reservation':
    $controller->Reservation();
    break; 
    case 'Reserve':
    $controller->insertReservation();
    break; 
    case 'allreservations':
    $controller->allReservations();
    break;
}
?>