<?php
require_once __DIR__ . '/../model/userModel.php';
require_once __DIR__ . '/../model/subscriberModel.php';
require_once __DIR__ . '/../helper/sessionHelper.php';
require_once __DIR__ . '/../helper/ImageHandler.php';

$session = new SessionHelper();

class UserController 
{
    private $user;

    public function __construct(){
        $this->user=new User();
    }

    public function index()
    {
        require_once 'view/login.php';
    }
    /*
        TODO: Verifica el login tanto de administradores como usuarios comunes
    */
    public function verifyLogin($username, $password)
    {
        $this->user->setUsername($username);;
        $this->user->setPassword($password);

        $userInformation = $this->user->searchUser();

        if ($userInformation) {

            $user= $userInformation[0];

            $passha = sha1($password);

            if ($user->username == $username) {
                if ($passha == $user->password) {
                    // Verificacion si usuario esta habilitado para ingresar 
                    if ($user->status == true) {
                        $_SESSION['username'] = $user->username;
                        $_SESSION['nombres'] = $user->nombres;
                        $_SESSION['rol'] = $user->user_level;
                        echo 1;
                    } else {
                        echo 0;
                    }
                } else {
                    echo 0;
                }
            } else {
                echo 0;
            }
        } else {
            echo 0;
        }
    }

    public function CloseSession()
    {
        $redirect = new SessionHelper();
        session_destroy();
        $redirect->redirect();
    }

    public function listUsers()
    {
        $usersList = $this->user->listUser();
        //var_dump($objetoConsulta);
        //require_once  '../view/dashboard.php';
        echo json_encode($usersList);
    }

    /*
    *   Añade un nuevo usuario
    *   o edita(actualiza) un usuario
    */
    public function newUser($aoption, $username, $password, $user_level, $nombres, $telefono)
    {
        $this->user->setId($aoption) ;
        $this->user->setUsername($username);
        $this->user->setPassword($password);
        $this->user->setUserLevel($user_level);
        $this->user->setNombres($nombres);
        $this->user->setTelefono($telefono);
        if ($aoption == 0) {
            $enterUser = $this->user->insertUser();
            echo $enterUser ? json_encode(['title' => 'Perfecto!', 'text' => 'Usuario agregado Correctamente', 'icon' => 'success']) :
                json_encode(['title' => 'Noo!', 'text' => 'No se Pudo Agregar al Usuario', 'icon' => 'error']);
        } else {
            $update = $this->user->updateUser();
            echo $update ? json_encode(['title' => 'Perfecto!', 'text' => 'Usuario Actualizado Correctamente', 'icon' => 'success']) :
                json_encode(['title' => 'Noo!', 'text' => 'No se Pudo Actualizar al Usuario', 'icon' => 'error']);
        }
    }

    /*
     *   Elimina las imagenes que corresponden al usuario
     *   y al usuario en si
     */
    public function deleteUser($id)
    {
        $this->user->setId($id);
        $delete = $this->user->deleteUserAndGalleriesById();
        echo $delete ? json_encode(['title' => 'Perfecto!', 'text' => 'Usuario Eliminado Correctamente', 'icon' => 'success']) :
            json_encode(['title' => 'Noo!', 'text' => 'No se Pudo Eliminar al Usuario', 'icon' => 'error']);
    }
    //________________________________________________________________________
    public function showUsers()
    {
        $selectuser = $this->user->getActiveUsers();
        $options = '';
        foreach ($selectuser as $user) {
            $options .= '<option value="' . $user->id . '">' . $user->nombres . '</option>';
        }
        echo $options;
    }

    public function changeUserStatus($id, $status)
    {
        $this->user->setId($id);
        $this->user->setStatus($status);
        $results = $this->user->changeStatus();
        echo $results;
    }

}


if (isset($_POST['action']) && $_POST['action'] == 'login') {
    $instanciaController = new UserController();
    $instanciaController->verifyLogin($_POST['username'], $_POST['password']);
}

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    $instanciaController = new UserController();
    $instanciaController->CloseSession();
}

if (isset($_GET['action']) && $_GET['action'] == 'list') {
    $instanciaController = new UserController();
    $instanciaController->listUsers();
}

if (isset($_POST['action']) && $_POST['action'] == 'newuser') {
    $instanciaController = new UserController();
    $passwordsha1 = sha1($_POST['password']);
    $userLevel = intval($_POST['level']);
    $operationType = intval($_POST['aoption']);

    $instanciaController->newUser($operationType, $_POST['username'], $passwordsha1, $userLevel, $_POST['name'], $_POST['phone']);
}

if (isset($_POST['action']) && $_POST['action'] == 'delete') {
    //Receptor ajax
    $instanciaController = new UserController();
    $id = intval($_POST['id']);

    $instanciaController->deleteUser($id);
} //___________________________________________________________________________

if (isset($_GET['action']) && $_GET['action'] == 'showuser') {
    $instanciaController = new UserController();
    $instanciaController->showUsers();
}


if (isset($_POST['action']) && $_POST['action'] == 'changeStatusForUser') {

    $id = $_POST['id'];
    $status = $_POST['user_status'];
    $instanciaController = new UserController();
    if (isset($status) && $status == '1') {
        $status = 1;
    } else {
        $status = 0;
    }
    $instanciaController->changeUserStatus($id, $status);
}
