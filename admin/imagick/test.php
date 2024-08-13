<?php

// Función para crear la carpeta si no existe
function createFolderIfNeeded($folder) {
    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
    }
}

// Ruta de la carpeta original y nueva carpeta WebP ajustadas a la ubicación de test.php
$originalFolder = '../imgGallery'; // Un nivel arriba, luego en imgGallery
$webpFolder = '../imgGallery/webp'; // Un nivel arriba, luego en imgGallery/webp

// Crea la carpeta webp si no existe
createFolderIfNeeded($webpFolder);
// Carga todas las imágenes JPG y PNG en la carpeta original
$images = glob("$originalFolder/*.{jpg,jpeg,png}", GLOB_BRACE);

// Verifica si la extensión Imagick está habilitada
if (extension_loaded('imagick')) {
    foreach ($images as $image) {
        try {
            $imagick = new Imagick($image);
            $imagick->setImageFormat('webp');

            // Extrae el nombre del archivo y crea la ruta de destino
            $filename = pathinfo($image, PATHINFO_FILENAME);
            $webpPath = "$webpFolder/$filename.webp";

            // Guarda el archivo en formato WebP en la nueva ubicación
            $imagick->writeImage($webpPath);
            $imagick->clear();
            $imagick->destroy();

            echo "Convertido: $webpPath <br>";
        } catch (Exception $e) {
            echo 'Error al convertir: ',  $e->getMessage(), "\n";
        }
    }
} else {
    echo 'La extensión Imagick no está habilitada.';
}
?>
