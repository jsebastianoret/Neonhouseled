        <!DOCTYPE html>
        <html lang="es"> 
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Este es el Titulo de un Blog Sobre la Fundación del Imperio Peruano</title>
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
                    <span class="categoria">Categoría: FAST FOOD</span>
                    <header class="blog-header">
                        <h1>Este es el Titulo de un Blog Sobre la Fundación del Imperio Peruano</h1>
                        <div class="blog-banner">
                            <img src="../../public/imagenes/imagesBlogBd/blog_1723487382612_emprender-discoteca.jpg" alt="Imagen Portada" class="imgprin">
                            <div class="text-box">
                                <p>Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final. </p>
                            </div>
                        </div>
                    </header>
                    <main class="blog-main">
                        <article class="blog-article">
                            <hr>
                            <div class="meta">
                                <span id="f">Publicado: 2024-08-12 13:29:42</span>
                                <span id="hoy"></span>
                            </div>
                            <hr>
                            <div class="neon-logo">
                                <img src="../../public/imagenes/logo-black.png" alt="Logo" class="logo-blog">
                                <span class="logo-span">By NeonHouseLed</span>
                            </div>
                            <h2>Este es el Subtitulo de un Subtitulo de un Subtitulo de un Subtitulo y de un Subtitulo</h2>
                            <div class="blog-body">
                                <img src="../../public/imagenes/imagesBlogBd/blog_1723487382612_party-people-on-disco-lights-background-vector.jpg" alt="Imagen Principal">
                                <div>
                                    <p>Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final. </p>
                                    <br>
                                    <br>
                                    <p>Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final. </p>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="blog-body">
                                <div>
                                    <p>Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final. </p>
                                    <br>
                                    <br>
                                    <p>Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final. </p>
                                </div>
                                <br>
                                <br>
                                <img src="../../public/imagenes/imagesBlogBd/blog_1723487382612_assaas.jpg" alt="Imagen Secundaria">
                            </div>
                            <div class="container-video">
                                <iframe src="https://www.youtube.com/embed/LgypERYGaPM" frameborder="0" allowfullscreen></iframe>
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
                            <?php getBlogCat('FAST FOOD', 69) ?>
                        </div>
                    </div>
                </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <?php require_once "../layout/foother.php" ?>
        <!-- <script src="../js/script.js"></script> -->
</body>
</html>