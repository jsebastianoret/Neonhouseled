<?php
session_start();
require_once 'utils/CategoryPageRenderer.php';
$pageRenderer = new CategoryPageRenderer();
$categoriesHTML = $pageRenderer->renderCategories();
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
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-QRZPWCXDM8"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-QRZPWCXDM8');
        </script>
        <!--<link rel="stylesheet" href="public/css/shared/footer.css">-->
        <link rel="stylesheet" href="public/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/shared/header.css"/>
        <link rel="stylesheet" href="public/css/shared/categoria_index.css" />
        <link rel="stylesheet" href="public/css/shared/auspicio.css" />
        <link rel="stylesheet" href="public/css/shared/footer.css" />
        <link rel="stylesheet" href="public/css/shared/interactiveCards.css"/>
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
                <source src="public/imagenes/index/video.mp4" type="video/mp4">
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
        
                <a href="vistas/servicios/arquitectura-comercial-decoracion-remodelacion-iluminacion-diseдo.php"><figure class="img-item-container">
                        <img src="public/imagenes/index/arquitectura_comercial.webp" alt="Alquitectura comercial">
                    </figure></a>
                <h3>Arquitectura comercial</h3>
            </div>
            <div class="services-item">
                <a href="vistas/servicios/mobiliaria.php"><figure class="img-item-container">
                        <img src="public/imagenes/index/fabricacion_mobiliaria.webp" alt="Fabricación mobiliaria">
                    </figure></a>
                <h3>Fabricación mobiliaria</h3>
            </div>
            <div class="services-item">
                
                <a href="vistas/servicios/comercial-decoracion-remodelacion-iluminacion-diseдo.php"><figure class="img-item-container">
                        <img src="public/imagenes/index/decoracion_y_remodelacion.webp" alt="Decoración_y_remodelación">
                    </figure></a>
                <h3>Decoración y remodelación</h3>
            </div>
            <div class="services-item">
                <a href="vistas/servicios/neon.php"><figure class="img-item-container">
                        <img src="public/imagenes/index/fabricacion_neon.webp" alt="Fabricación neon">
                    </figure></a>
                <h3>Fabricación neón</h3>
            </div>
            <div class="services-item">
                <a href="vistas/servicios/luminosos.php"><figure class="img-item-container">
                        <img src="public/imagenes/index/letreros_luminosos.webp" alt="Letreros luminosos">
                    </figure></a>
                <h3>Letreros luminosos</h3>
            </div>
            <div class="services-item">
                <a href="vistas/servicios/led.php"><figure class="img-item-container">
                        <img src="public/imagenes/index/paneles_led.webp" alt="Paneles led">
                    </figure></a>
                <h3>Paneles LED</h3>
            </div>
        </div>
    </section>

    <!-- Espacio para Edward -->
<!--    <div class="categoria">
        <h2 class="categoria__titulo titulo">CATEGORÍAS</h2>
        <div class="categoria__section">

        </div>
    </div>-->
    <!-- categoria__section unnused   <<-->
    <section class="categoria py-5">
        <h2 class="categoria__titulo titulo">CATEGORÍAS</h2>
        <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 gy-5">
                <?php echo $categoriesHTML; ?>
            </div>
        </div>
    </section>
    <div>
        <div class="nuestros__clientes">
            <h2 class="nuestros__titulo">NUESTROS CLIENTES</h2>
            <div class="hero-container clientes__section">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 arti" id="clientes">
                    <footer class="page1-footer">
                        <p class="marquesina">
                <span><img src="public/imagenes/auspicios/vladi.webp" alt="imagen bladi en movimiento" class="icon-img-empresa" width="128" height="72">
                <img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hotel_colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/backus.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/olympuz.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/ripley.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/utilex.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hotel_colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/backus.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/olympuz.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/ripley.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/utilex.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hotel_colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/backus.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/olympuz.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/ripley.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/utilex.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hotel_colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/backus.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/olympuz.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/ripley.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/utilex.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hotel_colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/backus.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/olympuz.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/ripley.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/utilex.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hotel_colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/backus.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/olympuz.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/ripley.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/utilex.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hotel_colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/backus.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/olympuz.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/ripley.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/utilex.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hotel_colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/backus.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/olympuz.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/ripley.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/utilex.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/hotel_colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/backus.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/olympuz.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/ripley.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                <img  src="public/imagenes/auspicios/utilex.webp"
                      class="icon-img-empresa" width="126" height="125" alt="cliente">
                </span>
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <div class="ubicanos5">
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
<!--        <div class="categoria__section proyectos">
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
        <!-- BOTON VER MIS PROPUESTAS ANTIGUO
        <div class="ultimo">
            <a class="boton_final"  href="admin/index.php">
                <img class="imagen_final lazyload" alt="neon" src="public/imagenes/lupa.webp" width="219" height="100">
            </a>
        </div>-->
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