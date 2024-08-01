<?php

require_once '../../config/db.php';
require_once '../controller/modal-brading.php';
require_once '../model/modal-branding.php';
require_once '../db/db.php';


$action = isset($_GET['action']) ? $_GET['action'] : null;

if ($action == 'GET') {
    echo json_encode(ControllerModalBranding::get());
   

} else if ($action == 'ADD') {

    if (isset($_POST['name'], $_POST['phone'], $_POST['email'])) {
        $nombre = $_POST['name'];
        $telefono = $_POST['phone'];
        $correo = $_POST['email'];

        $controller = new ControllerModalBranding();
        echo json_encode($controller->add($nombre, $telefono, $correo));
    } else {
        echo json_encode('Faltan parámetros en la solicitud.');
    }

}else if($action == 'DELETE'){
    echo json_encode(ControllerModalBranding::delete());
}



// echo json_encode($_POST);
