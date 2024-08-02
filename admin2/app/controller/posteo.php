<?php

class ControllerPosteo{
    public static function get(){
        return ModelPosteo::get();
    }
    public static function getBlog(){
        return ModelPosteo::getBlog();
    }

    //Frank
    public static function getBlogCategoria($categoria, $id){
        return ModelPosteo::getBlogCat($categoria, $id);
    }

    public static function add() {
        if (
            isset($_POST['nombre_categoria']) && isset($_POST['titulo']) && 
            isset($_POST['resumen']) && isset($_POST['subtitulo']) && 
            isset($_POST['contenido']) && isset($_FILES['imagen_principal']) && 
            isset($_FILES['imagen_secundaria']) && isset($_POST['videoBlog']) && 
            isset($_POST['fecha'])
        ) {
            // Creamos una variable que contenga la ruta donde se cargaran las imagenes
            $targetDir = "../../../public/imagenes/imagesBlogBd/";
            //Creamos unas variables donde concatenaremos la ruta + el nombre del archivo carga, OJ SOLO EL NOMBRE "name"
            $imagen_principal = $targetDir . basename($_FILES["imagen_principal"]["name"]);
            $imagen_secundaria = $targetDir . basename($_FILES["imagen_secundaria"]["name"]);

            //APARTE DE TODO, creamos otra variable para las imagenes que llamaremos desde los archivos nuevos creado automaticamente
            $imagen_principal_2 = basename($_FILES["imagen_principal"]["name"]);
            $imagen_secundaria_2 = basename($_FILES["imagen_secundaria"]["name"]);



            //$_FILES["imagen_principal"]["tmp_name"] obtiene la ruta temporal donde se guarda la imagen en el servidor después de la carga.
            //move_uploaded_file() mueve la imagen desde su ubicación temporal a la ubicación final especificada por $imagen_principal.
            move_uploaded_file($_FILES["imagen_principal"]["tmp_name"], $imagen_principal);
            move_uploaded_file($_FILES["imagen_secundaria"]["tmp_name"], $imagen_secundaria);

            $lista = [
                $_POST['nombre_categoria'], $_POST['titulo'], $_POST['resumen'],
                $_POST['subtitulo'], $_POST['contenido'], $imagen_principal,
                $imagen_secundaria, $_POST['videoBlog'], $_POST['fecha']
            ];
            $respuesta = ModelPosteo::add(
                "posting_blog",
                ["nombre_categoria", "titulo", "resumen", "subtitulo", "contenido", "imagen_principal", "imagen_secundaria", "videoBlog", "fecha"],
                $lista
            );

            if ($respuesta[0] === null) {
                self::createBlogFile($respuesta[1]->insert_id, $lista, $imagen_principal_2, $imagen_secundaria_2, 'ADD');
                return json_encode(['status' => true, 'message' => 'Datos enviados correctamente']);
            } else {
                return json_encode(['status' => false, 'message' => 'Los datos no se han enviado']);
            }
        } else {
            return json_encode(['status' => false, 'message' => 'Parámetros incorrectos']);
        }
    }

    // Funcion que creará un arhcivo .php sobre el blog creado, lo invocaremos dentro de la funcion ADD() o UPDATE() para realizar los cambios
    private static function createBlogFile($id, $valores, $img1, $img2, $operationType) {

        $fileName = "../../../vistas/blogs/mediaBlogs{$id}.php";
        if ($operationType === 'UPDATE' && file_exists($fileName)) {
            unlink($fileName); // Eliminar el archivo existente
        }

        $categoria = $valores[0];
        $titulo = $valores[1];
        $resumen = $valores[2];
        $subtitulo = $valores[3];
        $contenido = $valores[4];
        $imagen_principal = $img1;
        $imagen_secundaria = $img2;
        $videoBlog = $valores[7];
        $fecha = $valores[8];

        // Extraer el ID del video de la URL
        parse_str(parse_url($videoBlog, PHP_URL_QUERY), $query_params);
        $video_id = $query_params['v'];
        // Construir la URL de incrustación
        $embed_url = "https://www.youtube.com/embed/" . $video_id;

        $fileContent = <<<HTML
        <?php
        session_start();
        ?>
        <!DOCTYPE html>
        <html lang="es"> 
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>$titulo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

            <link rel="stylesheet" href="../../public/css/all_blog.css">
            <?php require_once "../layout/links.php" ?>
        </head> 
        <body>
            <?php require_once "../layout/header.php" ?>
            <script>
                // Función para calcular la diferencia en días
                function calcularDiasDiferencia(fechaPublicacion) {
                    const fechaActual = new Date();
                    const fechaPub = new Date(fechaPublicacion);
                    const diferenciaMs = fechaActual - fechaPub;
                    const diferenciaDias = Math.floor(diferenciaMs / (1000 * 60 * 60 * 24));
                    return diferenciaDias;
                }
                // Función para actualizar el texto en el segundo span
                function actualizarTextoFechaRelativa() {
                    const fechaPublicacionStr = document.getElementById('f').textContent.replace('Publicado: ', '');
                    const diasDiferencia = calcularDiasDiferencia(fechaPublicacionStr); 
                    const textoFechaRelativa = diasDiferencia === 0 ? 'hoy' :
                                    diasDiferencia === 1 ? 'hace 1 día' :
                                    'hace ' + diasDiferencia + ' días';

                    document.getElementById('hoy').textContent = textoFechaRelativa;
                }
                document.addEventListener('DOMContentLoaded', actualizarTextoFechaRelativa);
            </script>
            <div class="blog-post">
                <div class="blog-container">
                    <span class="categoria">Categoría: $categoria</span>
                    <header class="blog-header">
                        <h1>$titulo</h1>
                        <div class="blog-banner">
                            <img src="../../public/imagenes/imagesBlogBd/$imagen_principal" alt="Imagen Principal" class="imgprin">
                            <div class="text-box">
                                <p>$resumen</p>
                            </div>
                        </div>
                    </header>
                    <main class="blog-main">
                        <article class="blog-article">
                            <hr>
                            <div class="meta">
                                <span id="f">Publicado: $fecha</span>
                                <span id="hoy"></span>
                            </div>
                            <hr>
                            <div class="neon-logo">
                                <img src="../../public/imagenes/logo-black.png" alt="Logo" class="logo-blog">
                                <span class="logo-span">By NeonHouseLed</span>
                            </div>
                            <h2>$subtitulo</h2>
                            <div class="blog-body">
                                <img src="../../public/imagenes/imagesBlogBd/$imagen_secundaria" alt="Imagen Secundaria">
                                <p>$contenido</p>
                            </div>
                            <div class="container-video">
                                <iframe src="$embed_url" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <br>
                            <br>
                            <hr>
                            <br>
                            <br>
                            <hr>
                            <br>
                            <br>
                        </article>
                    </main>
                    <div class="otros">
                        <div class="container-otros">
                            <h2>Otros Blogs</h2>
                            <a href="">Ver Todos</a>
                        </div>
                        <div class="container-otros-body">
                            <?php require_once "../../admin2/app/trigger/autoBlog.php" ?>
                            <?php getBlogCat('$categoria', $id) ?>
                        </div>
                    </div>
                </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <?php require_once "../layout/foother.php" ?>
        <!-- <script src="../js/script.js"></script> -->
</body>
</html>
HTML;
        
    file_put_contents($fileName, $fileContent);


    }



    public static function getMost(){
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        return ModelPosteo::getMost($id); 
    }

    public static function delete(){

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $imgPrincipal =   $_GET['image1'];
            $imgSecundaria  = $_GET['image2'];

            // Eliminar las imágenes
            self::deleteImg($imgPrincipal, $imgSecundaria );
            // Eliminar el archivo creado automáticamente
            self::deleteFile("../../../vistas/blogs/mediaBlogs{$id}.php");

            
 
            // Eliminar el post de la base de datos
            return ModelPosteo::delete($id);
        }  
    }


    public static function deleteFile($filePath) {
        if (file_exists($filePath)) {
            unlink($filePath);
            
        }
    }

    public static function deleteImg($image1, $image2) {
        if (file_exists($image1)) {
            unlink($image1);
        } 

        if (file_exists($image2)) {
            unlink($image2);
        } 
    }

    public static function update() {
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $nombre_categoria = isset($_POST['nombre_categoria']) ? $_POST['nombre_categoria'] : null;
        $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
        $resumen = isset($_POST['resumen']) ? $_POST['resumen'] : null;
        $subtitulo = isset($_POST['subtitulo']) ? $_POST['subtitulo'] : null;
        $contenido = isset($_POST['contenido']) ? $_POST['contenido'] : null;
        //Se comprueba si se ha cargado una nueva imagen principal/secundaria
        //Si es así, se forma la ruta completa para la imagen usando el directorio de destino y el nombre del archivo
        //Si no se ha cargado una nueva imagen, la variable se establece en null
        $videoBlog = isset($_POST['videoBlog']) ? $_POST['videoBlog'] : null;

        //Cogemos la ruta antigua, si no se cambio, sera null, pero si cambio la imagen, nos dara la antigua ruta :D
        $oldImage1 = isset($_POST['imagen_principal_antigua']) ? $_POST['imagen_principal_antigua'] : null;
        $oldImage2 = isset($_POST['imagen_secundaria_antigua']) ? $_POST['imagen_secundaria_antigua'] : null;

        // Si se ha cargado una nueva imagen principal, se mueve desde la ubicación temporal a la ubicación final
        $imagen_principal = null;
        if (isset($_FILES['imagen_principal']) && $_FILES['imagen_principal']['name'] != '') {
            $imagen_principal = "../../../public/imagenes/imagesBlogBd/" . basename($_FILES["imagen_principal"]["name"]);
            move_uploaded_file($_FILES["imagen_principal"]["tmp_name"], $imagen_principal);
            self::deleteImg($oldImage1, $oldImage2 );
        } elseif (isset($_POST['imagen_principal'])) {
            $imagen_principal = $_POST['imagen_principal'];
        }
    
        $imagen_secundaria = null;
        if (isset($_FILES['imagen_secundaria']) && $_FILES['imagen_secundaria']['name'] != '') {
            $imagen_secundaria = "../../../public/imagenes/imagesBlogBd/" . basename($_FILES["imagen_secundaria"]["name"]);
            move_uploaded_file($_FILES["imagen_secundaria"]["tmp_name"], $imagen_secundaria);
            self::deleteImg($oldImage1, $oldImage2 );
        } elseif (isset($_POST['imagen_secundaria'])) {
            $imagen_secundaria = $_POST['imagen_secundaria'];
        }

        $lista = [
            $nombre_categoria, $titulo, $resumen, $subtitulo, $contenido, $imagen_principal, $imagen_secundaria, $videoBlog
        ]; 

        $respuesta = ModelPosteo::update(
            $id, $nombre_categoria, $titulo, $resumen, $subtitulo, $contenido, $imagen_principal, $imagen_secundaria, $videoBlog
        );

        if ($respuesta) {
            self::createBlogFile($id, $lista, $imagen_principal, $imagen_secundaria, 'UPDATE');
            return json_encode(['status' => true, 'message' => 'Datos actualizados correctamente']);
        } 
            else{
                return json_encode(['status' => false, 'message' => 'Los datos no se han actualizado']);
        }


    }
}