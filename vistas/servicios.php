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
    <link rel="stylesheet" href="../public/css/shared/servicios.css">
</head>
<body>
<?php require_once "layout/header.php" ?>

<main class="main__service">

    <div class="services__text">
        <h2 class="service_titulo">SERVICIOS</h2>
        <p>Cada servicio que ofrecemos está enfocado en brindar soluciones personalizadas y de alta calidad que responden a tus expectativas y necesidades</p>
    </div>

    <div class="services__content">

        <div class="services__cards">

            <div class="service__card">
                <div class="service__card__content">
                    <a href="servicios\arquitectura-comercial-decoracion-remodelacion-iluminacion-diseno.php" class="service__link">
                        <div class="img-hover-zoom img-hover-zoom--slowmo">
                            <img id="imagen_5" src="../public/imagenes/servicios/mayor_compresion/Arquitectura_comercial.webp" alt="Imagen del servicio arquitectura comercial">
                        </div>
                        <h3 class="service__card__content__subtitle">Arquitectura Comercial</h3>
                        <p class="service__card__content__paragraph">Transformamos espacios comerciales en experiencias inolvidables, combinando diseño moderno y funcionalidad.</p>
                    </a>
                </div>
            </div>

            <div class="service__card">
                <div class="service__card__content">
                    <a href="servicios\comercial-decoracion-remodelacion-iluminacion-diseno.php" class="service__link">
                        <div class="img-hover-zoom img-hover-zoom--slowmo">
                            <img id="imagen_1" src="../public/imagenes/servicios/mayor_compresion/Decoracion_y_remodelacion.webp" alt="Imagen del selvicio decoración y remodelación">
                        </div>
                        <h3 class="service__card__content__subtitle">Decoración y Remodelación</h3>
                        <p class="service__card__content__paragraph">Te acompañamos en todo el proceso de renovación de tus espacios, integrando las últimas tendencias en diseño.</p>
                    </a>
                </div>
            </div>


            <div class="service__card">
                <div class="service__card__content">
                    <a href="servicios/neon.php" class="service__link">
                        <div class="img-hover-zoom img-hover-zoom--slowmo">
                            <img id="imagen_2" src="../public/imagenes/servicios/mayor_compresion/Fabricacion_Neon.webp" alt="Imagen del selvicio fabricación de neon">
                        </div>
                        <h3 class="service__card__content__subtitle">Fabricación Neón</h3>
                        <p class="service__card__content__paragraph">Nuestros letreros de neón son una combinación perfecta de arte y tecnología.</p>
                    </a>
                </div>
            </div>

        </div>

        <div class="services__cards">


            <div class="service__card">
                <div class="service__card__content">
                    <a  href="servicios/mobiliaria.php" class="service__link">
                        <div class="img-hover-zoom img-hover-zoom--slowmo">
                            <img id="imagen_7" src="../public/imagenes/servicios/mayor_compresion/Fabricacion_Mobiliaria.webp" alt="Imagen del selvicio fabricación mobiliaria">
                        </div>
                        <h3 class="service__card__content__subtitle">Fabricación Mobiliaria</h3>
                        <p class="service__card__content__paragraph">En Neon House Led, creemos que el mobiliario es clave para realzar cualquier espacio.</p>
                    </a>
                </div>
            </div>


            <div class="service__card">
                <div class="service__card__content">
                    <a href="servicios/luminosos.php" class="service__link">
                        <div class="img-hover-zoom img-hover-zoom--slowmo">
                            <div class="img-hover-zoom img-hover-zoom--slowmo">
                                <img id="imagen_4" src="../public/imagenes/servicios/mayor_compresion/Letreros_Luminosos.webp" alt="Imagen del selvicio fabricación mobiliaria" >
                            </div>
                        </div>
                        <h3 class="service__card__content__subtitle">Letreros Luminosos</h3>
                        <p class="service__card__content__paragraph">Nuestros letreros luminosos no solo son atractivos, sino que también están diseñados para durar.</p>
                    </a>

                </div>
            </div>

            <div class="service__card">
                <div class="service__card__content">
                    <a href="servicios/led.php" class="service__link">
                        <div class="img-hover-zoom img-hover-zoom--slowmo">
                            <div class="img-hover-zoom img-hover-zoom--slowmo">
                                <img id="imagen_3" src="../public/imagenes/servicios/mayor_compresion/Paneles_Led.webp" alt="Imagen del selvicio paneles led">
                            </div>
                        </div>
                        <h3 class="service__card__content__subtitle">Paneles Led</h3>
                        <p class="service__card__content__paragraph">Nuestros paneles LED están diseñados para iluminar con estilo y elegancia.</p>
                    </a>
                </div>
            </div>


        </div>
    </div>

</main>
<?php require_once "layout/foother.php" ?>
</body>
</html>