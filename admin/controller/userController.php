<?php

require_once dirname(dirname(__FILE__)) . '/model/userModel.php';
require_once dirname(dirname(__FILE__)) . '/model/suscriptorModel.php';
require_once 'staterController.php';
$sesion = new StaterController();

class UserController extends Usuario
{

    public function index()
    {
        require_once 'view/login.php';
    }

    public function VerifyLogin($username, $password)
    {
        $this->username = $username;
        $this->password = $password;

        $infoUsuario = $this->SearchUsuario();
        //echo var_dump($infoUsuario);  
        if ($infoUsuario) {
            foreach ($infoUsuario as $usuario) {
            }
            //echo var_dump($usuario->password);
            //echo $password;
            $passha = sha1($password);
            if ($usuario->username == $username) {
                if ($passha == $usuario->password) {
                    // Verificacion si usuario esta habilitado para ingresar 
                    if ($usuario->status == true) {
                        $_SESSION['username'] = $usuario->username;
                        $_SESSION['nombres'] = $usuario->nombres;
                        $_SESSION['rol'] = $usuario->user_level;
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
        $redirect = new StaterController();
        session_destroy();
        $redirect->redireccionar();
    }

    public function listUsers()
    {   //echo json_encode($objetoConsulta);
        $objetoConsulta = $this->listUser();
        //var_dump($objetoConsulta);
        //require_once  '../view/dashboard.php';

        echo json_encode($objetoConsulta);
    }

    public function newUser($aoption, $username, $password, $user_level, $nombres, $telefono)
    {
        $this->id = $aoption;
        $this->username = $username;
        $this->password = $password;
        $this->user_level = $user_level;
        $this->nombres = $nombres;
        $this->telefono = $telefono;
        if ($aoption == 0) {
            $enterUser = $this->insertUser();
            echo $enterUser ? json_encode(['title' => 'Perfecto!', 'text' => 'Usuario agregado Correctamente', 'icon' => 'success']) :
                json_encode(['title' => 'Noo!', 'text' => 'No se Pudo Agregar al Usuario', 'icon' => 'error']);
        } else {
            $update = $this->UpdateUser();
            echo $update ? json_encode(['title' => 'Perfecto!', 'text' => 'Usuario Actualizado Correctamente', 'icon' => 'success']) :
                json_encode(['title' => 'Noo!', 'text' => 'No se Pudo Actualizar al Usuario', 'icon' => 'error']);
        }
    }

    public function deleteuser($id)
    {
        $this->id = $id;
        //Eliminar las imagenes corresponden a usuario

        //Eliminar usuario
        $delete = $this->userdelete();

        echo $delete ? json_encode(['title' => 'Perfecto!', 'text' => 'Usuario Eliminado Correctamente', 'icon' => 'success']) :
            json_encode(['title' => 'Noo!', 'text' => 'No se Pudo Eliminar al Usuario', 'icon' => 'error']);
    }
    //________________________________________________________________________
    public function showusers()
    {
        $selectuser = $this->showuser();
        $options = '';
        foreach ($selectuser as $user) {
            $options .= '<option value="' . $user->id . '">' . $user->nombres . '</option>';
        }
        echo $options;
    }

    function insertgallery($descripcion, $idcliente, $newname)
    {
        # code...
        $this->descripcion = $descripcion;
        $this->idcliente = $idcliente;
        $this->image = $newname;
        $gallery = $this->inserGallerys();
        //echo $gallery ? json_encode(['title' => 'Perfecto!', 'text' => 'Galeria Agregado Correctamente','icon' => 'success']):
        //json_encode(['title' => 'Noo!', 'text' => 'No se Pudo Agregar Galeria','icon' => 'error']);
    }


    public function listgallery()
    {
        $objetoConsulta = $this->listviewgallery();
        echo json_encode($objetoConsulta);
    }

    public function deleteMyGallery($id)
    {
        $this->idgallery = $id;
        $delete = $this->deleteYouGallery();
        echo $delete ? json_encode(['title' => 'Perfecto!', 'text' => 'Galeria Eliminado Correctamente', 'icon' => 'success']) :
            json_encode(['title' => 'Noo!', 'text' => 'No se Pudo Eliminar Galeria', 'icon' => 'error']);

    }
    //::::::::::::client::::::::::::::::

    public function showgalleryforclient($id)
    {
        $this->identclientgallery = $id;
        $resultgalleryforclient = $this->galleryforclients();
        //echo json_encode($resultgalleryforclient);
        $articles = '';
        foreach ($resultgalleryforclient as $p) {
            $iganes = $p['image'];
            $articles .= "<article class='product'>
                           <figure class='img-product'>
                               ´<img src='../imgGallery/$iganes' alt='Imagen galleria'>´
                               <h4 class='subtitulo-product'>
                               " . $p['descripcion'] . "
                                </h4>
                           </figure>
                       </article> <br>";
        }
        echo $articles;

    }
    //:::::::::::::::General::::::::::::::::::::::::::::

    public function showgalleryforAll()
    {
        $resultgalleryforclient = $this->galleryforAll();
        //echo json_encode($resultgalleryforclient);
        $articles = '';
        foreach ($resultgalleryforclient as $p) {
            $iganes = $p['image'];
            $articles .= "<article class='product'>
                           <figure class='img-product'>
                               ´<img src='../imgGallery/$iganes' alt='Imagen galleria'>´
                           </figure>
                           <h4 class='subtitulo-product'>
                               " . $p['descripcion'] . "
                           </h4>
                       </article>";
        }
        echo $articles;
    }

    public function changeUserStatus($id, $status)
    {
        $this->id = $id;
        $this->status = $status;
        $results = $this->changeStatus();
        echo $results;
    }

    public function listsuscriptor()
    {
        $instanciaController = new Suscriptor();
        $objetoConsulta = $instanciaController->listSuscriptor();
        echo json_encode($objetoConsulta);
    }
}


if (isset($_POST['action']) && $_POST['action'] == 'login') {
    $instanciaController = new UserController();
    $instanciaController->VerifyLogin($_POST['username'], $_POST['password']);
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
    $aoption = intval($_POST['aoption']);

    $instanciaController->newUser($aoption, $_POST['username'], $passwordsha1, $userLevel, $_POST['name'], $_POST['phone']);
}

if (isset($_POST['action']) && $_POST['action'] == 'delete') {
    //Receptor ajax
    $instanciaController = new UserController();
    $id = intval($_POST['id']);

    $instanciaController->deleteuser($id);
} //___________________________________________________________________________

if (isset($_GET['action']) && $_GET['action'] == 'showuser') {
    $instanciaController = new UserController();
    $instanciaController->showusers();
}

if (isset($_POST['action']) && $_POST['action'] == 'isertimg') {
    $instanciaController = new UserController();
    foreach ($_FILES['files']['name'] as $i => $value) {
        $imagenTemp = $_FILES['files']['tmp_name'][$i];
        $random = rand(0, 99);
        $folder = "../imgGallery/";
        $imagenName = $random . date('YmdH') . $_FILES['files']['name'][$i];
        $img_path = $folder . $imagenName;
        move_uploaded_file($imagenTemp, $img_path);
        $instanciaController->insertgallery($_POST['descripcion'], $_POST['users'], $imagenName);
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'listgallery') {
    $instanciaController = new UserController();
    $instanciaController->listgallery();
}

if (isset($_POST['action']) && $_POST['action'] == 'deletegallery') {
    $instanciaController = new UserController();

    $eliminarimage = $_SERVER["DOCUMENT_ROOT"] . "/admin/imgGallery/" . $_POST['nameimage'];
    unlink($eliminarimage);

    $id = intval($_POST['id']);
    $instanciaController->deleteMyGallery($id);
}

if (isset($_GET['action']) && $_GET['action'] == 'showGalleryForClient') {
    $instanciaController = new UserController();
    $instanciaController->showgalleryforclient($_GET['identgallery']);
}

if (isset($_GET['action']) && $_GET['action'] == 'showGalleryForAll') {
    $instanciaController = new UserController();
    $instanciaController->showgalleryforAll();
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
/**NUEVO SUSCRIPTOR */
if (isset($_POST['action']) && $_POST['action'] == 'addSucriptor') {
    if (!empty($_POST["nombre"]) && !empty($_POST["telefono"]) && !empty($_POST["correo"])) {

        $res = ["status" => false, "msg" => "", "type" => "error"];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        $instanciaController = new Suscriptor($nombre, $telefono, $correo);
        $r = $instanciaController->buscarSuscriptor()["resultado"];

        //r = 0
        if ($r == 0) {
            //registrar
            //r = 1
            $r = $instanciaController->nuevoSuscriptor();
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

if (isset($_GET['action']) && $_GET['action'] == 'listsuscriptor') {
    $instanciaController = new UserController();
    $instanciaController->listsuscriptor();
}