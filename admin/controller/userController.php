<?php
/*require_once dirname(dirname(__FILE__)) . '/model/userModel.php';
require_once dirname(dirname(__FILE__)) . '/model/suscriptorModel.php';*/

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

/*    function addGallery($descripcion, $idcliente, $newname)
    {
        # code...
        $this->user->setDescripcion($descripcion);
        $this->user->setIdcliente($idcliente);
        $this->user->setImage($newname);
        $gallery = $this->user->insertGallery();
        //echo $gallery ? json_encode(['title' => 'Perfecto!', 'text' => 'Galeria Agregado Correctamente','icon' => 'success']):
        //json_encode(['title' => 'Noo!', 'text' => 'No se Pudo Agregar Galeria','icon' => 'error']);
    }
    public function listGallery()
    {
        $allImagesFromGalleries = $this->user->getAllGalleries();
        echo json_encode($allImagesFromGalleries);
    }

    public function deleteGallery($id)
    {
        $this->user->setIdgallery($id);
        $delete = $this->user->deleteGalleryById();
        echo $delete ? json_encode(['title' => 'Perfecto!', 'text' => 'Galeria Eliminado Correctamente', 'icon' => 'success']) :
            json_encode(['title' => 'Noo!', 'text' => 'No se Pudo Eliminar Galeria', 'icon' => 'error']);

    }
    //::::::::::::client::::::::::::::::

    public function showClientGalleries($id)
    {
        $this->user->setIdentclientgallery($id);

        $page = $this->getCurrentPage();
        $itemsPerPage = 6;

        $resultgalleryforclient = $this->user->getClientGalleries($page, $itemsPerPage);

        $totalItems = $this->user->countClientGalleries();

        $totalPages = ceil($totalItems / $itemsPerPage);

        $articles = $this->generateArticles($resultgalleryforclient);
        $pagination = ($totalPages > 1) ? $this->generatePagination($page, $totalPages) : '';

        echo json_encode(['articles' => $articles, 'pagination' => $pagination]);
    }

    private function getCurrentPage()
    {
        return isset($_GET['page']) ? intval($_GET['page']) : 1;
    }

    private function generateArticles($resultgalleryforclient)
    {
        $articles = '';
        foreach ($resultgalleryforclient as $p) {
            $iganes = $p['image'];
            $imagePath = $this->getImagePath($iganes);


            $articles .= "<div class='col gallery'>
                        <a class='img-hover-zoom' href='$imagePath' data-lightbox='gallery'>
                                <div class='loading-container'>
                                    <div class='loading-spinner'></div>
                                </div>
                            <img src='$imagePath' alt='Imagen galleria' class='gallery-image'>
                        </a>
                        <div class='desc'>" . $p['descripcion'] . "</div>
                      </div>";

        }
        return $articles;
    }

    private function getImagePath($imageName)
    {
        $iganesWebp = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $imageName);
        $webpPath = "../imgGallery/webp/$iganesWebp";
        return file_exists($webpPath) ? $webpPath : "../imgGallery/$imageName";
    }

    private function generatePagination($currentPage, $totalPages)
    {
        $pagination = '<div class="pagination">';

        // Añadir el total de páginas como un input oculto
        $pagination .= '<input type="hidden" id="total-pages" value="' . $totalPages . '">';

        // Botón "Anterior"
        if ($currentPage > 1) {
            $pagination .= "<a href='#' class='page-link prev' data-page='" . ($currentPage - 1) . "'>❮ Anterior</a>";
        }

        // Mostrar algunas páginas
        if ($currentPage > 2) {
            $pagination .= "<a href='#' class='page-link' data-page='1'>1</a>";
            if ($currentPage > 3) {
                $pagination .= "<span>...</span>";
            }
        }

        for ($i = max(1, $currentPage - 1); $i <= min($totalPages, $currentPage + 1); $i++) {
            $activeClass = ($i == $currentPage) ? 'active' : '';
            $pagination .= "<a href='#' class='page-link $activeClass' data-page='$i'>$i</a>";
        }

        if ($currentPage < $totalPages - 1) {
            if ($currentPage < $totalPages - 2) {
                $pagination .= "<span>...</span>";
            }
            $pagination .= "<a href='#' class='page-link' data-page='$totalPages'>$totalPages</a>";
        }

        // Botón "Siguiente"
        if ($currentPage < $totalPages) {
            $pagination .= "<a href='#' class='page-link next' data-page='" . ($currentPage + 1) . "'>Siguiente ❯</a>";
        }

        // Formulario para ir a una página específica
        $pagination .= '
    <div class="goto-page">
        <form id="goto-page-form" onsubmit="return false;">
            <input type="number" id="goto-page-input" min="1" max="' . $totalPages . '" placeholder="Página" required>
            <button type="submit" id="goto-page-btn">Ir</button>
        </form>
    </div>';

        $pagination .= '</div>';

        return $pagination;
    }*/

    //:::::::::::::::General::::::::::::::::::::::::::::

/*    public function showgalleryforAll()
    {
        $resultgalleryforclient = $this->user->galleryforAll();
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
    }*/

    public function changeUserStatus($id, $status)
    {
        $this->user->setId($id);
        $this->user->setStatus($status);
        $results = $this->user->changeStatus();
        echo $results;
    }

    public function listsuscriptor()
    {
        $instanciaController = new Subscriber();
        $objetoConsulta = $instanciaController->listSuscriptor();
        echo json_encode($objetoConsulta);
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

/*if (isset($_POST['action']) && $_POST['action'] == 'isertimg') {
    $instanciaController = new UserController();
    $imageHandler = new ImageHandler();

    $invalidImages = [];
    $success = true;

    // Validar todas las immágenes antes de procesarlas
    foreach ($_FILES['files']['name'] as $i => $originalName) {
        if (!$imageHandler->validateImageFormat($originalName)) {
            $invalidImages[] = $originalName;
            $success = false;
        }
    }

    if (!$success) {
        $res['status'] = false;
        $res['msg'] = "
        Los siguientes archivos no son admitidos:\n
        * " . implode("\n* ", $invalidImages);
        $res['type'] = 'error';
        echo json_encode($res);
        exit;
    }

    // Procesar todas las imagenes
    foreach ($_FILES['files']['name'] as $i => $originalName) {
        $imagenTemp = $_FILES['files']['tmp_name'][$i];
        $random = rand(0, 99);
        $folder = __DIR__ . "/../imgGallery/webp/";
        $basename = pathinfo($originalName, PATHINFO_FILENAME);
        $imagenName = $random . date('YmdH') . $basename . '.webp';
        $img_path = $folder . $imagenName;

        // Convertir y optimizar la imagen a formato WebP
        $imageHandler->convertImageToWebp($imagenTemp, $img_path);

        // Insertar la imagen en la base de datos
        $instanciaController->addGallery($_POST['descripcion'], $_POST['users'], $imagenName);
    }

  $res['status'] = true;
  $res['msg'] = 'Galeria Agregado Correctamente';
  $res['type'] = 'success';
  echo json_encode($res);
}

if (isset($_GET['action']) && $_GET['action'] == 'listgallery') {
    $instanciaController = new UserController();
    $instanciaController->listGallery();
}

if (isset($_POST['action']) && $_POST['action'] == 'deletegallery') {
    $instanciaController = new UserController();

    $eliminarimage = $_SERVER["DOCUMENT_ROOT"] . "/admin/imgGallery/webp/" . $_POST['nameimage'];
    unlink($eliminarimage);

    $id = intval($_POST['id']);
    $instanciaController->deleteGallery($id);
}

if (isset($_GET['action']) && $_GET['action'] == 'showGalleryForClient') {
    $instanciaController = new UserController();
    $instanciaController->showClientGalleries($_GET['identgallery']);
}

/*
if (isset($_GET['action']) && $_GET['action'] == 'showGalleryForAll') {
    $instanciaController = new UserController();
    $instanciaController->showgalleryforAll();
}*/

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

        $instanciaController = new Subscriber($nombre, $telefono, $correo);
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