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
    <title>Neon House Led-Nosotros</title>
    <link rel="shortcut icon" href="../ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/shared/nosotros.css">
    <style>
        .d-none{
            display:none;
        }
        
        .nosotros__titulo{
            margin-top: 100px;
            
        }
        @media(min-width: 900px){
                .nosotros__titulo{
            margin-top: 20px;
            
        }            
        }
        
    </style>
</head>
<body>
    <h1 class = "d-none">Nosotros - Neon Houese Led</h1>
<?php require_once "layout/header.php" ?>
<main class="main__nosotros">
        <div class="nosotros">
            <h2 class="nosotros__titulo">NOSOTROS</h2>
            <p class="nosotros__texto">Neon House Led es una empresa que se dedicada a la decoración y diseño de
                interiores así como la importación, fabricación y distribución de avisos publicitarios, insumos para
                neón, leds y paneles electrónicos. Además, ofrece mantenimiento de productos propios y/o terceros, así
                como decoraciones integrales y estructuras metálicas. Para ello, contamos con unidades de transporte,
                máquinas impresoras en láser, plotters de corte y un amplio taller para la ejecución de los trabajos
                solicitados. En esta compañía, te garantizamos propuestas creativas, innovadoras y de calidad. Para
                ello, trabajamos con las normas técnicas de calidad y seguridad que aseguren la plena satisfacción de
                sus sueños. </p>
        </div>
        <div class="section">
            <div class="vision">
                <h2 class="vision__titulo">MISIÓN</h2>
                <figure class="vision__imagen">
                    <img class="vision__img" src="../public/imagenes/nosotros/mision.webp" alt="visión de la empresa" width="100%" height="100%">
                </figure>
                <p class="vision__texto">
                    Somos una empresa importadora, fabricante de productos publicitarios buscando hacer realidad las
                    ideas de nuestros clientes, satisfaciendo sus necesidades al menor tiempo y al menos costo.
                </p>
            </div>
            <div class="mision">
                <h2 class="mision__titulo">VISIÓN</h2>
                <figure class="mision__imagen">
                    <img class="mision__img" src="../public/imagenes/nosotros/vision.webp" alt="visión de la empresa"  width="100%" height="100%">
                </figure>
                <p class="mision__texto">
                    Ser la empresa que exprese innovación y creatividades en el mundo de la publicidad, buscando evolucionar en nuestros procesos implementando la tecnología más eficiente. 
                </p>
            </div>
        </div>
    </main>
<?php require_once "layout/foother.php" ?>
</body>
</html>