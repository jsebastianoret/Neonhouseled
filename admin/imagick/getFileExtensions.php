<?php

// Función para obtener las extensiones de archivo y contar el total de archivos en un directorio
function getFileExtensionsAndCount($folder) {
    $files = glob("$folder/*.*"); // Obtén todos los archivos con cualquier extensión en el directorio
    $extensions = [];
    $fileCount = 0;

    foreach ($files as $file) {
        if (is_file($file)) { // Asegúrate de que sea un archivo y no una carpeta
            $fileCount++; // Incrementa el contador de archivos
            $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION)); // Obtén la extensión y conviértela a minúsculas
            if (!in_array($extension, $extensions)) {
                $extensions[] = $extension; // Agrega la extensión a la lista si no está ya
            }
        }
    }

    return [$extensions, $fileCount];
}

// Ruta de la carpeta original
$originalFolder = '../imgGallery';

// Obtén todas las extensiones de archivo y el número total de archivos en la carpeta
list($fileExtensions, $fileCount) = getFileExtensionsAndCount($originalFolder);

// Imprime las extensiones encontradas
echo "Extensiones de archivo encontradas en $originalFolder:<br>";
foreach ($fileExtensions as $ext) {
    echo ".$ext<br>";
}

// Imprime el número total de archivos
echo "<br>Número total de archivos en $originalFolder: $fileCount<br>";

?>
