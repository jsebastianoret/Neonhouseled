<?php

require_once '../../config/db.php';
require_once '../controller/person5.php';
require_once '../model/person5.php';
require_once '../db/db.php';


$action = isset($_GET['action']) ? $_GET['action'] : null;

if ($action == 'GET') {
    echo json_encode(ControllerPerson5::get());
   

} else if ($action == 'ADD') {

    if (isset($_POST['nombre'], $_POST['telefono'], $_POST['email'])) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];

        $controller = new ControllerPerson5(); // Instancia de ControllerPerson1
        echo json_encode($controller->add($nombre, $email, $telefono)); // Llamada al método add() en la instancia
    } else {
        echo json_encode('Faltan parámetros en la solicitud.');
    }
}else if($action == 'DELETE'){
    echo json_encode(ControllerPerson5::delete());
}


// echo json_encode($_POST);
