        <?php
        session_start();
        ?>
        <!DOCTYPE html>
        <html lang="es"> 
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Transformando el Espacio Nocturno: El Arte del Diseño de Discotecas</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

            <link rel="stylesheet" href="../../public/css/all_blog.css">
            <?php require_once "../layout/links.php" ?>
        </head> 
        <body>
            <?php require_once "../layout/header.php" ?>
            <script>
                // Función para calcular la diferencia en días
                function calcularDiasDiferencia(fechaPublicacion) {
                    const fechaActual = new Date();
                    const fechaPub = new Date(fechaPublicacion);
                    const diferenciaMs = fechaActual - fechaPub;
                    const diferenciaDias = Math.floor(diferenciaMs / (1000 * 60 * 60 * 24));
                    return diferenciaDias;
                }
                // Función para actualizar el texto en el segundo span
                function actualizarTextoFechaRelativa() {
                    const fechaPublicacionStr = document.getElementById('f').textContent.replace('Publicado: ', '');
                    const diasDiferencia = calcularDiasDiferencia(fechaPublicacionStr); 
                    const textoFechaRelativa = diasDiferencia === 0 ? 'hoy' :
                                    diasDiferencia === 1 ? 'hace 1 día' :
                                    'hace ' + diasDiferencia + ' días';

                    document.getElementById('hoy').textContent = textoFechaRelativa;
                }
                document.addEventListener('DOMContentLoaded', actualizarTextoFechaRelativa);
            </script>
            <div class="blog-post">
                <div class="blog-container">
                    <span class="categoria">Categoría: Discoteca</span>
                    <header class="blog-header">
                        <h1>Transformando el Espacio Nocturno: El Arte del Diseño de Discotecas</h1>
                        <div class="blog-banner">
                            <img src="../../public/imagenes/imagesBlogBd/../../../public/imagenes/imagesBlogBd/emprender-discoteca.jpg" alt="Imagen Principal" class="imgprin">
                            <div class="text-box">
                                <p>¡Bienvenidos al mundo vibrante y emocionante del diseño de discotecas! En este blog, exploraremos cómo convertir un simple espacio en un epicentro de diversión y estilo, donde la música y la arquitectura se fusionan para crear una experiencia inolvidable.</p>
                            </div>
                        </div>
                    </header>
                    <main class="blog-main">
                        <article class="blog-article">
                            <hr>
                            <div class="meta">
                                <span id="f">Publicado: </span>
                                <span id="hoy"></span>
                            </div>
                            <hr>
                            <div class="neon-logo">
                                <img src="../../public/imagenes/logo-black.png" alt="Logo" class="logo-blog">
                                <span class="logo-span">By NeonHouseLed</span>
                            </div>
                            <h2>La Magia del Primer Impacto: La Entrada y el Vestíbulo</h2>
                            <div class="blog-body">
                                <img src="../../public/imagenes/imagesBlogBd/../../../public/imagenes/imagesBlogBd/pul.jpg" alt="Imagen Secundaria">
                                <p>De acuerdo a Sunedu, el cálculo del primero de los listados que incluye a 58 universidades toma en cuenta el registro histórico de InCites (Web of Science) que comprende el periodo 1980-2020, basando el puntaje final de las instituciones educativas superiores en cuatro indicadores (producción científica, impacto científico, excelencia internacional y número de patentes vigentes). De acuerdo a Sunedu, el cálculo del primero de los listados que incluye a 58 universidades toma en cuenta el registro histórico de InCites (Web of Science) que comprende el periodo 1980-2020, basando el puntaje final de las instituciones educativas superiores en cuatro indicadores (producción científica, impacto científico, excelencia internacional y número de patentes vigentes). De acuerdo a Sunedu, el cálculo del primero de los listados que incluye a 58 universidades toma en cuenta el registro histórico de InCites (Web of Science) que comprende el periodo 1980-2020, basando el puntaje final de las instituciones educativas superiores en cuatro indicadores (producción científica, impacto científico, excelencia internacional y número de patentes vigentes). De acuerdo a Sunedu, el cálculo del primero de los listados que incluye a 58 universidades toma en cuenta el registro histórico de InCites (Web of Science) que comprende el periodo 1980-2020, basando el puntaje final de las instituciones educativas superiores en cuatro indicadores (producción científica, impacto científico, excelencia internacional y número de patentes vigentes).</p>
                            </div>
                            <div class="container-video">
                                <iframe src="https://www.youtube.com/embed/RgKAFK5djSk" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <br>
                            <br>
                            <hr>
                            <br>
                            <br>
                            <hr>
                            <br>
                            <br>
                        </article>
                    </main>
                    <div class="otros">
                        <div class="container-otros">
                            <h2>Otros Blogs</h2>
                            <a href="">Ver Todos</a>
                        </div>
                        <div class="container-otros-body">
                            <?php require_once "../../admin2/app/trigger/autoBlog.php" ?>
                            <?php getBlogCat('Discoteca', 24) ?>
                        </div>
                    </div>
                </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <?php require_once "../layout/foother.php" ?>
        <!-- <script src="../js/script.js"></script> -->
</body>
</html>