<?php
session_start();
$_SESSION['categoria'] = 'RESTAURANTE';
$_SESSION['info'] = 'restaurante';
$_SESSION['imagen'] = 'RESTAURANTE.jpg';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="google-site-verification" content="Ard7QiMzKfrMgoPNXubay3iYCYwcHLF8JOQ95nA9sgY" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="¿Quieres que tu restaurante tenga éxito? Transforma el diseño y la decoración interior de tu negocio. ¡Contáctanos ahora para asesorarte con diseños novedosos y personalizados!" />
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-QRZPWCXDM8"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-QRZPWCXDM8');
  </script>
  <title>Estilos de decoración: diseño innovador para tu restaurante</title>
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
      <span class="restaurante">RESTAURANTE</span>
      <br>
      <span class="decoracion">DECORACIÓN Y REMODELACIÓN</span>
    </h1>

    <div class="blue-line"></div>
    <?php require_once "../layout/modal.php" ?>

    <div class="logos">
      <div class="logos-slide">
        <img src="../../public/imagenes/Slider/RESTAURANTE/decoracion.webp" />
        <img src="../../public/imagenes/Slider/RESTAURANTE/remodelacion.webp" />
        <img src="../../public/imagenes/Slider/RESTAURANTE/diseño-interior.webp" />
        <img src="../../public/imagenes/Slider/RESTAURANTE/diseño-exterior.webp" />
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
          <img src="../../public/imagenes/Slider/RESTAURANTE/decoracion.webp" class="d-block w-100" alt="Decoración">
        </div>
        <div class="carousel-item">
          <img src="../../public/imagenes/Slider/RESTAURANTE/remodelacion.webp" class="d-block w-100"
            alt="Remodelación">
        </div>
        <div class="carousel-item">
          <img src="../../public/imagenes/Slider/RESTAURANTE/diseño-interior.webp" class="d-block w-100"
            alt="Diseño Interior">
        </div>
        <div class="carousel-item">
          <img src="../../public/imagenes/Slider/RESTAURANTE/diseño-exterior.webp" class="d-block w-100"
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
        <h2 class="welcom__item__titulo">SI TU RESTAURANTE NO LOGRA CREAR VÍNCULOS SÓLIDOS CON TUS CLIENTES POTENCIALES
        </h2>
        <h3 class="welcom__item__text">EN NUESTRO EQUIPO, NOS ESPECIALIZAMOS EN DISEÑAR RESTAURANTES QUE VAN DESDE LA
          SIMPLICIDAD HASTA EL LUJO. CON NUESTRA EXPERIENCIA, PODEMOS TRANSFORMAR TU ESPACIO EN UN LUGAR QUE CAUTIVARÁ A
          TUS CLIENTES</h3>
        <h3 class="welcom__item__contacto">¡NO BUSQUES MÁS NOSOTROS SOMOS TU PRIMERA OPCIÓN!</h3>
      </div>
      <div class="curvas">
        <section class="curved-green"></section>
        <section class="curved-white"></section>
      </div>
      <div class="text2">
        <p class="action-title">¡HAZ DE TU RESTAURANTE UN ÉXITO!</p>
        <button class="action-button" id="openModalButton">DISEÑOS UNICOS AQUI</button>
        <a class="action-button"
          href="https://api.whatsapp.com/send?phone=51936910425&text=Apoyo%20sobre%20mi%20proyecto%20de%20Restaurante">TRANSFORMA
          TU RESTAURANTE</a>
      </div>
    </div>

    <br>


    <h2 class="subtitulo"></h2>
    <a class="" id="catalogo"></a>



    <div class="galeria">
      <div class="galeria-imagenes">
        <?php
        if (isset($_COOKIE["user"])) {
          require_once "../layout/funciones.php";
          mostrar_imagenes("restaurantes");
        }
        ?>
      </div>

    </div>

    <div id="form_1" class="overlay__formulario">
      <a href="#" id="x_1" class="overlay__x x">X</a>
      <form class="overlay__form" id="restaurante">
        <div class="empresa">
          <label class="overlay__label" for="empresa">Nombre o Empresa:
          </label>

          <input class="overlay__input e" type="text" id="empresa" pattern="[a-zA-Z ]{2,254}"
            title="Solo debe contener letras. e.g. Company" required>
        </div>
        <div class="correo">
          <label for="email" class="overlay__label cor">Correo:</label>
          <input id="email" class="overlay__input c" type="email"
            pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="e.g. aso@gmail.com" required>



        </div>
        <div class="telefono">
          <label for="tel" class="overlay__label te">Celular:</label>
          <input type="text" id="tel" class="overlay__input t" pattern="[0-9]{9}" title="debe conter numeros" required>
        </div>
        <input type="hidden" id="nomcategory" class="hiden" value="cevicheria">
        <input type="hidden" id="url" class="hiden"
          value="https://www.flipsnack.com/alonsoddt/cevicheri-a-catalogo-con-textos.html">
        <input type="submit" class="overlay__submit" value="Obtener mi catálogo de categoría cevichería">

      </form>


    </div>



  </main>

  <?php require_once "../layout/foother.php" ?>

  <script defer type="text/javascript" src="../../public/js/modal.js"></script>

  <script>
    var copy = document.querySelector(".logos-slide").cloneNode(true);
    document.querySelector(".logos").appendChild(copy);
  </script>

  <script>
    // 360 viewer
    var PSV = new PhotoSphereViewer({
      panorama: '../../public/imagenes/Imagenes 360/CEVICHERIA/1.webp',
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