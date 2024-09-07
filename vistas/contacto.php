<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <h1 class="none">Apartado de contacto</h1>


    <?php require_once "layout/header.php" ?>

    <!-- Slider TITULO -->
    <section class="hero-section position-relative">
        <div id="imageCarousel" class="carousel slide hero_container" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php for ($i = 1; $i <= 12; $i++) { ?>
                    <div class="carousel-item <?php if ($i === 1)
                        echo 'active'; ?>">
                        <img src="../public/imagenes/contacto/collage/<?= $i ?>-small.webp" srcset="../public/imagenes/contacto/collage/<?= $i ?>-small.webp 768w,
                                 ../public/imagenes/contacto/collage/<?= $i ?>-medium.webp 1200w,
                                 ../public/imagenes/contacto/collage/<?= $i ?>.webp 1920w"
                            sizes="(max-width: 768px) 100vw, (max-width: 1200px) 1200px, 1920px" class="d-block w-100"
                            alt="Collage <?= $i ?>">
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="titles-section text-center position-absolute top-50 start-50 translate-middle w-100">
            <h2 class="contact-title" id="contactTitle">Contáctanos</h2>
            <p class="contact-subtitle">¿Alguna petición? No dudes en escribirnos</p>
        </div>
    </section>

    <!-- Contacto -->
    <section class="contact" id="contactForm">
        <!-- Formulario -->
        <div class="container contact-container">
            <div class="row">
                <!-- Columna Izquierda -->
                <div class="col-md-5 contact-left text-white p-4">
                    <h3 class="mb-4">CONSTRUYAMOS TU SUEÑO JUNTOS, SOMOS TUS ALIADOS EN EL DISEÑO DE INTERIORES</h3>
                    <img src="../public/imagenes/contacto/Contacto<?= mt_rand(1, 2); ?>.webp" alt="Contacto Imagen"
                        class="img-fluid rounded">
                </div>

                <!-- Columna Derecha -->
                <div class="col-md-7 contact-right p-4">
                    <form id="formContact" class="contact-form" action="../controladores/enviarcorreo.php"
                        method="POST">
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="full_name">Nombre</label>
                                <input type="text" class="form-control" name="full_name" id="full_name"
                                    pattern="[a-zA-Z ]{2,254}" title="Solo debe contener letras. e.g. john" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="telephone">Teléfono</label>
                                <input type="number" class="form-control" name="telephone" id="telephone"
                                    title="debe contener números" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                    title="e.g. aso@gmail.com" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="interesed_service">Interesado en:</label>
                                <input type="text" class="form-control" name="interesed_service" id="interesed_service"
                                    value="<?php echo $consulta ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="career">Mensaje</label>
                            <textarea name="career" class="form-control" id="career" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-small custom-btn" id="enviar"
                                name="enviar">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php require_once "layout/foother.php" ?>

    <!-- Scripts -->
    <script src="../public/bootstrap/bootstrap.bundle.min.js"></script>
    <script defer src="../public/js/contact.js"></script>
</body>

</html>