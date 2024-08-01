<?php
if (!isset($_GET['username']) || !isset($_GET['password']) || !isset($_GET['type'])) {
    echo 'No se han enviado los parámetros necesarios';
    exit;
} else if ($_GET['username'] != 'prueba123' || $_GET['password'] != '123456') {
    echo 'Usuario o contraseña incorrectos';
    exit;
} else {
    header('Location: public/ui.m3u');
}
?>