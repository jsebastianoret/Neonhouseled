<?php
define('HOST', 'localhost');
define('NAME', 'root');
define('PASS', '');
define('DB', 'ghxumdmy_neonhouseled');
//Datos importantes

try {
    $conn = new PDO("mysql:host=" . HOST . ";dbname=" . DB, NAME, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}
?>