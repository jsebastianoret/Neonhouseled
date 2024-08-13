<?php

//Este script compara los archivos de imgGallery y webp , si existe algúna
//imagen dentro de imgGallery que no esté en webp la convertirá del formato
//que esté (.jpg,.png,etc) al formato .webp

// Función para obtener los nombres de archivo sin la extensión y el path
function getFilenames($folder) {
    // Lista de extensiones que queremos buscar (en ambas versiones, minúscula y mayúscula)
    $extensions = ['jpg', 'jpeg', 'png', 'webp', 'JPG', 'JPEG', 'PNG', 'WEBP'];

    $files = [];
    foreach ($extensions as $ext) {
        $files = array_merge($files, glob("$folder/*.$ext"));
    }

    $filenames = [];
    foreach ($files as $file) {
        $filenames[] = pathinfo($file, PATHINFO_FILENAME);
    }

    return $filenames;
}

// Rutas de las carpetas
$originalFolder = '../imgGallery';
$webpFolder = '../imgGallery/webp';

// Obtén los nombres de los archivos en ambas carpetas
$originalFiles = getFilenames($originalFolder);
$webpFiles = getFilenames($webpFolder);

// Encuentra los archivos que están en la carpeta original pero no en la carpeta webp
$missingFiles = array_diff($originalFiles, $webpFiles);

// Función para convertir imágenes a WebP
function convertToWebP($source, $destination) {
    $imagick = new Imagick($source);

    // Establece un tamaño máximo (por ejemplo, 8000 píxeles)
    $maxWidth = 8000;
    $maxHeight = 8000;

    // Si la imagen excede el tamaño máximo, redimensionarla
    if ($imagick->getImageWidth() > $maxWidth || $imagick->getImageHeight() > $maxHeight) {
        $imagick->resizeImage($maxWidth, $maxHeight, Imagick::FILTER_LANCZOS, 1, true);
    }

    $imagick->setImageFormat('webp');
    $imagick->writeImage($destination);
    $imagick->clear();
    $imagick->destroy();
}
// Imprime los archivos que faltan y los convierte
if (empty($missingFiles)) {
    echo "No hay archivos faltantes. Todo está convertido a WebP.";
} else {
    echo "Archivos que faltan convertir a WebP y serán convertidos:<br>";
    foreach ($missingFiles as $file) {
        // Encuentra el archivo original con la extensión correcta
        $sourceFile = glob("$originalFolder/$file.{jpg,jpeg,png,PNG,JPG,JPEG,PNG}", GLOB_BRACE)[0];
        $destinationFile = "$webpFolder/$file.webp";

        // Convierte la imagen a WebP
        convertToWebP($sourceFile, $destinationFile);

        echo "$file convertido a WebP.<br>";
    }
}

?>
