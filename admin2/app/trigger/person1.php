<?php

require_once '../../config/db.php';
require_once '../controller/person1.php';
require_once '../model/person1.php';
require_once '../db/db.php';


$action = isset($_GET['action']) ? $_GET['action'] : null;

if ($action == 'GET') {
    echo json_encode(ControllerPerson1::get());
   

} else if ($action == 'ADD') {

    if (isset($_POST['nombre'], $_POST['telefono'], $_POST['email'], $_POST['service'])) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $service = $_POST['service'];

        $controller = new ControllerPerson1();
        echo json_encode($controller->add($nombre, $telefono, $email, $service));
    } else {
        echo json_encode('Faltan parámetros en la solicitud.');
    }

}else if($action == 'DELETE'){
    echo json_encode(ControllerPerson1::delete());
}



// echo json_encode($_POST);
