<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Neon House Led</title>
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <link rel="shortcut icon" href="ico.ico" type="image/x-icon">
        <meta name="description" content="Empresa dedicada al diseño de interiores y remodelación de locales comerciales u hogares, contando con los mejores materiales de decoración  y comunicación."/>
        <meta name="keywords" content="Diseño, Remodelación, Decoracion, interiores, exteriores">
        <meta name="robots" content="index, all, follow">
        <meta itemprop="telephone" content="936910425">

        <!-- CSS crítico -->
        <style>
            @font-face {
                font-family: 'Proxima-Nova-SemiBold';
                src: url('public/fuentes/woff/ProximaNova-SemiBold.woff2') format('woff2'),
                url('public/fuentes/woff/ProximaNova-SemiBold.woff') format('woff');
                font-display: swap;
            }
            @font-face {
                font-family: 'Proxima-Nova-Bold';
                src: url('public/fuentes/woff/ProximaNova-Bold.woff2') format('woff2'),
                url('public/fuentes/woff/ProximaNova-Bold.woff') format('woff');
                font-display: swap;
            }
            @font-face {
                font-family: 'Proxima-Nova-Regular';
                src: url('public/fuentes/woff/ProximaNova-Regular.woff2') format('woff2'),
                url('public/fuentes/woff/ProximaNova-Regular.woff') format('woff');
                font-display: swap;
            }
            @font-face {
                font-family: 'Proxima-Nova-Regular';
                src: url('public/fuentes/woff/ProximaNova-Light.woff2') format('woff2'),
                url('public/fuentes/woff/ProximaNova-Light.woff') format('woff');
                font-display: swap;
            }

            .hero-container{
                width:100%;
                height:600px;
                display:flex;
                justify-content:center;
                align-items:center;
                position:relative
            }
            .hero-container .title-hero-container{
                position:absolute;
                z-index:50;
                left:40px;
                bottom:80px
            }
            .hero-container .title-hero-container p{
                padding:5px 10px;
                color:white;
                font-size:52px;
                text-transform:uppercase;
                font-family:'Proxima-Nova-SemiBold';
                background-color:rgba(0,0,0,.5);
                background-blend-mode:soft-light
            }
            .hero-container #slider{
                overflow:hidden;
                height:600px;
                width:100%
            }

            .hero-container .img-container{
                width:calc(100% / 4);
                height:inherit;
                object-fit:cover;
                position:relative;
                float:left
            }
            .hero-container .img-container img{
                width:100%;
                height:inherit;
                object-fit:cover
            }

            .carousel_slide{
                width:100%;
                height:600px;
                background-image:url('public/imagenes/index/sliders/slider1.webp');
                background-repeat:no-repeat;
                background-size:cover;
                position:relative;
                animation:slide_animation 44s infinite ease-in
            }

            @keyframes slide_animation{
                25%{
                    background-image:url('public/imagenes/index/sliders/slider2.webp')
                }
                50%{
                    background-image:url('public/imagenes/index/sliders/slider3.webp')
                }
                75%{
                    background-image:url('public/imagenes/index/sliders/slider4.webp')
                }
            }

            /*SOBRE - NOSOTROS VIDEO */
            #myVideo::-webkit-media-controls {
                display: none;
            }/* Estilos generales para la sección */
            .about-us {
                padding: 80px 0;
                background: #f4f4f4;
            }

            .content-wrapper {
                max-width: 1200px;
                margin: 0 auto;
                display: flex;
                align-items: center;
                gap: 20px;
                padding: 0 20px;
            }

            .video-container {
                flex: 1;
                position: relative;
                border-radius: 15px;
                overflow: hidden;
            }

            .video_index {
                width: 100%;
                height: auto;
                border-radius: 15px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            }

            .text-container {
                flex: 1;
                padding: 20px;
                background: linear-gradient(135deg, #809c95, #7bb4fe); /* Color degradado */
                border-radius: 15px;
                color: #fff;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            }

            .about-us-title {
                font-size: 2rem;
                margin-bottom: 20px;
                font-family: 'Poppins', sans-serif;
            }

            .text-container p {
                font-size: 1rem;
            }

            .about-us .about-us-content .video-container a img{
                transform:scale(1);
                transition:.8s
            }
            .about-us .about-us-content .video-container a img:hover{
                transform:scale(1.3)
            }
            .about-us .about-us-content .description-container{
                width:50%;
                height:100%;
                padding:0 20px;
                font-family:'Proxima-Nova-Regular';
                font-size:16px;
                color:#494949;
                line-height:30px;
                text-align:justify
            }

            /* Estilos responsivos */

            @media (max-width: 768px) {
                .content-wrapper {
                    flex-direction: column;
                }
                .video-container, .text-container {
                    width: 100%;
                    height: auto;
                }
                .text-container {
                    padding-top: 20px;
                }
                .hero-container{
                    height:400px;
                    padding-top:80px
                }
                .hero-container .title-hero-container{
                    left:20px;
                    bottom:20px
                }
                .hero-container .title-hero-container p{
                    padding:5px 10px;
                    font-size:42px
                }

                .about-us .about-us-content .video-container{
                    width:100%;
                    height:initial
                }
                .about-us .about-us-content .description-container{
                    width:100%;
                    height:auto;
                    padding:0;
                    padding-top:20px
                }
            }

            @media (max-width: 576px) {
                .hero-container{
                    height:350px
                }
                .hero-container .title-hero-container{
                    width:calc(100% - 25px);
                    left:10px;
                    bottom:10px
                }
                .hero-container .title-hero-container p{
                    padding:5px;
                    font-size:24px;
                }
                .carousel_slide{
                    height:450px
                }
                .about-us .about-us-title{
                    font-size:36px
                }
                .video_index {
                    content: url("https://www.neonhouseled.com/public/imagenes/inicioM/video_indexM.webp") !important;
                    width: 100% !important;
                    height: 100% !important;
                    display: block !important;
                    margin: auto !important;
                }
            }

            @media screen and (max-width:320px){
                width:calc(100% - 20px)
            }


        </style>

        <!-- Cargar el resto del CSS de forma diferida -->

        <link rel="preload" href="public/fuentes/woff/ProximaNova-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
        <link rel="preload" href="public/fuentes/woff/ProximaNova-SemiBold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
        <link rel="preload" href="public/fuentes/woff/ProximaNova-Light.woff2" as="font" type="font/woff2" crossorigin="anonymous">
        <link rel="preload" href="public/fuentes/woff/ProximaNova-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
        <link rel="preload" href="public/imagenes/index/sliders/slider1.webp" as="image">
        <link rel="preload" href="public/imagenes/index/sliders/slider2.webp" as="image">

        <link rel="preload" href="public/bootstrap/bootstrap.min.css" as="style" onload="this.rel='stylesheet'">
        <link rel="preload" href="public/css/shared/header.css" as="style" onload="this.rel='stylesheet'"/>


        <link rel="stylesheet" href="public/css/shared/categoria_index.css">
        <link rel="stylesheet" href="public/css/shared/interactiveCards.css">
        <link rel="stylesheet" href="public/css/shared/auspicio.css">
        <link rel="stylesheet" href="public/css/carousel-logos-main-page.css">
        <link rel="stylesheet" href="public/css/shared/footer.css">

        <noscript>
            <link rel="stylesheet" href="public/bootstrap/bootstrap.min.css">
            <link rel="stylesheet" href="public/css/shared/header.css">
        </noscript>

        <!--Google tag (gtag.js)-->
        <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-QRZPWCXDM8"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-QRZPWCXDM8');
        </script>-->
    </head>
    <body>
        <h1 style="display:none">Diseñando y creando espacios ideales</h1>
        <?php require_once "vistas/layout/header.php" ?>
        <div class="hero-container">
            <div id="slider">
                <div id="carouselExampleControls" class="carousel_slide" data-ride="carousel">
                </div>
            </div>
            <div class="title-hero-container">
                <p>Diseñando y <br> creando espacios ideales</p>
            </div>
        </div>
        <section class="about-us">
            <div class="content-wrapper">
                <div class="video-container">
                    <video class="video_index" autoplay muted loop>
                        <source src="public/imagenes/index/video_2.webm" type="video/webm">
                        <source src="public/imagenes/index/index-2.h264" type="video/mp4">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                </div>
                <div class="text-container">
                    <h2 class="about-us-title">¿Quiénes somos?</h2>
                    <p>En Neon House Led, somos expertos en decoración y diseño de interiores. Nuestra empresa se dedica a la fabricación, importación
                        y distribución de letreros y anuncios publicitarios. Ofrecemos soluciones creativas y tecnológicas para superar las expectativas
                        de nuestros clientes a nivel nacional e internacional.</p>
                </div>
            </div>
        </section>

        <section class="quote">
            <h2 class="quote-title">Creamos los mejores espacios en todos los rubros</h2>
            <a href="vistas/contacto.php" class="quote-link">Cotiza aquí</a>
        </section>
        <section class="services">
        <h2 class="services-title">Servicios</h2>
        <div class="services-items-container">
            <div class="services-item">
        
                <a href="vistas/servicios/arquitectura-comercial-decoracion-remodelacion-iluminacion-diseno.php"><figure class="img-item-container">
                        <img loading="lazy" src="public/imagenes/index/arquitectura_comercial.webp" alt="Alquitectura comercial">
                    </figure></a>
                <h3>Arquitectura comercial</h3>
            </div>
            <div class="services-item">
                <a href="vistas/servicios/mobiliaria.php"><figure class="img-item-container">
                        <img loading="lazy" src="public/imagenes/index/fabricacion_mobiliaria.webp" alt="Fabricación mobiliaria">
                    </figure></a>
                <h3>Fabricación mobiliaria</h3>
            </div>
            <div class="services-item">
                
                <a href="vistas/servicios/comercial-decoracion-remodelacion-iluminacion-diseno.php"><figure class="img-item-container">
                        <img loading="lazy" src="public/imagenes/index/decoracion_y_remodelacion.webp" alt="Decoración_y_remodelación">
                    </figure></a>
                <h3>Decoración y remodelación</h3>
            </div>
            <div class="services-item">
                <a href="vistas/servicios/neon.php"><figure class="img-item-container">
                        <img loading="lazy" src="public/imagenes/index/fabricacion_neon.webp" alt="Fabricación neon">
                    </figure></a>
                <h3>Fabricación neón</h3>
            </div>
            <div class="services-item">
                <a href="vistas/servicios/luminosos.php"><figure class="img-item-container">
                        <img loading="lazy" src="public/imagenes/index/letreros_luminosos.webp" alt="Letreros luminosos">
                    </figure></a>
                <h3>Letreros luminosos</h3>
            </div>
            <div class="services-item">
                <a href="vistas/servicios/led.php"><figure class="img-item-container">
                        <img loading="lazy" src="public/imagenes/index/paneles_led.webp" alt="Paneles led">
                    </figure></a>
                <h3>Paneles LED</h3>
            </div>
        </div>
        </section>

        <?php
        require_once 'utils/CategoryPageRenderer.php';
        $pageRenderer = new CategoryPageRenderer();
        $categoriesHTML = $pageRenderer->renderCategories();
        ?>
        <section class="categoria py-5">
            <h2 class="categoria__titulo titulo">CATEGORÍAS</h2>
            <div class="container">
                <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 gy-5">
                    <?php echo $categoriesHTML; ?>
                </div>
            </div>
        </section>

        <div>
            <div class="nuestros__clientes ">
                <h2 class="nuestros__titulo">NUESTROS CLIENTES</h2>
                <div class="hero-container clientes__section">
                    <div class="logos-carousel" id="clientes">
                        <div class="logos-slider">
                            <img loading="lazy" src="public/imagenes/auspicios/vladi.webp" alt="Logo cliente Vladi">
                            <img loading="lazy" src="public/imagenes/auspicios/hilton.webp"  alt="Logo cliente Hilton">
                            <img loading="lazy" src="public/imagenes/auspicios/sagafalabella.webp" alt="Logo cliente Saga Falabella">
                            <img loading="lazy" src="public/imagenes/auspicios/touloulause.webp" alt="Logo cliente Touloulause">
                            <img loading="lazy" src="public/imagenes/auspicios/hotel_colors.webp"  alt="Logo cliente Hotel Colors">
                            <img loading="lazy" src="public/imagenes/auspicios/petroperu.webp" alt="Logo cliente PetropPerú">
                            <img loading="lazy" src="public/imagenes/auspicios/entel.webp" alt="Logo cliente Entel">
                            <img loading="lazy" src="public/imagenes/auspicios/cristal.webp" alt="Logo cliente Cristal">
                            <img loading="lazy" src="public/imagenes/auspicios/backus.webp" alt="Logo cliente Backus">
                            <img loading="lazy" src="public/imagenes/auspicios/olympuz.webp" alt="Logo cliente Olympuz">
                            <img loading="lazy" src="public/imagenes/auspicios/ripley.webp" alt="Logo cliente Ripley">
                            <img loading="lazy" src="public/imagenes/auspicios/utilex.webp" alt="Logo cliente Utilex">
                        </div>

                        <div class="logos-slider">
                            <img loading="lazy" src="public/imagenes/auspicios/vladi.webp" alt="Logo cliente Vladi">
                            <img loading="lazy" src="public/imagenes/auspicios/hilton.webp"  alt="Logo cliente Hilton">
                            <img loading="lazy" src="public/imagenes/auspicios/sagafalabella.webp" alt="Logo cliente Saga Falabella">
                            <img loading="lazy" src="public/imagenes/auspicios/touloulause.webp" alt="Logo cliente Touloulause">
                            <img loading="lazy" src="public/imagenes/auspicios/hotel_colors.webp"  alt="Logo cliente Hotel Colors">
                            <img loading="lazy" src="public/imagenes/auspicios/petroperu.webp" alt="Logo cliente PetropPerú">
                            <img loading="lazy" src="public/imagenes/auspicios/entel.webp" alt="Logo cliente Entel">
                            <img loading="lazy" src="public/imagenes/auspicios/cristal.webp" alt="Logo cliente Cristal">
                            <img loading="lazy" src="public/imagenes/auspicios/backus.webp" alt="Logo cliente Backus">
                            <img loading="lazy" src="public/imagenes/auspicios/olympuz.webp" alt="Logo cliente Olympuz">
                            <img loading="lazy" src="public/imagenes/auspicios/ripley.webp" alt="Logo cliente Ripley">
                            <img loading="lazy" src="public/imagenes/auspicios/utilex.webp" alt="Logo cliente Utilex">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="ubicanos5 mt-lg-0" style="margin-top: 5rem;">
            <h2 class="ubicanos__titulo titulo">TENDENCIA, VANGUARDIA Y NOVEDADES / NUEVOS PROYECTOS</h2>
            <div class="container">
                <div class="row row-cols-2 gy-5 py-5">
                    <div class="col">
                        <a href="https://youtu.be/qU08CNcnQhA" class="card-link">
                            <div class="image-container">
                                <img class="lazyLoad" id="imagen_21" src="public/imagenes/proyectos/1.webp" alt="Decoración e iluminación de interiores y exteriores">
                                <div class="overlay__card">
                                    <h2 class="card-title">DECORACIÓN E ILUMINACIÓN DE INTERIORES Y EXTERIORES</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://youtu.be/3QMkxPf7H3U" class="card-link">
                            <div class="image-container">
                                <img class="lazyLoad" id="imagen_22" src="public/imagenes/proyectos/2.webp" alt="Decoración con pantallas led">
                                <div class="overlay__card">
                                    <h2 class="card-title">DECORACIÓN CON PANTALLAS LED</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--<div class="categoria__section proyectos">
                <figure class="categoria__imagen">
                    <a href="https://youtu.be/qU08CNcnQhA"><img class="categoria__img lazyLoad" id="imagen_21" src="public/imagenes/proyectos/1.webp" alt="Cevicheria"></a>
                    <figcaption class="categoria__desc">DECORACIÓN E ILUMINACIÓN DE INTERIORES Y EXTERIORES</figcaption>
                </figure>
                <figure class="categoria__imagen">
                    <a href="https://youtu.be/3QMkxPf7H3U"><img class="categoria__img lazyLoad" id="imagen_22" src="public/imagenes/proyectos/2.webp" alt="Cevicheria"></a>
                    <figcaption class="categoria__desc">DECORACIÓN CON PANTALLAS LED</figcaption>
                </figure>
            </div>-->
        </div>
        <div class="ubicanos">
            <h2 class="ubicanos__titulo titulo">UBÍCANOS</h2>
            <div class="mapas">
                <figure class="mapa">
                    <iframe class="mapa__iframe"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2545.8894079274646!2d-77.0256203!3d-12.0571663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0xb89ce2c672f2aa0c!2sNeon+House+Led!5e0!3m2!1ses!2spe!4v1691805864560!5m2!1ses!2spe"
                        width="100%"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </figure>
            </div>
        </div>
        <footer>
            <div class="direccion">
                <p class="direccion__item">Jr. Paruro 1401 tda. 130 sótano, CC Shopping Center, Cercado de Lima</p>
                <p class="direccion__item">936910425</p>
                <p class="direccion__item">ventasneonhouse@gmail.com</p>

            </div>
            <div class="cont-pro">
                <a href="admin/index.php">
                    <button>VISUALIZAR MIS PROPUESTAS</button>
                </a>
            </div>
            <div class="sociales">
                <a class="sociales__item" rel="noreferrer" aria-label="instagram" target="_blank" href="https://www.instagram.com/nhldecoracioncomercial/"><i class="fab fa-instagram-square"></i></a>
                <a class="sociales__item" rel="noreferrer" aria-label="facebook" target="_blank" href="https://www.facebook.com/nhldecoracioncomercial"> <i class="fab fa-facebook"></i></a>
                <a class="sociales__item"  rel="noreferrer" aria-label="youtube" target="_blank" href="https://www.youtube.com/user/NEONHOUSELEDS"> <i class="fab fa-youtube"></i></a>
                <a class="sociales__item" rel="noreferrer" aria-label="twitter" target="_blank" href="https://twitter.com/NEONHOUSELEDS"><i class="fab fa-twitter-square"></i></a>
                <a class="sociales__item" rel="noreferrer" aria-label="linkedin" target="_blank" href="https://www.linkedin.com/in/neonhouseled/"><i class="fab fa-invision"></i></a>
            </div>
            <div class="linea-medio"></div>

        </footer>
        <script src="public/js/lazysizes.min.js" async></script>
        <script defer src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous"></script>
        <script defer src="public/js/menu.js"></script>
        <script src="public/bootstrap/bootstrap.bundle.min.js"></script>
    </body>
    </html>
<?php session_destroy();?>