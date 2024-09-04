<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google tag (gtag.js) -->
    <!--
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QRZPWCXDM8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-QRZPWCXDM8');
    </script>-->
    <title>Proyectos destacados</title>

    <link rel="shortcut icon" href="../ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/proyectos.css">
<style>
    .d-none{
        display:none;
    }
</style>
</head>
<body>
    <h1 class="d-none">Proyectos - Neo House Led</h1>
<?php require_once "layout/header.php" ?>   
    
    <main>
        <section class="pry-dest-container">
            <h2>Proyectos destacados</h2>
            <div class="pry-dest-video">
                <figure class="video-container">
                        <a href="https://www.youtube.com/watch?v=eklZLdBx9WE&ab_channel=NEONHOUSELED" target="_blank">
                            <img src="../public/imagenes/proyectos/video_pry.webp" alt="Imagen del selvicio">
                        </a>
                </figure>
            </div>
            <p>"Tendencia, vanguardia y novedades"</p>
        </section>
        <section class="pry-nuevos-container">
            <h2>Proyectos nuevos</h2>
            <div class="pry-nuevos-desc">
                <div class="pry">
                    <figure class="img-container">
                        <a href="https://youtu.be/qU08CNcnQhA" target="_blank">
                            <img src="../public/imagenes/proyectos/1.webp" alt="Imagen del selvicio">
                        </a>
                    </figure>
                    <p>Decoración e iluminación <br>
                    de interiores y exteriores</p>
                </div>
                <div class="pry">
                    <figure class="img-container">
                        <a href="https://youtu.be/3QMkxPf7H3U" target="_blank">
                            <img src="../public/imagenes/proyectos/2.webp" alt="Imagen del selvicio">
                        </a>
                    </figure>
                    <p>Decoración con pantallas <br>
                    LED</p>
                </div>
            </div>
        </section>
    </main>
    <br>
    <br>
    <br>
    <?php require_once "layout/foother.php" ?>
    </body>
</html>