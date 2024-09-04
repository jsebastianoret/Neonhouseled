<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QRZPWCXDM8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-QRZPWCXDM8');
    </script>
    <title>Contacto</title>
    <link rel="shortcut icon" href="../ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/contacto.css">
</head>

<body>
    <!-- Texto oculto para SEO -->
    <h1 class="none">Apartado de contacto</h1>

    <!-- Cabecera -->
    <?php require_once "layout/header.php" ?>

    <!-- Contenedor principal del slider y título -->
    <div class="slider-and-title-container">
        <!-- Slider con Bootstrap Carousel -->
        <div id="imageCarousel" class="carousel slide hero_container mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Crear slides con las imágenes -->
                <?php for ($i = 1; $i <= 12; $i++) { ?>
                    <div class="carousel-item <?php if ($i === 1)
                        echo 'active'; ?>">
                        <img src="../public/imagenes/contacto/collage/<?= $i ?>.webp" class="d-block w-100"
                            alt="Collage <?= $i ?>">
                    </div>
                <?php } ?>
            </div>
            <!-- Controles de anterior/siguiente -->
            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Título y Frase -->
        <div class="title">
            <h2 class="contact-title">CONSTRUYAMOS TU SUEÑO JUNTOS, SOMOS TUS ALIADOS EN EL DISEÑO DE INTERIORES</h2>
            <br>
            <div class="frase">
                <p class="parrafo">
                    ¡CONTÁCTANOS HOY MISMO PARA EMPEZAR!
                </p>
            </div>
        </div>
    </div>

    <!-- Sección de Contacto -->
    <section class="contact">
        <div class="contact-container">
            <div class="contact-left">
                <div class="img_container">
                    <img src="../public/imagenes/contacto/Contacto<?= mt_rand(1, 2); ?>.webp" alt="Contacto Imagen">
                </div>
            </div>

            <div class="contact-right">
                <form id="formContact" class="contact-form" action="../controladores/enviarcorreo.php" method="POST">
                    <h2 class="form-title">Contáctanos</h2>
                    <div class="form-group">
                        <label for="full_name">Nombre</label>
                        <input type="text" name="full_name" id="full_name" pattern="[a-zA-Z ]{2,254}"
                            title="Solo debe contener letras. e.g. john" required>
                    </div>

                    <div class="form-group">
                        <label for="telephone">Teléfono</label>
                        <input type="number" name="telephone" id="telephone" title="debe contener números" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                            pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="e.g. aso@gmail.com"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="interesed_service">Interesado en:</label>
                        <input type="text" name="interesed_service" id="interesed_service"
                            value="<?php echo $consulta ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="career">Mensaje</label>
                        <textarea name="career" id="career" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" id="enviar" name="enviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>





    <!-- Pie de página -->
    <?php require_once "layout/foother.php" ?>

    <!-- Scripts -->
    <script src="../public/bootstrap/bootstrap.bundle.min.js"></script>
    <script defer src="../public/js/contact.js"></script>
</body>

</html>