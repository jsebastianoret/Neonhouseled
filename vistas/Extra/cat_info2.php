<?php session_start(); ?>

<?php 
$categoria = $_SESSION['info'];
$title = $_SESSION['categoria'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ver más</title>
  <meta name="robots" content="index, all, follow">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-QRZPWCXDM8"></script>
  <link rel="stylesheet" href="style.css" />
  <?php require_once "../layout/links.php" ?>
</head>

<body>
  <?php require_once "../layout/header.php" ?>

  <div class="slider-container">
            <div class="slider true">
                <div class="slide">
                    <div class="info">
                    <img loading="lazy" src="../../public/imagenes/Pagina-Extra/<?php echo $categoria;?>/<?php echo $categoria.'_01';?>.jpg" alt="imagen 1">
                        <div class="info__conte info__conte-format">
                            <p class="info__conte-tittle">TU MEJOR AVENTURA
                            COMIENZA AQUÍ</p>
                            <p class="info__conte-parr">
                            <?php
                                switch ($title) {
                                case "BAR":
                                ?>
                                    "Descubre cómo nuestros diseños de interiores para bares fusionan la calidez del ambiente con la sofisticación del  diseño contemporáneo."                                
                                <?php
                                        break;
                                        case "VETERINARIA":
                                ?>
                                    Un diseño elegante que transmite profesionalismo y confianza. Paredes en tonos suaves como beige y blanco, suelos de vinilo pulido y muebles de alta calidad.                                
                                <?php
                                        break;
                                        case "TERRAZA":
                                ?>
                                    Una terraza que evoca la calidez. Paredes de piedra natural y suelos de madera envejecida, con muebles de madera y cojines suaves completan el ambiente rústico y acogedor, perfecto para noches frescas al aire libre.                                
                                <?php
                                        break;
                                        case "SANGUCHERÍA":
                                ?>
                                    Un espacio acogedor y moderno que combina paredes en tonos neutros y vigas de madera expuestas, contrastando con suelos de cemento pulido, lámparas colgantes que completan la atmósfera acogedora y elegante.                                
                                <?php
                                        break;
                                        case "SALÓN DE SPA Y BARBERÍA":
                                ?>
                                    Un espacio con una estética industrial moderna. Paredes de ladrillo junto con luces colgantes combinadas con suelos de concreto pulido aportan un toque urbano y sofisticado.                                
                                <?php
                                        break;
                                        case "SALÓN DE BELLEZA Y BARBERÍA":
                                ?>
                                    Un espacio con una estética industrial moderna. Paredes de ladrillo junto con luces colgantes combinadas con suelos de concreto pulido aportan un toque urbano y sofisticado.                              
                                <?php
                                        break;
                                        case "ROPA":
                                ?>
                                    Obtén un diseño urbano en tu tienda con lámparas minimalistas, espejo moderno y un stand tipo indrustrial.                                
                                <?php
                                        break;
                                        case "RESTOBAR":
                                ?>
                                    Un oasis urbano con un diseño inspirado en la naturaleza. Paredes decoradas con murales tematicos y suelos de madera clara. Muebles de ratán y bambú, cojines coloridos crean un ambiente relajado y vibrante.                                
                                <?php
                                        break;
                                        case "RESTAURANTE":
                                ?>
                                    Un restaurante donde lo industrial se encuentra con la elegancia. Paredes de ladrillo expuesto y techos altos con tuberías a la vista se combinan con mesas de madera oscura y sillas de cuero                                
                                <?php
                                        break;
                                        case "RECEPCIONES":
                                ?>
                                    Un toque de elegancia contemporánea con lámpara colgantes de estilo vintage y detalles en cobre completan la estética chic y nostálgica.                                 
                                <?php
                                        break;
                                        case "POLLLERÍA":
                                ?>
                                    En esta pollería, menos es más Iluminación empotrada y discretos toques de verde con plantas colgantes dan vida y frescura al espacio.                                 
                                <?php
                                        break;
                                        case "PIZZERÍA":
                                ?>
                                    Obtén una  pizzería con diseño interior que está inspirado en la tradición italiana, con colores cálidos, elementos rústicos y detalles que evocan una autentica atmósfera.                                 
                                <?php
                                        break;
                                        case "PANADERÍA Y PASTELERÍA":
                                ?>
                                    Las panaderías suelen tener un diseño interior acogedor y cálido, con tonos suaves y elementos rústicos que evocan una sensación de tradición y calidez.                                
                                <?php
                                        break;
                                        case "MINIMARKET":
                                ?>
                                    Para una distribución estratégica de los productos, se recomienda el uso de estanterías bien organizadas y zonas claramente definidas para diferentes categorías de productos.                                
                                <?php
                                        break;
                                        case "HOTELES":
                                ?>
                                    Los detalles son clave para el diseño, desde finos muebles y decoraciones únicos. con sábanas y cobijas de alta cálidad que reflejan elegancia y estilo.                                
                                <?php
                                        break;
                                        case "HOGAR":
                                ?>
                                    Déjate cautivar por la belleza y la sofisticación de tu hogar,  donde el diseño de interiores fusiona la elegancia atemporal con las últimas tendencias.                                
                                <?php
                                        break;
                                        case "HELADERÍA":
                                ?>
                                    Déjate seducir por la dulce tentación de nuestra heladería, donde se crea un ambiente encantador y acogedor que te invita a disfrutar de momentos de placer y alegría.                                
                                <?php
                                        break;
                                        case "GIMNASIO":
                                ?>
                                    Prepárate para una experiencia de primera clase en nuestro gimnasio, donde el diseño de interiores te invita a entrenar con pasión y determinación en un ambiente de lujo y confort.                                
                                <?php
                                        break;
                                        case "FUENTE DE SODA":
                                ?>
                                    "Explora un ambiente retro y vibrante en nuestra fuente de soda, donde el diseño te ofrece momentos de auténtica diversión."                                
                                <?php
                                        break;
                                        case "FAST FOOD":
                                ?>
                                    "Explora un ambiente moderno y funcional en nuestro restaurante fast food,  donde el diseño de interiores se adapta perfectamente a tu estilo de vida activo y dinámico."                                
                                <?php
                                        break;
                                        case "ESTILO INDUSTRIAL":
                                ?>
                                    "Sumérgete en el estilo de confort en nuestros departamentos, donde el diseño de interiores te invita a vivir la vida con autenticidad y sofisticación."                                
                                <?php
                                        break;
                                        case "DORMITORIO PARA NIÑOS":
                                ?>
                                    Crea un mundo de fantasía y diversión en el dormitorio de tus pequeños,  donde el diseño de interiores se convierte en el escenario perfecto para sus aventuras imaginarias.                                
                                <?php
                                        break;
                                        case "DISCOTECA":
                                ?>
                                    "Descubre un universo de luces, colores y texturas en nuestra discoteca, donde el diseño de interiores te sumerge en un ambiente vibrante y lleno de energía.

                                <?php
                                        break;
                                        case "DEPARTAMENTO":
                                ?>
                                    Crea tu refugio urbano con nuestros diseños. Donde la funcionalidad se encuentra con el lujo.                                
                                <?php
                                        break;
                                        case "CLÍNICA DENTAL":
                                ?>
                                    Sumérgete en un espacio diseñado para tu bienestar y tranquilidad en nuestra clínica dental, donde el diseño de interiores crea un ambiente agradable y reconfortante.

                                <?php
                                        break;
                                        case "CEVICHERÍA":
                                ?>
                                    "Descubre cómo nuestras cevicherías combinan la tradición culinaria con la innovación del diseño de interiores, creando espacios que invitan a disfrutar de la buena comida y la gran experiencia."                                
                                <?php
                                        break;
                                        case "CAFETERÍA Y JUGUERÍA":
                                ?>
                                    Sumérgete en un ambiente lleno de encanto y personalidad en nuestras cafeterías, donde el diseño de interiores se convierte en parte de la experiencia.                                
                                <?php
                                        break;
                                        default:
                                ?>
                                    Descubre cómo nuestros diseños de interiores transforman cualquier espacio en un ambiente único y atractivo, combinando funcionalidad y estilo.                               <?php
                                    }
                                ?>
                            </p>
                        </div>
                        <img loading="lazy" src="../../public/imagenes/Pagina-Extra/<?php echo $categoria;?>/<?php echo $categoria.'_02';?>.jpg" alt="imagen 1">

                        <div class="info__conte1 info__conte-format">
                            <p class="info__conte-tittle">CONSTRUYENDO TU FUTURO</p>
                            <p class="info__conte-parr">
                            <?php
                                switch ($title) {
                                case "BAR":
                                ?>
                                    "Deléitate con la armonía de texturas, colores y formas en nuestros diseños de interiores para bares, diseñados para estimular los sentidos y la conversación."
                                <?php
                                        break;
                                        case "VETERINARIA":
                                ?>
                                    Casetas con diseño rustico de madera acogedora, la iluminación juega un rol importante para ellos para que no se sientas solos.                                
                                <?php
                                        break;
                                        case "TERRAZA":
                                ?>
                                    Una terraza transformada en un refugio verde en medio de la ciudad. Espacio decoradas con jardines verticales y suelos de madera natural. Muebles de ratán y cojines en tonos tierra, crean un ambiente relajado y acogedor.
                                <?php
                                        break;
                                        case "SANGUCHERÍA":
                                ?>
                                    Una sanguchería moderna con un diseño urbano sofisticado. Paredes grises con suelos de madera clara. Mobiliario elegante con mesas de maderas y sillas de diseño en colores neutros.
                                <?php
                                        break;
                                        case "SALÓN DE SPA Y BARBERÍA":
                                ?>
                                    Un salón spa con un diseño minimalista que invita a la paz y la relajación. Paredes blancas, suelos de madera clara y líneas limpias crean una atmósfera serena.
                                <?php
                                        break;
                                        case "SALÓN DE BELLEZA Y BARBERÍA":
                                ?>
                                    Un salón belleza con un diseño minimalista que invita a la paz y la relajación. Paredes blancas, suelos de madera clara y líneas limpias crean una atmósfera serena.
                                <?php
                                        break;
                                        case "ROPA":
                                ?>
                                    Un espacio limpio con paredes blancas y suelos de cemento pulido destacan los productos, mientras estanterías flotantes y percheros de metal dorado aportan un toque de lujo discreto.
                                <?php
                                        break;
                                        case "RESTOBAR":
                                ?>
                                    Un diseño limpio y moderno con líneas rectas y colores neutros. Paredes de concreto pulido, y una barra iluminada con luces LED añaden un toque de frescura y sofisticación.
                                <?php
                                        break;
                                        case "RESTAURANTE":
                                ?>
                                    Espacio cálido de casa de campo, paredes de ladrillo y madera, suelos de tablones antiguos, manteles de lino y lámparas de araña  que crearan un ambiente estetitco y hogareño en tu hogar.
                                <?php
                                        break;
                                        case "RECEPCIONES":
                                ?>
                                    Un diseño limpio y elegante con líneas rectas y una paleta de colores neutros. La recepción presenta muebles de diseño sencillo pero refinado, iluminación empotrada y superficies lisas en mármol blanco.
                                <?php
                                        break;
                                        case "POLLLERÍA":
                                ?>
                                    Mesas de madera maciza acompañadas de sillas de metal dan un toque industrial chic, mientras que las lámparas colgantes con bombillas de filamento añaden un cálido resplandor al espacio.
                                <?php
                                        break;
                                        case "PIZZERÍA":
                                ?>
                                    La disposición de mesas y sillas está pensada para fomentar la interacción social y crear un ambiente animado y familiar.
                                <?php
                                        break;
                                        case "PANADERÍA Y PASTELERÍA":
                                ?>
                                    Los detalles son importantes en el diseño interior, los espacios de venta suelen estar diseñados para permitir una experiencia de compra fácil y cómoda.
                                <?php
                                        break;
                                        case "MINIMARKET":
                                ?>
                                    Los minimarkets modernos a menudo incorporan tecnología, como sistemas de punto de venta digitalizados y pantallas táctiles, para agilizar el proceso de compra y mejorar la experiencia del cliente.
                                <?php
                                        break;
                                        case "HOTELES":
                                ?>
                                    La iluminación juega un papel crucial. con sistemas de iluminación  que crean ambientes cálidos y acogedores.
                                <?php
                                        break;
                                        case "HOGAR":
                                ?>
                                    "Encuentra la tranquilidad y la serenidad que buscas en tu hogar, donde el diseño de interiores creará espacios que  fomenten el bienestar y conexión con la naturaleza."
                                <?php
                                        break;
                                        case "HELADERÍA":
                                ?>
                                    "Vive la emoción de disfrutar de un helado artesanal en un ambiente único  y acogedor en nuestra heladería, donde el diseño de interiores te invita a relajarte  y disfrutar de cada bocado."
                                <?php
                                        break;
                                        case "GIMNASIO":
                                ?>
                                    "Bienvenido a un lugar donde el diseño de interiores te invita a entrenar con estilo y comodidad. En nuestro gimnasio, cada detalle está pensado para  ofrecerte una experiencia única."
                                <?php
                                        break;
                                        case "FUENTE DE SODA":
                                ?>
                                    "Descubre un oasis de frescura y sabor en nuestra fuente de soda,  donde el diseño de interiores crea un ambiente acogedor y lleno de energía para disfrutar de tus bebidas favoritas."
                                <?php
                                        break;
                                        case "FAST FOOD":
                                ?>
                                    "Vive la emoción de la comida rápida en un ambiente moderno y acogedor en nuestro restaurante fast food, donde el diseño de interiores te invita a disfrutar de tus platillos favoritos con estilo."
                                <?php
                                        break;
                                        case "ESTILO INDUSTRIAL":
                                ?>
                                    "Sumérgete en la elegancia cruda de nuestros departamentos de estilo industrial,  donde el diseño de interiores celebra la belleza de los espacios abiertos y los elementos arquitectónicos originales."
                                <?php
                                        break;
                                        case "DORMITORIO PARA NIÑOS":
                                ?>
                                    "Convierte el dormitorio de tus hijos en un espacio de aprendizaje y juego con nuestro diseño de interiores, donde la creatividad y la funcionalidad van de la mano."
                                <?php
                                        break;
                                        case "DISCOTECA":
                                ?>
                                    "Explora una nueva dimensión de entretenimiento en nuestra discoteca, donde el diseño de interiores crea un escenario perfecto para tus noches de baile y diversión."

                                <?php
                                        break;
                                        case "DEPARTAMENTO":
                                ?>
                                    Descubre nuestros exclusivos diseños de interiores para departamentos, donde cada detalle cuenta una historia."
                                <?php
                                        break;
                                        case "CLÍNICA DENTAL":
                                ?>
                                    "Déjate cuidar en un entorno donde cada detalle está pensado para tu comodidad y satisfacción. En nuestra clínica dental, el diseño de interiores es parte fundamental de tu experiencia."

                                <?php
                                        break;
                                        case "CEVICHERÍA":
                                ?>
                                    "Sumérgete en una experiencia costera auténtica en nuestra cevichería, donde el diseño de interiores recrea la frescura del mar y la calidez de la playa."

                                <?php
                                        break;
                                        case "CAFETERÍA Y JUGUERÍA":
                                ?>
                                    "Encuentra la inspiración en nuestras cafeterías, donde el diseño de interiores refleja la pasión por el arte, la cultura y, por supuesto, el café."
                                <?php
                                        break;
                                        default:
                                ?>
                                    Descubre cómo nuestros diseños de interiores transforman espacios comunes en lugares extraordinarios, combinando funcionalidad con estética para crear ambientes que inspiran y cautivan.
                                <?php
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                <div class="info">
                <img loading="lazy" src="../../public/imagenes/Pagina-Extra/<?php echo $categoria;?>/<?php echo $categoria.'_03';?>.jpg" alt="imagen 1">

                        <div class="info__conte info__conte-format">
                            <p class="info__conte-tittle">HACEMOS DE LO IMPOSIBLE, ALGO SIMPLE</p>
                            <p class="info__conte-parr">
                            <?php
                                switch ($title) {
                                case "BAR":
                                ?>
                                    "Sumérgete en un universo de elegancia y estilo con nuestros diseños de interiores para bares, donde cada espacio cuenta una historia diferente."
                                <?php
                                        break;
                                        case "VETERINARIA":
                                ?>
                                    Veterinaria con diseño natural, tonos verdes y marrones suaves, amplios ventanales para luz natural. Ambiente acogedor para mascotas y dueños.
                                <?php
                                        break;
                                        case "TERRAZA":
                                ?>
                                    Una terraza moderna con un diseño sofisticado. Paredes en tonos neutros, suelos de baldosas elegantes y muebles minimalistas en blanco y negro.
                                <?php
                                        break;
                                        case "SANGUCHERÍA":
                                ?>
                                    Tu sanguchería en un espacio lleno de personalidad. Paredes con decoraciones tematicas, suelos claros y una mezcla de muebles contemporáneos hacen de tu local un lugar único y especial.
                                <?php
                                        break;
                                        case "SALÓN DE SPA Y BARBERÍA":
                                ?>
                                     Un salón spa que exuda lujo moderno. Iluminación empotradacon pisos y paredes blancas sostificadas crean un refugio elegante y sofisticado.
                                <?php
                                        break;
                                        case "SALÓN DE BELLEZA Y BARBERÍA":
                                ?>
                                     Un salón de belleza que exuda lujo moderno. Iluminación empotradacon pisos y paredes blancas sostificadas crean un refugio elegante y sofisticado.
                                <?php
                                        break;
                                        case "ROPA":
                                ?>
                                    Una tienda que evoca la elegancia con tonos negros y grises aporta una sensación de exclusividad en el cliente.
                                <?php
                                        break;
                                        case "RESTOBAR":
                                ?>
                                    Un estilo moderno y sostificado añade elegancia a tu restobar junto a paredes negras y luces claras empotradas. La paleta de colores juega un rol importante en este increíble diseño. 
                                <?php
                                        break;
                                        case "RESTAURANTE":
                                ?>
                                    Convierte tu local en un rincón mediterráneo, con paredes blancas, suelos de terracota y toques azules, que maximizaran la experiente de tus clientes.
                                <?php
                                        break;
                                        case "RECEPCIONES":
                                ?>
                                    Esta recepción presenta una integración armoniosa con las macetas de las plantas y el diseño arquitectónico elegante de los muebles, piso mármol y hermoso candelabro. 
                                <?php
                                        break;
                                        case "POLLLERÍA":
                                ?>
                                    El mobiliario es una mezcla de piezas únicas y eclécticas, con sillas de diferentes estilos y colores.
                                <?php
                                        break;
                                        case "PIZZERÍA":
                                ?>
                                    Se destacan por la presencia de un horno de leña a la vista, que no solo añade un toque de autenticidad, sino que también crea un ambiente acogedor y reconfortante.
                                <?php
                                        break;
                                        case "PANADERÍA Y PASTELERÍA":
                                ?>
                                    Se busca una combinación exclusiva de colores pasteles que resalten, junto con un diseño de vitrinas diseñado para realzar la frescura y la variedad de los productos recién horneados.
                                <?php
                                        break;
                                        case "MINIMARKET":
                                ?>
                                    Los colores suelen ser brillantes y llamativos para atraer la atención de los clientes y mejorar la experiencia de compra.
                                <?php
                                        break;
                                        case "HOTELES":
                                ?>
                                    El uso de materiales de alta calidad, cómo el mármol, madera noble y cuadros aportan una sensación de lujo y confort. 
                                <?php
                                        break;
                                        case "HOGAR":
                                ?>
                                    "Sumérgete en la calidez y la comodidad de tu hogar, donde el diseño transforma cada espacio en un refugio acogedor y lleno de vida para ti y tu familia."
                                <?php
                                        break;
                                        case "HELADERÍA":
                                ?>
                                    "Déjate sorprender por la creatividad de nuestro diseño de interiores en nuestra heladería, donde los detalles que hacen una memorable experiencia."
                                <?php
                                        break;
                                        case "GIMNASIO":
                                ?>
                                    "Descubre cómo nuestro diseño de interiores transforma tu experiencia en el gimnasio, convirtiéndolo en un momento de bienestar y superación personal."
                                <?php
                                        break;
                                        case "FUENTE DE SODA":
                                ?>
                                    "Sumérgete en el encanto de las fuentes de soda, donde nuestro diseño de interiores te transporta a una época dorada de sabores y experiencias inolvidables."
                                <?php
                                        break;
                                        case "FAST FOOD":
                                ?>
                                    "Experimenta la combinación perfecta entre rapidez y comodidad en nuestro restaurante fast food, donde el diseño de interiores está pensando en tu necesidad."
                                <?php
                                        break;
                                        case "ESTILO INDUSTRIAL":
                                ?>
                                    "Descubre la elegancia en nuestros  departamentos de estilo industrial, donde el diseño combina la funcionalidad contemporánea con la estética cruda de la vida urbana."
                                <?php
                                        break;
                                        case "DORMITORIO PARA NIÑOS":
                                ?>
                                    "Vive la experiencia de crear el dormitorio perfecto para tus hijos, donde el diseño de interiores combina funcionalidad y estilo para ofrecerles un espacio que crece con ellos."

                                <?php
                                        break;
                                        case "DISCOTECA":
                                ?>
                                    "Prepárate para una experiencia única en nuestra discoteca, donde el diseño de interiores te sorprenderá en cada esquina, creando atmósferas que te cautivarán desde el primer momento."
                                <?php
                                        break;
                                        case "DEPARTAMENTO":
                                ?>
                                    "Tu hogar, tu estilo. Encuentra la armonía perfecta entre comodidad y elegancia con nuestro diseño de interiores para departamentos."
                                <?php
                                        break;
                                        case "CLÍNICA DENTAL":
                                ?>
                                    "Sonríe con confianza en nuestra clínica dental, donde el diseño de interiores crea un ambiente acogedor y relajante para tu bienestar y comodidad."
                                <?php
                                        break;
                                        case "CEVICHERÍA":
                                ?>
                                    "Siente la brisa marina en cada rincón de nuestra cevichería, donde el diseño te transporta directamente a las playas más exóticas."
                                <?php
                                        break;
                                        case "CAFETERÍA Y JUGUERÍA":
                                ?>
                                    "Déjate llevar por la frescura y la vitalidad de nuestras juguerías, donde encontrarás  un ambiente vibrante y lleno de energía."
                                <?php
                                        break;
                                        default:
                                ?>
                                    Sumérgete en un mundo de diseño y confort con nuestros espacios transformados por diseños de interiores únicos. Desde bares hasta hogares, cada ambiente es una experiencia que combina estilo y funcionalidad para satisfacer tus necesidades y crear memorables momentos.
                                <?php
                                    }
                                ?>
                            </p>
                        </div>
                        <img loading="lazy" src="../../public/imagenes/Pagina-Extra/<?php echo $categoria;?>/<?php echo $categoria.'_04';?>.jpg" alt="imagen 1">

                        <div class="info__conte1 info__conte-format">
                            <p class="info__conte-tittle">SOÑANDO EN GRANDE</p>
                            <p class="info__conte-parr">
                            <?php
                                switch ($title) {
                                case "BAR":
                                ?>
                                    "Explora la fusión perfecta entre lo clásico y lo contemporáneo en nuestros diseños de interiores para bares, donde la tradición se encuentra con la innovación."
                                <?php
                                        break;
                                        case "VETERINARIA":
                                ?>
                                    Un espacio contemporáneo y eficiente. Paredes en colores neutros con toques de azul suelos de baldosas fáciles de limpiar.
                                <?php
                                        break;
                                        case "TERRAZA":
                                ?>
                                    Detalles en acero inoxidable negro y una iluminación LED sutil crean un ambiente sofisticado y elegante ideal para cenas al aire libre.
                                <?php
                                        break;
                                        case "SANGUCHERÍA":
                                ?>
                                    Sanguchería moderna con diseño urbano sofisticado, paredes claras y madera clara. Mobiliario elegante con mesas cuadradas y sillas neutras, Barra con luces LED que  que cautivará a tus clientes
                                <?php
                                        break;
                                        case "SALÓN DE SPA Y BARBERÍA":
                                ?>
                                     Un lugar donde lo rústico se encuentra con la sofisticación. Paredes negras y detalles de madera desgastada y lámparas de hierro fundido añaden un toque cálido y acogedor.
                                <?php
                                        break;
                                        case "SALÓN DE BELLEZA Y BARBERÍA":
                                ?>
                                     Un lugar donde lo rústico se encuentra con la sofisticación. Paredes negras y detalles de madera desgastada y lámparas de hierro fundido añaden un toque cálido y acogedor.
                                <?php
                                        break;
                                        case "ROPA":
                                ?>
                                    Un espacio que celebra la sostenibilidad y la naturaleza con estanterías de bambú y percheros de metal reciclado. Grandes plantas y una iluminación cálida crean un ambiente ecológico y acogedor.
                                <?php
                                        break;
                                        case "RESTOBAR":
                                ?>
                                    Un restobar que combina lo mejor del estilo vintage con un toque industrial. Mesas de madera recuperada y taburetes de cuero crean un ambiente nostálgico y acogedor.
                                <?php
                                        break;
                                        case "RESTAURANTE":
                                ?>
                                    Un restaurante que captura el pulso de la ciudad con un diseño contemporáneo. Paredes de concreto pulido con tuberías expuestas y luces de neón crean un ambiente vibrante.
                                <?php
                                        break;
                                        case "RECEPCIONES":
                                ?>
                                    Imagina tu recepción con un estilo en tonos grises y dorados que resalta la iluminación, suelos de mármol pulido, techos altos con arañas de cristal y muebles de diseño contemporáneo.
                                <?php
                                        break;
                                        case "POLLLERÍA":
                                ?>
                                    Imagina una pollería donde lo rústico se encuentra con lo moderno. Paredes de ladrillo visto combinadas con elementos de acero inoxidable y madera crean un ambiente acogedor y contemporáneo.
                                <?php
                                        break;
                                        case "PIZZERÍA":
                                ?>
                                    Los detalles como manteles a cuadros, botellas de vino como parte de la decoración y música italiana de fondo completan la experiencia, transportando a los clientes a un rincón de Italia.
                                <?php
                                        break;
                                        case "PANADERÍA Y PASTELERÍA":
                                ?>
                                    Las decoraciones temáticas relacionadas con la repostería, como utensilios de cocina vintage o  con áreas de degustación, mesas y sillas hacen que los clientes puedan disfrutar de sus productos recién horneados.
                                <?php
                                        break;
                                        case "MINIMARKET":
                                ?>
                                    Los minimarkets suelen tener un diseño interior funcional y eficiente, optimizado para maximizar el espacio disponible y facilitar la circulación de los clientes.
                                <?php
                                        break;
                                        case "HOTELES":
                                ?>
                                    Los hoteles sofisticados suelen presentar un diseño interior elegante y contemporáneo, con líneas limpias y minimalistas.
                                <?php
                                        break;
                                        case "HOGAR":
                                ?>
                                    "Descubre la armonía perfecta entre forma y función en nuestros hogares, donde el diseño de interiores combina la estética con la practicidad para ofrecerte un estilo de vida incomparable."
                                <?php
                                        break;
                                        case "HELADERÍA":
                                ?>
                                    "Bienvenido a un mundo de colores y sabores en nuestra heladería, donde el diseño de interiores te transportarás a un lugar de ensueño."
                                <?php
                                        break;
                                        case "GIMNASIO":
                                ?>
                                    "Vive la emoción de entrenar en un espacio moderno y elegante en nuestro gimnasio, donde el diseño de interiores te brinda  el ambiente perfecto para lograr tus objetivos fitness."
                                <?php
                                        break;
                                        case "FUENTE DE SODA":
                                ?>
                                    "Prepárate para una experiencia retro-chic en nuestra fuente de soda, donde el diseño de interiores te invita a disfrutar de la nostalgia de los clásicos de siempre con un toque moderno y fresco."
                                <?php
                                        break;
                                        case "FAST FOOD":
                                ?>
                                    "Descubre cómo el diseño de interiores puede transformar tu experiencia en un restaurante fast food, convirtiendo cada comida en un momento especial y lleno de sabor."
                                <?php
                                        break;
                                        case "ESTILO INDUSTRIAL":
                                ?>
                                    "Explora la sofisticación sin pretensiones en nuestros departamentos de estilo industrial, donde la combinación de texturas y acabados crea un ambiente moderno y acogedor."
                                <?php
                                        break;
                                        case "DORMITORIO PARA NIÑOS":
                                ?>
                                    "Descubre cómo hacer del dormitorio de tus pequeños un lugar único y especial con nuestro diseño de interiores, donde la personalidad y los intereses de tus hijos se reflejan en cada detalle."

                                <?php
                                        break;
                                        case "DISCOTECA":
                                ?>
                                    "Déjate llevar por la magia de nuestro diseño de interiores, donde cada detalle está pensado para maximizar  tu experiencia en nuestra discoteca, desde la pista de baile hasta los rincones más íntimos."
                                <?php
                                        break;
                                        case "DEPARTAMENTO":
                                ?>
                                    "Tu oasis en la ciudad. Descubre cómo nuestros diseños de interiores para departamentos crean un refugio tranquilo en medio del ajetreo urbano."
                                <?php
                                        break;
                                        case "CLÍNICA DENTAL":
                                ?>
                                    "Descubre cómo nuestra clínica dental combina la funcionalidad con la estética en un diseño de interiores pensado para tu tranquilidad y satisfacción."
                                <?php
                                        break;
                                        case "CEVICHERÍA":
                                ?>
                                    "Encuentra la armonía perfecta entre lo rústico  y lo contemporáneo en nuestra cevichería, donde el diseño de interiores refleja la autenticidad y la frescura de los platos."
                                <?php
                                        break;
                                        case "CAFETERÍA Y JUGUERÍA":
                                ?>
                                    "Disfruta de momentos de bienestar y placer en nuestras juguerías, donde el diseño de interiores refleja nuestra pasión por la salud y el bienestar."
                                <?php
                                        break;
                                        default:
                                ?>
                                    Explora la fusión perfecta entre lo clásico y lo contemporáneo en nuestros diseños de interiores para bares, donde cada detalle está meticulosamente diseñado para estimular tus sentidos y crear un ambiente acogedor y sofisticado.
                                <?php
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="arrow left" onclick="moveSlide(-1)">&#10094;</button>
            <button class="arrow right" onclick="moveSlide(1)">&#10095;</button>
        </div>
    

  <?php require_once "../layout/foother.php" ?>
</body>
<script>
        let currentIndex = 0;

        function updateArrows() {
            const leftArrow = document.querySelector('.arrow.left');
            const rightArrow = document.querySelector('.arrow.right');

            if (currentIndex === 0) {
                leftArrow.style.display = 'none';
                rightArrow.style.display = 'block';
            } else if (currentIndex === 1) {
                leftArrow.style.display = 'block';
                rightArrow.style.display = 'none';
            } else {
                leftArrow.style.display = 'none';
                rightArrow.style.display = 'none';
            }
        }

        function moveSlide(direction) {
            const slider = document.querySelector('.slider');
            const totalSlides = document.querySelectorAll('.slide').length;

            currentIndex += direction;

            if (currentIndex < 0) {
                currentIndex = 0;
            } else if (currentIndex >= totalSlides) {
                currentIndex = totalSlides - 1;
            }

            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
            updateArrows();
        }
        // Función para añadir o eliminar la clase según el tamaño de la pantalla
        function handleResize() {
            const sliderContainer = document.querySelector('.slider');
            const active = document.querySelector('.true');
            if (window.innerWidth <= 480) {
                sliderContainer.classList.remove('slider');
            } else {
                active.classList.add('slider');
            }
        }
        window.addEventListener('resize', handleResize);
        updateArrows();
    </script>