<?php

require_once __DIR__ . '/../model/userModel.php';
require_once __DIR__ . '/../helper/sessionHelper.php';
require_once __DIR__ . '/../helper/ImageHandler.php';

$session = new SessionHelper();
class GalleryController{

    private $user;

    public function __construct(){
        $this->user = new User();
    }

    public function addGallery($descripcion, $idcliente, $newname)
    {
        $this->user->setDescripcion($descripcion);
        $this->user->setIdcliente($idcliente);
        $this->user->setImage($newname);
        $gallery = $this->user->insertGallery();
        //$this->respondToAction($gallery, 'Galería agregada correctamente', 'No se pudo agregar la galería');
    }

    public function listGallery()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $itemsPerPage = isset($_GET['length']) ? (int)$_GET['length'] : 4;
    
        $totalItems = $this->user->countAllGalleries();
    
        $galleries = $this->user->getAllGalleries($page, $itemsPerPage);
    
        $response = [
            "draw" => isset($_GET['draw']) ? intval($_GET['draw']) : 1,
            "recordsTotal" => $totalItems,
            "recordsFiltered" => $totalItems, 
            "data" => $galleries
        ];
    
        echo json_encode($response);
    }
    


    public function deleteGallery($id)
    {
        $this->user->setIdgallery($id);
        $delete = $this->user->deleteGalleryById();
        $this->respondToAction($delete, 'Galería eliminada correctamente', 'No se pudo eliminar la galería');
    }


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
                            <img src='$imagePath' alt='Imagen galería' class='gallery-image'>
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

        if ($currentPage > 1) {
            $pagination .= "<a href='#' class='page-link prev' data-page='" . ($currentPage - 1) . "'>❮ Anterior</a>";
        }

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

        if ($currentPage < $totalPages) {
            $pagination .= "<a href='#' class='page-link next' data-page='" . ($currentPage + 1) . "'>Siguiente ❯</a>";
        }

        $pagination .= '</div>';

        return $pagination;
    }

    public function showgalleryforAll()
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
    }

    private function respondToAction($success, $successMessage, $failureMessage)
    {
        echo $success ? json_encode(['title' => 'Perfecto!', 'text' => $successMessage, 'icon' => 'success']) :
            json_encode(['title' => 'Noo!', 'text' => $failureMessage, 'icon' => 'error']);
    }

}

if (isset($_POST['action']) && $_POST['action'] == 'isertimg') {
    $instanciaController = new GalleryController();
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
    $instanciaController = new GalleryController();
    $instanciaController->listGallery();
}

if (isset($_POST['action']) && $_POST['action'] == 'deletegallery') {
    $instanciaController = new GalleryController();

    $eliminarimage = $_SERVER["DOCUMENT_ROOT"] . "/admin/imgGallery/webp/" . $_POST['nameimage'];
    unlink($eliminarimage);

    $id = intval($_POST['id']);
    $instanciaController->deleteGallery($id);
}

if (isset($_GET['action']) && $_GET['action'] == 'showGalleryForClient') {
    $instanciaController = new GalleryController();
    $instanciaController->showClientGalleries($_GET['identgallery']);
}

/**/
if (isset($_GET['action']) && $_GET['action'] == 'showGalleryForAll') {
    $instanciaController = new GalleryController();
    $instanciaController->showgalleryforAll();
}

