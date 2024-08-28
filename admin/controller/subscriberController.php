<?php

require_once __DIR__ .'/../model/subscriberModel.php';
require_once __DIR__ .'/../helper/sessionHelper.php';

$session= new SessionHelper();
class SubscriberController{

    private $subscriber;

    public function __construct()
    {
        $this->subscriber = new Subscriber();
    }

    public function listSubscriber(){
        /*stmt-> statement*/
        $objectStmt= $this->subscriber->getAllSubscribers();
        echo json_encode($objectStmt);
    }

    public function deleteSubscriber($id){
        $this->subscriber->setId($id);
        $delete= $this->subscriber->removeById();
        $this->respondToAction($delete,"Suscriptor eliminado correctamente","No se pudo eliminar al subscriptor");
    }

    private function respondToAction($success, $successMessage, $failureMessage)
    {
        echo $success ? json_encode(['title' => 'Perfecto!', 'text' => $successMessage, 'icon' => 'success']) :
            json_encode(['title' => 'Noo!', 'text' => $failureMessage, 'icon' => 'error']);
    }


}

if (isset($_GET['action']) && $_GET['action'] == 'listsuscriptor') {
    $instanciaController = new SubscriberController();
    $instanciaController->listSubscriber();
}

if(isset($_POST['action']) && $_POST['action'] == 'deletesubscriberbyid'){
    $instanceController=new SubscriberController();
    $id= intval($_POST['id']);
    $instanceController->deleteSubscriber($id);
}

/**NUEVO SUSCRIPTOR */
if (isset($_POST['action']) && $_POST['action'] == 'addSucriptor') {
    if (!empty($_POST["nombre"]) && !empty($_POST["telefono"]) && !empty($_POST["correo"])) {

        $res = ["status" => false, "msg" => "", "type" => "error"];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        $instanciaController = new Subscriber($nombre, $telefono, $correo);
        $r = $instanciaController->searchSubscriberByEmail()["resultado"];

        //r = 0
        if ($r == 0) {
            //registrar
            //r = 1
            $r = $instanciaController->addSubscriber();
        }

        //r > 0
        if ($r > 0) {
            $res['status'] = true;
            $res['msg'] = "Usuario registrado correctamente.";
            $res['type'] = "success";
        } else {
            $res['msg'] = 'Ocurrió un error al registrar el usuario.';
        }
    } else {
        $res['msg'] = 'Es necesario completar todos los campos.';
        $res['type'] = "warning";
    }
    echo json_encode($res);
}
