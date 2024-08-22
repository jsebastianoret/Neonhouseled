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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QRZPWCXDM8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-QRZPWCXDM8');
    </script>
    <!--<link rel="stylesheet" href="public/css/shared/footer.css">-->
    <link rel="stylesheet" href="public/css/shared/header.css"/>
    <link rel="stylesheet" href="public/css/shared/categoria_index.css" />
    <link rel="stylesheet" href="public/css/shared/auspicio.css" />
    <link rel="stylesheet" href="public/css/shared/footer.css" />
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
        <h2 class="about-us-title">¿Quiénes somos?</h2>
        <div class="about-us-content">
            <figure class="video-container">
                <a href="https://www.youtube.com/watch?v=NnkbMaaskLY&ab_channel=NEONHOUSELED" rel="noreferrer" target="_blank">
                    <img class="video_index" src="public/imagenes/index/video_index.webp" alt="video">
                </a>
            </figure>
            <div class="description-container">
                <p>Somos Neon House Led empresa dedicada a la decoración y diseño de interiores así como la fabricación,
                    importación y distribución de letreros y anuncios publicitarios. Por ello, contamos con un equipo de
                    profesionales expertos que van a satisfacer la más grande expectativa de comunicación visual y de
                    proyección de imagen que requieren nuestros clientes a nivel nacional e internacional, desarrollando
                    sus ideas, y haciéndolas realidad con la mejor tecnología y creatividad para su satisfacción.</p>
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
                <a href="vistas/servicios/arquitectura-comercial-decoracion-remodelacion-iluminacion-diseño.php"><figure class="img-item-container">
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
                <a href="vistas/servicios/comercial-decoracion-remodelacion-iluminacion-diseño.php"><figure class="img-item-container">
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
    <div class="categoria">
        <h2 class="categoria__titulo titulo">CATEGORÍAS</h2>
        <div class="categoria__section">
            <figure class="categoria__imagen">
                <a href="vistas/categorias/cevicheria.php"><img class="categoria__img lazyLoad" id="imagen_1" src="public/imagenes/cevicheria_c.webp" alt="Cevicheria" loading="lazy"
 ></a>
                <figcaption class="categoria__desc">CEVICHERÍA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/sangucheria.php"><img class="categoria__img lazyLoad" id="imagen_2" src="public/imagenes/sangucheria_c.webp" alt="Sangucheria"></a>
                <figcaption class="categoria__desc">SANGUCHERÍA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/discoteca.php"><img class="categoria__img lazyLoad" id="imagen_3" src="public/imagenes/discoteca_c.webp" alt="Discoteca"></a>
                <figcaption class="categoria__desc">DISCOTECA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/polleria.php"><img class="categoria__img lazyLoad" id="imagen_4" src="public/imagenes/polleria_c.webp" alt="Pollería"></a>
                <figcaption class="categoria__desc">POLLERÍA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/restaurante.php"><img class="categoria__img lazyLoad" id="imagen_5" src="public/imagenes/restaurante_c.webp" alt="Restaurante"></a>
                <figcaption class="categoria__desc">RESTAURANTE</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/bar.php"><img class="categoria__img lazyLoad" id="imagen_6" src="public/imagenes/bar_c.webp" alt="Bar"></a>
                <figcaption class="categoria__desc">BAR</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/fast__food.php"><img class="categoria__img lazyLoad" id="imagen_7" src="public/imagenes/Fast_Food_c.webp" alt="Fast Food"></a>
                <figcaption class="categoria__desc">FAST FOOD</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/spa.php"><img class="categoria__img lazyLoad" id="imagen_8" src="public/imagenes/salon_y_spa.webp" alt="Salón SPA y barbería"></a>
                <figcaption class="categoria__desc">SALON SPA Y BARBERÍA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/hogar.php"><img class="categoria__img lazyLoad" id="imagen_9" src="public/imagenes/hogar_c.webp " alt="Hogar"></a>
                <figcaption class="categoria__desc">HOGAR</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/pizzeria.php"><img class="categoria__img lazyLoad" id="imagen_10" src="public/imagenes/pizzeria_c.webp" alt="Pizzeria"></a>
                <figcaption class="categoria__desc">PIZZERIA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/panaderia.php"><img class="categoria__img lazyLoad" id="imagen__11" src="public/imagenes/panaderia_y_pasteleria_c.webp" alt="Panadería y pastelería"></a>
                <figcaption class="categoria__desc">PANADERIA Y PASTELERIA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/cafeteria.php"><img class="categoria__img lazyLoad" id="imagen__12" src="public/imagenes/cafeteria_y_jugueria_c.webp" alt="Cafetería y juguería"></a>
                <figcaption class="categoria__desc">CAFETERIA Y JUGUERIA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/minimarket.php"><img class="categoria__img lazyLoad" id="imagen__13" src="public/imagenes/minimarket.webp" alt="Minimarket" loading="lazy"></a>
                <figcaption class="categoria__desc">MINIMARKET</figcaption>
            </figure>
            <!--Nuevas categorias-->
            <figure class="categoria__imagen">
                <a href="vistas/categorias/dental.php"><img class="categoria__img lazyLoad" id="imagen__14" src="public/imagenes/categoria/dental.webp" alt="Clínica dental"></a>
                <figcaption class="categoria__desc">CLINICA DENTAL</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/departamento.php"><img class="categoria__img lazyLoad" id="imagen__15" src="public/imagenes/categoria/departamento.webp" alt="Departamento"></a>
                <figcaption class="categoria__desc">DEPARTAMENTO</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/dormitorio.php"><img class="categoria__img lazyLoad" id="imagen__16" src="public/imagenes/categoria/dormitorio.webp" alt="Dormitorio para niños"></a>
                <figcaption class="categoria__desc">DORMITORIO PARA NIÑOS</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/industrial.php"><img class="categoria__img lazyLoad industrial"  id="imagen__17" src="public/imagenes/categoria/industrial.webp" alt="Estilo industrial"></a>
                <figcaption class="categoria__desc">ESTILO INDUSTRIAL</figcaption>
            </figure>                
            <figure class="categoria__imagen">
                <a href="vistas/categorias/soda.php"><img class="categoria__img lazyLoad" id="imagen__18" src="public/imagenes/categoria/soda.webp" alt="Fuente de soda"></a>
                <figcaption class="categoria__desc">FUENTE DE SODA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/gimnasio.php"><img class="categoria__img lazyLoad" id="imagen__19" src="public/imagenes/categoria/gimnasio.webp" alt="Gimnasio"></a>
                <figcaption class="categoria__desc">GIMNASIO</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/hoteles.php"><img class="categoria__img lazyLoad" id="imagen__20" src="public/imagenes/categoria/hoteles.webp" alt="Hoteles"></a>
                <figcaption class="categoria__desc">HOTELES</figcaption>
            </figure>                
            <figure class="categoria__imagen">
                <a href="vistas/categorias/recepciones.php"><img class="categoria__img lazyLoad" id="imagen__21" src="public/imagenes/categoria/recepciones.webp" alt="Recepciones"></a>
                <figcaption class="categoria__desc">RECEPCIONES</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/restobar.php"><img class="categoria__img lazyLoad" id="imagen__22" src="public/imagenes/categoria/restobar.webp" alt="Restobar"></a>
                <figcaption class="categoria__desc">RESTOBAR</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/belleza.php"><img class="categoria__img lazyLoad" id="imagen__23" src="public/imagenes/categoria/belleza.webp" alt="Salón belleza y barbería"></a>
                <figcaption class="categoria__desc">SALON BELLEZA Y BARBERIA</figcaption>
            </figure>                
            <figure class="categoria__imagen">
                <a href="vistas/categorias/terraza.php"><img class="categoria__img lazyLoad" id="imagen__24" src="public/imagenes/categoria/terraza.webp" alt="Terraza"></a>
                <figcaption class="categoria__desc">TERRAZA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/ropa.php"><img class="categoria__img lazyLoad" id="imagen__25" src="public/imagenes/categoria/ropa.webp" alt="Ropa"></a>
                <figcaption class="categoria__desc">ROPA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/veterinaria.php"><img class="categoria__img lazyLoad" id="imagen__26" src="public/imagenes/categoria/veterinaria.webp" alt="Veterinaria"></a>
                <figcaption class="categoria__desc">VETERINARIA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas/categorias/heladeria.php"><img class="categoria__img lazyLoad" id="imagen__27" src="public/imagenes/categoria/heladeria.webp" alt="Heladeria"></a>
                <figcaption class="categoria__desc">HELADERIA</figcaption>
            </figure>
          <!--Fin Nuevas Categorias-->
        </div>
    </div>
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
    <div class="ubicanos">
        <h2 class="ubicanos__titulo titulo">TENDENCIA, VANGUARDIA Y NOVEDADES / NUEVOS PROYECTOS</h2>
        <div class="categoria__section proyectos">
            <figure class="categoria__imagen">
                <a href="https://youtu.be/qU08CNcnQhA"><img class="categoria__img lazyLoad" id="imagen_21" src="public/imagenes/proyectos/1.webp" alt="Cevicheria"></a>
                <figcaption class="categoria__desc">DECORACIÓN E ILUMINACIÓN DE INTERIORES Y EXTERIORES</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="https://youtu.be/3QMkxPf7H3U"><img class="categoria__img lazyLoad" id="imagen_22" src="public/imagenes/proyectos/2.webp" alt="Cevicheria"></a>
                <figcaption class="categoria__desc">DECORACIÓN CON PANTALLAS LED</figcaption>
            </figure>
        </div>
    </div>
    <div class="ubicanos">
        <h2 class="ubicanos__titulo titulo">UBÍCANOS</h2>
        <div class="mapas">
        <figure class="mapa">
            <a class="mapa__link" href="https://www.google.com/maps/place/Neon+House+Led/@-12.057222,-77.025545,19z/data=!4m5!3m4!1s0x0:0xb89ce2c672f2aa0c!8m2!3d-12.0571663!4d-77.0256203?hl=es" rel="noreferrer" target="_blank"><img class="mapa__img lazyload" src="public/imagenes/as.webp"  alt="Mapa"></a>
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
            <a class="boton_final" href="admin/index.php">
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
    </footer>
    <script src="public/js/lazysizes.min.js" async></script>
    <script defer src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous"></script>
    <script defer src="public/js/menu.js"></script>
</body>

</html>
<?php session_destroy();?>
