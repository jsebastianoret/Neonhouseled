<?php
// Incluir el archivo de configuración de la base de datos
require_once '../admin2/config/db.php';

try {
    $sql = "SELECT titulo, nombre_categoria, imagen_principal, id FROM posting_blog";
    $stmt = $conn->query($sql);

    $articulos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error al ejecutar la consulta: " . $e->getMessage());
}

$articulosPorPagina = 4; // Número de artículos por página
$totalArticulos = count($articulos); // Total de artículos
$totalPaginas = ceil($totalArticulos / $articulosPorPagina); // Total de páginas

// Obtener la página actual desde la URL (predeterminada a 1 si no está establecida)
$paginaActual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$paginaActual = max(1, min($totalPaginas, $paginaActual)); // Asegurarse de que la página actual esté en el rango válido

// Calcular el índice de inicio para los artículos de la página actual
$indiceInicio = ($paginaActual - 1) * $articulosPorPagina;
$articulosActuales = array_slice($articulos, $indiceInicio, $articulosPorPagina); // Obtener los artículos para la página actual
?>

<!DOCTYPE html>
<html lang="en">

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
    <title>Neon House Led - Blog</title>    
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="shortcut icon" href="../ico.ico" type="image/x-icon">    
    <link rel="stylesheet" href="../public/css/blog.css">
    <link rel="stylesheet" href="../public/css/global.css">
    <link rel="stylesheet" href="../public/css/categorias-blog.css">
    <link rel="stylesheet" href="../public/css/estilos-blog.css">
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
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

    <section class="blog-navigation">
        <ul>
            <li><a href="#">Artículos</a></li>
            <li><a href="#">Tips</a></li>
            <li><a href="#">Tendencias</a></li>
            <li><a href="#">Novedades</a></li>
            <li><a href="#">Ideas</a></li>
        </ul>
    </section>
    <script src="../public/bootstrap/bootstrap.bundle.min.js"></script>

    <div class="categorias">
        <div class="contenedor-principal">
            <h1 id="tituloPrincipal">Todos los artículos</h1>
            <section class="articulos" id="articulos">
                <?php foreach ($articulosActuales as $articulo) { ?>
                    <div class="articulo">
                    <a href="<?php echo htmlspecialchars('../vistas/blogs/mediaBlogs' . $articulo['id']). '.php'; ?>">                            <img src="<?php echo htmlspecialchars('../public/imagenes/imagenesBlogBd/' . $articulo['imagen_principal']); ?>" width="100%">
                            <div class="info-articulo">
                                <span class="categoria"><?php echo htmlspecialchars($articulo['nombre_categoria']); ?></span>
                                <h2><?php echo htmlspecialchars($articulo['titulo']); ?></h2>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </section>

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
                <!-- Categorías -->
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
    </div>
    
    <?php include 'layout/foother.php' ?>
    <script>
        var todosLosArticulos = <?php echo json_encode($articulos); ?>;
        document.getElementById('botonBuscar').addEventListener('click', function() {
            var textoBuscar = document.getElementById('buscarTexto').value.toLowerCase();
            var articulos = document.getElementById('articulos');
            var tituloPrincipal = document.getElementById('tituloPrincipal');
            articulos.innerHTML = ''; // Limpiar los artículos mostrados
            var encontrado = false;

            todosLosArticulos.forEach(function(articulo) {
                var titulo = articulo.titulo.toLowerCase();
                var categoria = articulo.nombre_categoria.toLowerCase();
                if (titulo.includes(textoBuscar) || categoria.includes(textoBuscar)) {
                    var articuloHtml = `
                        <div class="articulo">
                            <a href="./vista-blog.php?id=${articulo.id}">
                                <img src="../public/imagenes/imagenesBlogBd/${articulo.imagen_principal}" width="100%">
                                <div class="info-articulo">
                                    <span class="categoria">${articulo.nombre_categoria}</span>
                                    <h2>${articulo.titulo}</h2>
                                </div>
                            </a>
                        </div>
                    `;
                    articulos.innerHTML += articuloHtml;
                    encontrado = true;
                }
            });

            if (textoBuscar === "") {
                tituloPrincipal.innerText = "Todos los artículos";
                tituloPrincipal.classList.remove('resultado-busqueda');
                window.location.reload(); // Recargar la página si la búsqueda está vacía
            } else if (encontrado) {
                tituloPrincipal.innerText = "Resultado de la búsqueda";
                tituloPrincipal.classList.add('resultado-busqueda');
            } else {
                tituloPrincipal.innerText = "No se encontraron resultados";
                tituloPrincipal.classList.add('resultado-busqueda');
            }
        });

        document.getElementById('buscarTexto').addEventListener('input', function() {
            if (this.value === "") {
                document.getElementById('tituloPrincipal').innerText = "Todos los artículos";
                document.getElementById('tituloPrincipal').classList.remove('resultado-busqueda');
                window.location.reload(); // Recargar la página si la búsqueda está vacía
            }
        });
    </script>
</body>
</html>
