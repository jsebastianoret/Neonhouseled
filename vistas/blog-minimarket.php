<?php
require_once '../admin2/config/db.php';
try {
    // Configurar PDO para que lance excepciones en caso de error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Parámetros para paginación
    $articulosPorPagina = 4; // Número de artículos por página
    $paginaActual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $paginaActual = max(1, $paginaActual); // Asegurarse de que la página actual esté en el rango válido

    // Consulta para obtener el total de artículos para la categoría
    $categoria = isset($_GET['categoria']) ? $_GET['categoria'] : 'minimarket'; 
    $stmtTotal = $conn->prepare("SELECT COUNT(*) FROM posting_blog WHERE LOWER(nombre_categoria) = :categoria");
    $stmtTotal->bindValue(':categoria', strtolower($categoria));
    $stmtTotal->execute();
    $totalArticulos = $stmtTotal->fetchColumn();

    $totalPaginas = ceil($totalArticulos / $articulosPorPagina); // Total de páginas

    // Calcular el índice de inicio para los artículos de la página actual
    $indiceInicio = ($paginaActual - 1) * $articulosPorPagina;

    // Consulta para obtener los artículos de la página actual
    $stmt = $conn->prepare("SELECT * FROM posting_blog WHERE LOWER(nombre_categoria) = :categoria LIMIT :offset, :itemsPorPagina");
    $stmt->bindValue(':categoria', strtolower($categoria));
    $stmt->bindValue(':offset', $indiceInicio, PDO::PARAM_INT);
    $stmt->bindValue(':itemsPorPagina', $articulosPorPagina, PDO::PARAM_INT);
    $stmt->execute();

    $articulos = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
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
    <title>Blog - MINIMARKET</title>
    <link rel="shortcut icon" href="../ico.ico" type="image/x-icon">

    <link rel="stylesheet" href="../public/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../public/css/categorias-blog.css">
    <link rel="stylesheet" href="../public/css/style-blog.css">
    <link rel="stylesheet" href="../public/css/global.css">
    <link rel="stylesheet" href="../public/css/blog.css">
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Añadir el estilo para los enlaces -->
    <style>
        .articulos__item a {
            color: inherit;
            text-decoration: none;
        }

        .articulos__item a:hover {
            color: inherit;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1 style="display:none">Sección de Blog</h1>
    <?php require_once "layout/header.php"; ?>

    <section class="image_blog position-relative section-padding">
        <div class="position-absolute top-50 start-0 translate-middle-y text-left mx-4 pl-5">
            <div class="mx-5">
                <h1 class="title-blog">BLOG</h1>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!--CONTENIDO CATEGORIAS BLOG-->
    <main class="contenedor">
        <div class="contenedor__articulos">
            <div class="contenedor__articulos__swiper">
                <div class="swiper mySwiper">
                    <div class="swipe-slider__texto">
                        <h3>MINIMARKET</h3>
                        <p>En esta sección encontrarás temas relacionados con el diseño de interiores enfocado en entornos de trabajo profesionales de minimarkets.</p>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../public/imagenes/galeria-imagenes/belleza/1.webp" alt="Imagen1-slider-blog">
                        </div>
                        <div class="swiper-slide">
                            <img src="../public/imagenes/galeria-imagenes/belleza/1.webp" alt="Imagen2-slider-blog">
                        </div>
                        <div class="swiper-slide">
                            <img src="../public/imagenes/galeria-imagenes/belleza/1.webp" alt="Imagen3-slider-blog">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="articulos__items">
                <?php foreach ($articulos as $articulo) { ?>
                    <div class="articulos__item">
                    <a href="<?php echo htmlspecialchars('../vistas/blogs/mediaBlogs' . $articulo['id']). '.php'; ?>">
                            <div class="articulos__item__imagen">
                                <img src="<?php echo htmlspecialchars('../public/imagenes/imagenesBlogBd/' . $articulo['imagen_principal']); ?>" width="100%">
                            </div>
                            <div class="articulos__item__texto">
                                <p><?php echo htmlspecialchars('MINIMARKET'); ?></p>
                                <h4><?php echo htmlspecialchars($articulo['titulo']); ?></h4>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="paginacion">
            <?php if ($paginaActual > 1) { ?>
                <button onclick="window.location.href='?pagina=<?php echo $paginaActual - 1; ?>'">Atrás</button>
            <?php } ?>
            <span><?php echo $paginaActual; ?>/<?php echo $totalPaginas; ?></span>
            <?php if ($paginaActual < $totalPaginas) { ?>
                <button onclick="window.location.href='?pagina=<?php echo $paginaActual + 1; ?>'">Siguiente</button>
            <?php } ?>
        </div>
        </div>
        <div class="barra-lateral">
            <div class="caja-buscar">
                <input type="text" id="buscarTexto" placeholder="Buscar...">
                <button id="botonBuscar"><img src="../admin2/public/img/lupa.webp" alt="Buscar"></button>
            </div>
            <ul>
            <li><strong>CATEGORÍAS:</strong></li>
            <li><a href="./blog-restaurante.php">• RESTAURANTE.</a></li>
            <li><a href="./blog-cevicheria.php">• CEVICHERIA.</a></li>
            <li><a href="./blog-fast-food.php">• FAST FOOD.</a></li>
            <li><a href="./blog-sangucheria.php">• SANGUCHERIA.</a></li>
            <li><a href="./blog-polleria.php">• POLLERIA.</a></li>
            <li><a href="./blog-discoteca.php">• DISCOTECA.</a></li>
            <li><a href="./blog-pizzeria.php">• PIZZERIA.</a></li>
            <li><a href="./blog-cafe-jugo.php">• CAFETERIA Y JUGUERIA.</a></li>
            <li><a href="./blog-pan-pastel.php">• PANADERIA Y PASTELERIA.</a></li>
            <li><a href="./blog-spa-barberia.php">• SALON SPA Y BARBERIA.</a></li>
            <li><a href="./blog-bar.php">• BAR.</a></li>
            <li><a href="./blog-hogar.php">• HOGAR.</a></li>
            <li><a href="./blog-minimarket.php">• MINIMARKET.</a></li>
            <li><a href="./blog-clinica-dental.php">• CLINICA DENTAL.</a></li>
            <li><a href="./blog-departamento.php">• DEPARTAMENTO.</a></li>
            <li><a href="./blog-dormitorio.php">• DORMITORIO PARA NIÑOS.</a></li>
            <li><a href="./blog-estilo-industrial.php">• ESTILO INDUSTRIAL.</a></li>
            <li><a href="./blog-fuente-soda.php">• FUENTE DE SODA.</a></li>
            <li><a href="./blog-gimnasio.php">• GIMNASIO.</a></li>
            <li><a href="./blog-hoteles.php">• HOTELES.</a></li>
            <li><a href="./blog-recepciones.php">• RECEPCIONES.</a></li>
            <li><a href="./blog-restobar.php">• RESTOBAR.</a></li>
            <li><a href="./blog-belleza-barberia.php">• SALON BELLEZA Y BARBERIA.</a></li>
            <li><a href="./blog-terraza.php">• TERRAZA.</a></li>
            <li><a href="./blog-ropa.php">• ROPA.</a></li>
            <li><a href="./blog-veterinaria.php">• VETERINARIA.</a></li>
            <li><a href="./blog-heladeria.php">• HELADERIA.</a></li>
            </ul>
        </div>
    </main>

    <?php include './layout/foother.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            spaceBetween: 30,
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        document.getElementById('botonBuscar').addEventListener('click', function() {
            var textoBuscar = document.getElementById('buscarTexto').value.toLowerCase();
            var articulos = document.querySelectorAll('.articulos__item');

            articulos.forEach(function(articulo) {
                var titulo = articulo.querySelector('h4').innerText.toLowerCase();
                if (titulo.includes(textoBuscar)) {
                    articulo.style.display = 'block';
                } else {
                    articulo.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
