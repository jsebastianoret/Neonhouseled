<?php 
    $consulta="Consulta General";
    if(isset($_GET["v"]))
    {
        if($_GET["v"] != null)
        {
            $consulta = base64_decode($_GET["v"]);
        }
    }
    if($_SESSION['categoria']){
        $respuesta = $_SESSION['categoria'];
    } else if ($_SESSION['servicio']){
        $respuesta = $_SESSION['servicio'];
    } else {
        $respuesta = '';
    }
?>
<div class="container-main">
    <div class="text1">
        <div class="logo-nhl">
        </div>
        <h2 class="welcom__item__titulo">ARQUITECTURA Y DECORACION COMERCIAL</h2>
        <h3 class="welcom__item__text"> SOMOS EXPERTOS EN LA RENOVACIÓN DEL DISEÑO
            INTERIOR DE <?= $respuesta ?>, BRINDANDO SOLUCIONES
            PERSONALIZADAS QUE CONVIERTEN ESPACIOS COMUNES
            EN ENTORNOS VIBRANTES Y MEMORABLES</h3>
        <h3 class="welcom__item__contacto">¡CONTACTA HOY MISMO NUESTRO
            SERVICIO DE PRIMER NIVEL!</h3>
    </div>
    <div class="curvas">
        <section class="curved-green"></section>
        <section class="curved-white"></section>
    </div>
    <div class="text2">
    <p class="action-title">ATRÉVETE CON NHL A <br>
        DECORAR TU LOCAL</p>
        <button class="action-button" id="openModalButton">CONOCE NUESTRO CATÁLOGO</button>
        <a class="action-button" href="https://api.whatsapp.com/send?phone=51936910425&text=Apoyo%20sobre%20mi%20proyecto%20de%20<?= $respuesta ?>">CREA AQUÍ TU DISEÑO</a>
    </div>
</div>