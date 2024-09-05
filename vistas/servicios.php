<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon House Led-Servicios</title>
    <!-- Google tag (gtag.js) -->
    <!--
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QRZPWCXDM8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-QRZPWCXDM8');
    </script>-->
    <link rel="shortcut icon" href="../ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/shared/categoria.css">
    <style>.h1none{position:absolute; z-index:-100;}</style>
</head>
<body>
    <h1 style="display:none">SERVICOS - NEON HOUSE LED</h1>
<?php require_once "layout/header.php" ?>
    <main class="main__categoria">
        <h2 class="categoria1__titulo ">SERVICIOS</h2>
        <div class="categoria1__section">
            <figure class="categoria1__imagen">
                <a href="servicios/arquitectura-comercial-decoracion-remodelacion-iluminacion-diseño.php">
                <img class="categoria1__img" id="imagen_5" src="../public/imagenes/servicios/Arquitectura_comercial.webp" alt="Imagen del selvicio" width="507" height="300">
            </a>
                <figcaption class="categoria1__desc">ARQUITECTURA COMERCIAL</figcaption>
            </figure>
            <figure class="categoria1__imagen">
                <a href="servicios/comercial-decoracion-remodelacion-iluminacion-diseño.php">
                <img class="categoria1__img" id="imagen_1" src="../public/imagenes/servicios/Decoracion_y_remodelacion.webp" alt="Imagen del selvicio" width="507" height="300"></a>
                <figcaption class="categoria1__desc">DECORACIÓN Y REMODELACIÓN</figcaption>
            </figure>
            <figure class="categoria1__imagen">
                <a href="servicios/neon.php">
                <img class="categoria1__img" id="imagen_2" src="../public/imagenes/servicios/Fabricacion_Neon.webp" alt="Imagen del selvicio" width="507" height="300"></a>
                <figcaption class="categoria1__desc">FABRICACIÓN NEON</figcaption>
            </figure>
            <figure class="categoria1__imagen">
                <a href="servicios/mobiliaria.php">
                <img class="categoria1__img" id="imagen_7" src="../public/imagenes/servicios/Fabricacion_Mobiliaria.webp" alt="Imagen del selvicio" width="507" height="300"></a>
                <figcaption class="categoria1__desc">FABRICACIÓN MOBILIARIA</figcaption>
            </figure>
            <figure class="categoria1__imagen">
                <a href="servicios/luminosos.php">
                <img class="categoria1__img" id="imagen_4" src="../public/imagenes/servicios/Letreros_Luminosos.webp" alt="Imagen del selvicio" width="507" height="300"></a>
                <figcaption class="categoria1__desc">LETREROS LUMINOSOS</figcaption>
            </figure>
            <figure class="categoria1__imagen">
                <a href="servicios/led.php">
                <img class="categoria1__img" id="imagen_3" src="../public/imagenes/servicios/Paneles_Led.webp" alt="Imagen del selvicio" width="507" height="300">
            </a>
                <figcaption class="categoria1__desc">PANELES LED</figcaption>
            </figure>
            </div>
    </main>
<?php require_once "layout/foother.php" ?>
</body>
</html>