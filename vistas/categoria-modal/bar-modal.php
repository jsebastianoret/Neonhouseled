<?php
session_start();
$_SESSION['categoria'] = 'BAR';
$_SESSION['imagen'] = 'BAR.jpeg';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="¿Quieres atraer más clientes a tu bar? Convierte tu bar en un lugar vibrante y atractivo donde la diversión y el estilo se fusionan. ¡Contacta ya!"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QRZPWCXDM8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-QRZPWCXDM8');
    </script>
    <title>Renueva tu bar: remodelación y diseño moderno</title>
    <link rel="stylesheet" href="style.css" />

    <?php require_once "../layout/links.php" ?>
    <link rel="preload" href="../../public/css/shared/slider.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

</head>

<style>
    .logos {
  display: block; /* Show the logos div */

  
}
#carouselExample{
    display: none;
}
/* Mobile view (override default styles with media query) */
@media (max-width: 768px) { /* Adjust the breakpoint as needed */
  .logos {
    display: none; /* Hide the logos div on smaller screens */
  }
  
  /* Your other div (assuming it has a class) */
  #carouselExample{
    display: block; /* Show the other div on smaller screens */
  }
}
.bar-modal {
 height: 50%; /* Ajusta el valor según tus necesidades */

}



</style>

<body>
<?php require_once "../layout/header.php" ?>

    <main class="main__categoria">
      <!-- Imagen antes del título -->
      <div class="logos">
      <img class="bar-modal" src="../../public/imagenes/Slider/BAR/decoracion.webp" alt="Decoración Bar" />
      </div>

        <h1 class="categoria1__titulo">
        <span class="restaurante">BAR</span> 
        <br> 
        <div class="blue-line"></div>
        
        
        
        <div class="blue-line"></div>
        <div class="container-main">
    <div class="text1">
        <div class="logo-nhl">
        </div>
        <h2 class="welcom__item__titulo">SI TU BAR NO ESTÁ ATRAYENDO A LOS CLIENTES COMO DESEAS</h2>
        <h3 class="welcom__item__text"> DEJA QUE NUESTRO EQUIPO CAPTURE LA ESENCIA DE TU VISIÓN Y LA CONVIERTA EN UN ESPACIO MEMORABLE QUE LOS HARÁ VOLVER UNA Y OTRA VEZ.</h3>
        <h3 class="welcom__item__contacto">¡¡NO ESPERES MAS Y RENUEVA TU BAR CON NOSOTROS!! </h3>
    </div>
    <div class="curvas">
        <section class="curved-green"></section>
        <section class="curved-white"></section>
    </div>
    <div class="text2">
    <p class="action-title"> ¡¡ATREVETE A SER UN <br>
        CAMBIO TOTAL YA!!</p>
        <button class="action-button" id="openModalButton">NUESTROS MEJORES DISEÑOS</button>
        <a class="action-button" href="https://api.whatsapp.com/send?phone=51936910425&text=Apoyo%20sobre%20mi%20proyecto%20de%20Bar">DISEÑA TU BAR</a>
    </div>
</div>
        
        <br>

        <a class="" id="catalogo"></a>

        <div class="galeria">
            <div class="galeria-imagenes">
                <?php
                    if(isset($_COOKIE["user"]))
                    {
                        require_once "../layout/funciones.php";
                        mostrar_imagenes("bar");
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
    
<script>
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