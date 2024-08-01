<?php 
require_once '../../config/db.php';
require_once '../controller/posteo.php';
require_once '../model/posteo.php';
require_once '../db/db.php';

$action = isset($_GET['action']) ? $_GET['action'] : null;


if($action == 'GET'){
    echo json_encode(ControllerPosteo::get());
}else if($action == 'ADD'){
    echo json_encode(ControllerPosteo::add());
}else if($action == 'DELETE'){
    echo json_encode(ControllerPosteo::delete());
}else if($action == 'UPDATE'){
    echo json_encode(ControllerPosteo::update());
}else if($action == 'Mostrar'){
    echo json_encode( ControllerPosteo::getMost());
}
else if($action == 'GETB'){
    echo json_encode( ControllerPosteo::getBlog());
}
