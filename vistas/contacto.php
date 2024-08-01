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
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-QRZPWCXDM8');
    </script>
    <title>Contacto</title>
    <link rel="shortcut icon" href="../ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/contacto.css">
    <style>
        .none{
            display:none;
        }
    </style>
</head>
<body>
    <h1 class="none">Apartado de contacto</h1>
    <?php require_once "layout/header.php" ?>
    <div class="hero_container">
        <?php for ($i=1; $i <= 12; $i++) { ?>
            <img src="../public/imagenes/contacto/collage/<?= $i ?>.webp" alt="Collage <?= $i ?>">
        <?php } ?>
    </div>
    
    <div class="title">
        <h2 class="contact-title">CONSTRUYAMOS TU SUEÑO JUNTOS , SOMOS TUS ALIADOS EN EL DISEÑO DE INTERIORES</h2>
        <div class="frase">
            <p class="parrafo">
                    ¡CONTÁCTANOS HOY MISMO PARA EMPEZAR!
            </p>
        </div>
    </div>
    
    <section class="contact">
        
        <div class="contact-contact-container">
            
            <div class="contact-description"> 
                <div class="img_container">
                    <?php 
                    $i=mt_rand(1,2);
                    if($i==1){?>
                        <img src="../public/imagenes/contacto/Contacto1.webp">
                      <?php  
                    }else{?>
                        <img src="../public/imagenes/contacto/Contacto2.webp">
                    <?php
                    }?>
                </div>
                <p style="background-color:#65AE3B; border-radius: 15px; color: white;">
                    DESCUBRE LA MÁGIA DE NUESTROS PRODUCTOS Y/O SERVICIOS, RELLENANDO EL FORMULARIO
                </p>        
            </div>

            <div class="contact-form-container">
                <!-- Formulario -->
                <form id="formContact" class="contact-form" action="../controladores/enviarcorreo.php" method="POST">
                    <!-- Nombres -->
                    <div class="box-container">
                        <span>NOMBRE</span>
                        <label for="full_name">
                            <input type="text" name="full_name" id="full_name" pattern="[a-zA-Z ]{2,254}" title="Solo debe contener letras. e.g. john" required>
                        </label>
                    </div>
                    <!-- Telefono -->
                    <div class="box-container">
                        <span>TELÉFONO</span>
                        <label for="telephone">
                            <input type="number" name="telephone" id="telephone" title="debe conter numeros" required>
                        </label>
                    </div>
                    <!-- E-mail -->
                    <div class="box-container">
                        <span>EMAIL</span>
                        <label for="email">
                            <input type="email" name="email" id="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="e.g. aso@gmail.com" required>
                        </label>
                    </div>
                    <!--Interses de Servicio-->
                    <div class="box-container">
                        <span>INTERESADO EN:</span>
                        <label for="interesed_service">
                            <input type="text" name="interesed_service" id="interesed_service" value="<?php echo $consulta?>" readonly>
                        </label>
                    </div>
                    <!-- Mensaje -->
                    <div class="box-container">
                        <span>MENSAJE</span>
                        <label for="career">
                            <textarea name="career" id="career" rows="5" required></textarea>
                        </label>
                    </div>
                    <!-- Button -->
                    <div class="box-container" id="button-container">
                        <!--<button>Enviar</button>-->
                        <button class="form__section boton"  id="enviar" name="enviar" >UN CLIC Y DÉJATE LLEVAR POR LA CREATIVIDAD</button>
                    </div>                 

                </form>
            </div>
        </div>

    </section>

    <?php require_once "layout/foother.php" ?>
    <script defer src="../public/js/contact.js"></script>
    </body>
</html>