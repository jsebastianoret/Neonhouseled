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

        <div id="products-container">

        </div>

    </section>

</div>
<?php require_once "layout/foother.php";?>