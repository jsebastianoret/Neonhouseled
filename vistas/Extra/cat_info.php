<?php session_start(); ?>

<?php 
$categoria = $_SESSION['info'];
$servicio = $_SESSION['servicio'];
$title = $_SESSION['categoria'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Remodela tu negocio</title>
  <meta name="robots" content="index, all, follow">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-QRZPWCXDM8"></script>
  <link rel="stylesheet" href="style.css" />
  <?php require_once "../layout/links.php" ?>
</head>
<style>
  .portada {
    background-image: url(../../public/imagenes/Pagina-Extra/<?php echo $categoria;?>/<?php echo $categoria.'_01';?>.jpg)
  }
</style>

<body>
  <?php require_once "../layout/header.php" ?>

  <div class="container">
    <div class="portada">
      <div class="portada__contenido">
        <p class="portada__parr">
          <?php echo $title.$servicio ?>
        </p>
      </div>
    </div>
  </div>

  <div class="grid-general">
    <div class="border"></div>
    <div class="content">
      <p class="content_title">Soñando en grande</p>
      <p class="content_parr">
        <?php
        switch ($categoria) {
          case "BAR":
        ?>
          ¿Quieres atraer mas clientes a tu bar? Convierte tu bar en un lugar vibrante y atractivo donde la diversión y el estilo se fusionan. ¡Contacta ya!
          <?php
                  break;
                case "VETERINARIA":
          ?>
            Con un diseño pensado en el confort de tus pacientes peludos, creamos un ambiente acogedor que reduce su estrés y promueve su bienestar. 
          <?php
                  break;
                case "TERRAZA":
          ?>
            Nuestro equipo de diseñadores expertos transformará tu terraza en un oasis de relajación y belleza. ¡Contáctanos hoy mismo para crear una terraza que refleje tu personalidad!
          <?php
                  break;
                case "SANGUCHERÍA":
          ?>
            ¿Buscas aumentar las visitas a tu sanguchería? Remodela el diseño y la decoracion interior de tu local para que tu negocio sea un éxito.¡Contáctanos ahora!
          <?php
                  break;
                case "SALÓN DE SPA Y BARBERÍA":
          ?>
           ¿Quieres que tu spa tenga éxito? Transforma tu spa en un oasis de relajación y rejuvenecimiento, con diseños innovadores. ¡Contacta ya!
          <?php
                  break;
                case "SALÓN DE BELLEZA Y BARBERÍA":
          ?>
            Cuidamos cada detalle para que tus clientes se sientan como en un spa exclusivo.¡Da el primer paso hacia el salón de belleza y barbería de tus sueños hoy mismo!
          <?php
                  break;
                case "ROPA":
          ?>
            Creamos diseños de tiendas personalizados que capturan la esencia de tu marca. ¡Contáctanos hoy mismo y comienza a transformar tu tienda en un escaparate de estilo!
          <?php
                  break;
                case "RESTOBAR":
          ?>
            Creamos diseños que atraen y retienen clientes a tu restobar. Transforma tu espacio en un destino de sabor y estilo.
          <?php
                  break;
                case "RESTAURANTE":
          ?>
          ¿Quieres que tu restaurante tenga éxito? Transforma el diseño y la decoración interior de tu negocio. ¡Contáctanos ahora para asesorarte con diseños novedosos y personalizados!
        <?php
                  break;
                case "RECEPCIONES":
          ?>
          Remodela tu recepción y dale una bienvenida inolvidable con nuestro servicio de diseño. No esperes más. ¡Da el primer paso hacia la recepción de tus sueños hoy mismo!
           <?php
                  break;
                case "POLLLERÍA":
          ?>
            ¡No solo destaques por el sabor! Remodela la decoración y el diseño interior de tu polleríría. ¡Contáctanos para personalizar tu pollería!
          <?php
                  break;
                case "PIZZERÍA":
          ?>
            ¡Mejora tu negocio y destaca por el diseño y decoración personalizados y en tendencia de tu pizzería! Nuestro servicio te ayudará a atraer más clientes. ¡Contáctanos ahora!
          <?php
                  break;
                case "PANADERÍA Y PASTELERÍA":
          ?>
            ¿Buscas cautivar a más clientes? Cambia el diseño y la decoración de tu panadería/pastelería. ¡Contáctanos para ayudarte a crear experiencias innolvidables!
          <?php
                  break;
                case "MINIMARKET":
          ?>
            ¿Quieres atraer mas clientes a tu minimarket? Transforma tu minimarket en un espacio renovado y atractivo destancando en el mercado minorista ¡Contacta ya!
          <?php
                  break;
                case "HOTELES":
          ?>
            Creamos diseños únicos que reflejan tu marca y atraen huéspedes. Adáptate a las tendencias sin partir de cero.
          <?php
                  break;
                case "HOGAR":
          ?>
            ¿Quieres mejorar tu hogar? Transforma tu hogar en un espacio que refleja tu estilo único y personalidad, nuestro equipo experto se encarga de cada detalle. ¡Contacta ya!
          <?php
                  break;
                case "HELADERÍA":
          ?>
            Nuestro equipo de diseñadores se dedica a transformar espacios en auténticos paraísos del helado. ¡Contáctanos hoy y comienza la transformación de tu heladería!
          <?php
                  break;
                case "GIMNASIO":
          ?>
            Transforma tu gimnasio en un ambiente motivador, nuestros servicios de diseño de gimnasio están aquí para reflejar tu marca y atraer clientes.
          <?php
                  break;
                case "FUENTE DE SODA":
          ?>
            ¿Quieres atraer mas clientes a tu fuente de soda? Transformamos tu fuente de soda donde reflejen en espacios auténticos y atractivos  ¡Contacta ya!
          <?php
                  break;
                case "FAST FOOD":
          ?>
            ¡Con diseños personalizados y en tendencia atrae a más clientes! Transforma tu local de comida rápida  para que tu negocio sera un éxito. ¡Contáctanos ahora!
          <?php
                  break;
                case "ESTILO INDUSTRIAL":
          ?>
            ¿Buscas un estilo industrial ?Creamos ambientes modernos y atractivos que cautivan a los clientes y los invitan a regresar. ¡Contacta ya!
          <?php
                  break;
                case "DORMITORIO PARA NIÑOS":
          ?>
           Convierte el dormitorio de tus hijos en un mundo de ensueño, cada elemento se selecciona cuidadosamente para crear un espacio acogedor y estimulante.
          <?php
                  break;
                case "DISCOTECA":
          ?>
            ¿Quieres que tu discoteca sea popular? Transforma el diseño y decoración para que tus clientes vivan una experiencia inolvidable en un ambiente con estilo. ¡Contáctanos ahora!
          <?php
                  break;
                case "DEPARTAMENTO":
          ?>
            ¿Quieres mejorar tu departamento? Transforma tu departamento en un espacio que refleja tu estilo y personalidad, nos encargamos de cada detalle ¡Contacta ya!
          <?php
                  break;
                case "CLÍNICA DENTAL":
          ?>
            ¿Quieres que tu clinicia dental tenga éxito? Transforma tu clínica dental con NHL, combinamos ultimas tendecias de diseños innovadores con funcionalidad.  ¡Contacta ya!
          <?php
                  break;
                case "CEVICHERÍA":
          ?>
            ¿Quieres que tus clientes regresen a tu cevichería? Renueva la decoración y el diseño interior de tu negocio. ¡Contáctanos ahora para asesorarte!
          <?php
                  break;
                case "CAFETERÍA Y JUGUERÍA":
          ?>
            ¿Quieres que tu negocio sea un éxito? Transforma y personaliza el diseño y la decoración de tu cafetería/ juguería con nostros para cautivar a más clientes. ¡Contáctanos ahora!
          <?php
                  break;
                default:
          ?>
            ¿Quieres que tu negocio destaque y tenga éxito? Transforma y personaliza el diseño y la decoración de tu local. ¡Contáctanos ahora para asesorarte con ideas innovadoras y atractivas!
        <?php
              }
        ?>
  </p>
  <a href="cat_info2.php" class="content_btn">ver más</a>

    </div>
    <div class="collage">
        <img loading="lazy" width="160" height="150" src="../../public/imagenes/Pagina-Extra/<?php echo $categoria;?>/<?php echo $categoria.'_02';?>.jpg" alt="imagen 1">
        <img loading="lazy" width="160" height="150" src="../../public/imagenes/Pagina-Extra/<?php echo $categoria;?>/<?php echo $categoria.'_03';?>.jpg" alt="imagen 2">
        <img loading="lazy" width="160" height="150" src="../../public/imagenes/Pagina-Extra/<?php echo $categoria;?>/<?php echo $categoria.'_04';?>.jpg" alt="imagen 3">
        <img loading="lazy" width="160" height="150" src="../../public/imagenes/Pagina-Extra/<?php echo $categoria;?>/<?php echo $categoria.'_01';?>.jpg" alt="imagen 4">
    </div>
  </div>

  <?php require_once "../layout/foother.php" ?>
</body>