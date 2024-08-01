<?php
session_start();
$_SESSION['servicio'] = 'FABRICACIÓN NEÓN';
$_SESSION['info'] = 'neon';
$_SESSION['imagen'] = 'NEON.webp';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Diseños de letreros y rótulos en Led y neón. Nuestro servicio personalizado y de calidad ayudará a que tu negocio destaque  ¡Contáctanos para conocer nuestro catálogo!" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QRZPWCXDM8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-QRZPWCXDM8');
    </script>
    <title>Letreros y Rótulos en LED Neon</title>
    <link rel="stylesheet" href="style.css" />
    <?php require_once "../layout/links.php" ?>
    <link rel="preload" href="../../public/css/shared/slider.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">

</head>

<style>
    .logos {
        display: block;
        /* Show the logos div */


    }

    #carouselExample {
        display: none;
    }

    /* Mobile view (override default styles with media query) */
    @media (max-width: 768px) {

        /* Adjust the breakpoint as needed */
        .logos {
            display: none;
            /* Hide the logos div on smaller screens */
        }

        /* Your other div (assuming it has a class) */
        #carouselExample {
            display: block;
            /* Show the other div on smaller screens */
        }
    }
</style>

<body>
    <?php require_once "../layout/header.php" ?>

    <main class="main__categoria">
        <h1 class="categoria1__titulo">
            <span class="restaurante">FABRICACIÓN NEON</span>
            <br>
            <span class="decoracion">DECORACIÓN Y REMODELACIÓN</span>


        </h1>
        <div class="blue-line"></div>
        <?php require_once "../layout/modal.php" ?>

        <div class="logos">
            <div class="logos-slide">
                <img src="../../public/imagenes/neon/FN-1.png" />
                <img src="../../public/imagenes/neon/FN-2.png" />
                <img src="../../public/imagenes/neon/FN-3.png" />
                <img src="../../public/imagenes/neon/FN-4.png" />
            </div>
        </div>

        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../public/imagenes/neon/AnyConv.com__F. NEON UNO.jpg.webp" class="d-block w-100"
                        alt="Decoración">
                </div>
                <div class="carousel-item">
                    <img src="../../public/imagenes/neon/AnyConv.com__F. NEON DOS.jpg.webp" class="d-block w-100"
                        alt="Remodelación">
                </div>
                <div class="carousel-item">
                    <img src="../../public/imagenes/neon/AnyConv.com__F. NEON TRES.jpg.webp" class="d-block w-100"
                        alt="Diseño Interior">
                </div>
                <div class="carousel-item">
                    <img src="../../public/imagenes/neon/AnyConv.com__F. NEON CUATRO.jpg.webp" class="d-block w-100"
                        alt="Diseño Exterior">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="blue-line"></div>
        <div class="container-main">
            <div class="text1">
                <div class="logo-nhl">
                </div>
                <h2 class="welcom__item__titulo">ARQUITECTURA Y DECORACION COMERCIAL</h2>
                <h3 class="welcom__item__text"> SOMOS EXPERTOS EN LA RENOVACIÓN DEL DISEÑO
                    INTERIOR, BRINDANDO SOLUCIONES
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
                <a class="action-button"
                    href="https://api.whatsapp.com/send?phone=51936910425&text=Apoyo%20sobre%20mi%20proyecto%20de%20Fabricación%20Neon">CREA
                    AQUÍ TU DISEÑO</a>
            </div>
        </div>

        <br>
        <div class="galeria">
            <div class="galeria-imagenes">
                <?php
                if (isset($_COOKIE["user"])) {
                    require_once "../layout/funciones.php";
                    mostrar_imagenes("No hay imagen");
                }
                ?>
            </div>

        </div>
    </main>

    <?php require_once "../layout/foother.php" ?>
    <script defer type="text/javascript" src="../../public/js/modal.js"></script>

    <script>
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector(".logos").appendChild(copy);
    </script>

    <script defer>
        // 360 viewer
        var PSV = new PhotoSphereViewer({
            panorama: '../../public/imagenes/Imagenes 360/BAR/2.webp',
            container: 'photosphere',
            navbar: 'fullscreen',
            default_fov: 65,
            mousewheel: false,
        });
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>