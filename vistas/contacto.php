<?php
// Iniciar sesión
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título de la página -->
    <title>Contacto</title>
    
    <!-- Ícono de la página -->
    <link rel="shortcut icon" href="../ico.ico" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- CSS personalizado para header, footer y la página de contacto -->
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/contacto.css">
    
    <!-- Estilo adicional para ocultar el título de la página -->
    <style>
        .none {
            display: none;
        }
    </style>
</head>

<body>
    <!-- Título oculto para accesibilidad -->
    <h1 class="none">Apartado de contacto</h1>
    
    <!-- Incluir el header -->
    <?php require_once "layout/header.php"; ?>

    <!-- Sección del slider (carrusel de imágenes) -->
    <section class="hero-section position-relative">
        <div id="imageCarousel" class="carousel slide hero_container" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Generar dinámicamente 12 imágenes para el slider -->
                <?php for ($i = 1; $i <= 12; $i++) { ?>
                    <div class="carousel-item <?php if ($i === 1) echo 'active'; ?>">
                        <img src="../public/imagenes/contacto/collage/<?= $i ?>-small.webp"
                             srcset="../public/imagenes/contacto/collage/<?= $i ?>-small.webp 768w,
                                     ../public/imagenes/contacto/collage/<?= $i ?>-medium.webp 1200w,
                                     ../public/imagenes/contacto/collage/<?= $i ?>.webp 1920w"
                             sizes="(max-width: 768px) 100vw, (max-width: 1200px) 1200px, 1920px"
                             class="d-block w-100"
                             alt="Collage <?= $i ?>">
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- Sección de títulos en el centro del slider -->
        <div class="titles-section text-center position-absolute top-50 start-50 translate-middle w-100">
            <h2 class="contact-title" id="contactTitle">Contáctanos</h2>
        </div>

        <!-- Flecha hacia abajo para indicar desplazamiento -->
        <div class="scroll-down-indicator">
            <span>&#x2193</span>
        </div>
    </section>

    <!-- Subtítulo debajo del slider -->
    <div class="text-center subtitle-container">
        <h3 class="mb-4 contact-highlight">CONSTRUYAMOS TU SUEÑO JUNTOS, SOMOS TUS ALIADOS EN EL DISEÑO DE INTERIORES</h3>
    </div>

    <!-- Sección de contacto -->
    <section class="contact" id="contactForm">
        <div class="container contact-container">
            <div class="row">
                <!-- Columna Izquierda (Imagen aleatoria) -->
                <div class="col-md-5 contact-left p-4"
                    style="background-image: url('../public/imagenes/contacto/Contacto<?= mt_rand(1, 2); ?>.webp');">
                </div>

                <!-- Columna Derecha (Formulario de contacto) -->
                <div class="col-md-7 contact-right p-4">
                    <form id="formContact" class="contact-form" action="../controladores/enviarcorreo.php" method="POST">
                        <div class="row">
                            <!-- Campo de Nombre -->
                            <div class="col-md-6 form-group mb-3">
                                <label for="full_name"><i class="bi bi-person-fill"></i> Nombre</label>
                                <input type="text" class="form-control" name="full_name" id="full_name"
                                    pattern="[a-zA-Z ]{2,254}" title="Solo debe contener letras. e.g. John" required>
                            </div>

                            <!-- Campo de Teléfono -->
                            <div class="col-md-6 form-group mb-3">
                                <label for="telephone"><i class="bi bi-telephone-fill"></i> Teléfono</label>
                                <input type="number" class="form-control" name="telephone" id="telephone"
                                    title="Debe contener solo números" required>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Campo de Email -->
                            <div class="col-md-6 form-group mb-3">
                                <label for="email"><i class="bi bi-envelope-fill"></i> Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                    title="Formato: ejemplo@gmail.com" required>
                            </div>

                            <!-- Campo de Servicio Interesado (desplegable o texto fijo) -->
                            <div class="col-md-6 form-group mb-3">
                                <label for="interesed_service">Interesado en:</label>
                                <input type="text" class="form-control" name="interesed_service" id="interesed_service"
                                    value="<?php echo $consulta; ?>" readonly>
                            </div>
                        </div>

                        <!-- Campo de Mensaje -->
                        <div class="form-group mb-3">
                            <label for="career">Mensaje</label>
                            <textarea name="career" class="form-control" id="career" rows="4" required></textarea>
                        </div>

                        <!-- Botón de Enviar -->
                        <div class="form-group button-container">
                            <button type="submit" class="btn btn-success btn-small custom-btn" id="enviar" name="enviar">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Incluir el footer -->
    <?php require_once "layout/foother.php"; ?>

    <!-- Scripts de Bootstrap y JavaScript personalizados -->
    <script src="../public/bootstrap/bootstrap.bundle.min.js"></script>
    <script defer src="../public/js/contact.js"></script>
</body>

</html>
