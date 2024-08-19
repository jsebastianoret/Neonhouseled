<?php
require_once '../controller/staterController.php';
$redirect = new StaterController();
if(empty($_SESSION['username'])){

    $redirect->redireccionar();    
    
}
require_once "layout/header.php";
?>

<div class="container">
    <h2>Bienvenido Usuario: <?php echo  $_SESSION['username'];?></h2>
</div>
<input type="hidden" id="identgallery" value="<?php echo  $_SESSION['username'];?>">

<div class="container">
    <section class="right-section">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3" id="products-container"></div>
        <div id="pagination-container"></div> <!-- Contenedor separado para la paginación -->
    </section>
</div>

<link href="../public/lightbox/dist/css/lightbox.css" rel="stylesheet">
<link href="../public/css/gallery_paginator.css" rel="stylesheet">
<script src="../public/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>

<?php require_once "layout/foother.php";?>