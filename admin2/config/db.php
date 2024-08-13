<?php
define('HOST', 'localhost');
define('NAME', 'ghxumdmy_NHLUser');
define('PASS', 'AQR-EvieoU)3');
define('DB', 'ghxumdmy_NeonHouseLed');
//Datos importantes

try {
    $conn = new PDO("mysql:host=" . HOST . ";dbname=" . DB, NAME, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}
?>
