<?php

require_once '../../config/db.php';
require_once '../controller/modal-gestion.php';
require_once '../model/modal-gestion.php';
require_once '../db/db.php';


$action = isset($_GET['action']) ? $_GET['action'] : null;

if ($action == 'GET') {
    echo json_encode(ControllerModalGestion::get());
   

} else if ($action == 'ADD') {

    if (isset($_POST['name'], $_POST['lastName'], $_POST['email'])) {
        $nombre = $_POST['name'];
        $apellido = $_POST['lastName'];
        $correo = $_POST['email'];

        $controller = new ControllerModalGestion();
        echo json_encode($controller->add($nombre, $apellido, $correo));
    } else {
        echo json_encode('Faltan parámetros en la solicitud.');
    }

}else if($action == 'DELETE'){
    echo json_encode(ControllerModalGestion::delete());
}



// echo json_encode($_POST);
