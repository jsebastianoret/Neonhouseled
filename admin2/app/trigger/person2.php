<?php

require_once '../../config/db.php';
require_once '../controller/person2.php';
require_once '../model/person2.php';
require_once '../db/db.php';


$action = isset($_GET['action']) ? $_GET['action'] : null;

if ($action == 'GET') {
    echo json_encode(ControllerPerson2::get());
   

} else if ($action == 'ADD') {

    if (isset($_POST['nombre'], $_POST['telefono'], $_POST['email'])) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];

        $controller = new ControllerPerson2();
        echo json_encode($controller->add($nombre, $telefono, $email));
    } else {
        echo json_encode('Faltan parámetros en la solicitud.');
    }

}else if($action == 'DELETE'){
    echo json_encode(ControllerPerson2::delete());
}



// echo json_encode($_POST);
