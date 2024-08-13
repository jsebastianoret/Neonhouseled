<?php 
//require_once 'C:/xampp/htdocs/proyecto/Neonhouseled/admin2/config/db.php';
//require_once 'C:/xampp/htdocs/proyecto/Neonhouseled/admin2/app/controller/posteo.php';
//require_once 'C:/xampp/htdocs/proyecto/Neonhouseled/admin2/app/model/posteo.php';
//require_once 'C:/xampp/htdocs/proyecto/Neonhouseled/admin2/app/db/db.php';

//require_once '../../config/db.php';
//require_once '../controller/posteo.php';
//require_once '../model/posteo.php';
//require_once '../db/db.php';

//require_once '../../admin2/config/db.php';
//require_once '../../admin2/app/controller/posteo.php';
//require_once '../../admin2/app/model/posteo.php';
//require_once '../../admin2/app/db/db.php';
//require_once '../../admin2/app/utils/FileHelper.php';

//require_once '../../admin2/config/db.php';
//require_once '../../admin2/app/controller/posteo.php';
//require_once '../../admin2/app/model/posteo.php';
//require_once '../../admin2/app/db/db.php';
//require_once '../../admin2/app/utils/FileHelper.php';


require_once dirname(dirname(__DIR__)) . '/config/db.php';
require_once dirname(__DIR__) . '/controller/posteo.php';
require_once dirname(__DIR__) . '/model/posteo.php';
require_once dirname(__DIR__) . '/db/db.php';







function getBlogCat($categoria, $id) {
    $data = ControllerPosteo::getBlogCategoria($categoria, $id);
    $html = "";
    foreach ($data as $blog) {
        $html .= '<div class="otros-article">';
        $html .= '<img src="../../public/imagenes/imagesBlogBd/' . htmlspecialchars($blog['imagen_card']) . '" alt="Blog">';
        $html .= '<div class="otros-info">';
        $html .= '<a href="mediaBlogs' . htmlspecialchars($blog['id']) .'.php">';
        $html .= '<span>' . htmlspecialchars($blog['nombre_categoria']) . '</span>';
        $html .= '<h3>' . htmlspecialchars($blog['titulo']) . '</h3>';
        $html .= '</a>';
        $html .= '</div>';
        $html .= '</div>';
    }
    echo $html;
}