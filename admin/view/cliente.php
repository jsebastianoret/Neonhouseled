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

        <div class="row row-cols-1 row-cols-sm-2" id="products-container"></div>
        <div id="pagination-container"></div> <!-- Contenedor separado para la paginación -->
    </section>

</div>
<?php require_once "layout/foother.php";?>