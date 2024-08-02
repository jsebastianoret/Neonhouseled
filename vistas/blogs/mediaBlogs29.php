        <?php
        session_start();
        ?>
        <!DOCTYPE html>
        <html lang="es"> 
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Diseño de Restaurantes: Creando Espacios que Seducen al Paladar y al Corazón</title>
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
                    <span class="categoria">Categoría: Cocina</span>
                    <header class="blog-header">
                        <h1>Diseño de Restaurantes: Creando Espacios que Seducen al Paladar y al Corazón</h1>
                        <div class="blog-banner">
                            <img src="../../public/imagenes/imagesBlogBd/recetas-ccccc.jpg" alt="Imagen Principal" class="imgprin">
                            <div class="text-box">
                                <p>El área de comedor es el núcleo del restaurante. Aquí, la comodidad, la estética y la funcionalidad deben estar en perfecta armonía.</p>
                            </div>
                        </div>
                    </header>
                    <main class="blog-main">
                        <article class="blog-article">
                            <hr>
                            <div class="meta">
                                <span id="f">Publicado: 2024-08-02 10:43:20</span>
                                <span id="hoy"></span>
                            </div>
                            <hr>
                            <div class="neon-logo">
                                <img src="../../public/imagenes/logo-black.png" alt="Logo" class="logo-blog">
                                <span class="logo-span">By NeonHouseLed</span>
                            </div>
                            <h2>El Corazón del Restaurante: El Área de Comedor</h2>
                            <div class="blog-body">
                                <img src="../../public/imagenes/imagesBlogBd/sasas.jpg" alt="Imagen Secundaria">
                                <p>Distribución y Espacio: La disposición de las mesas debe facilitar el flujo de los clientes y el personal. Asegúrate de que haya suficiente espacio entre mesas para ofrecer privacidad sin sacrificar la capacidad del restaurante. Considera diferentes configuraciones, como mesas para dos, cuatro o incluso grandes mesas para grupos.

Mobiliario: La elección del mobiliario es crucial. Opta por sillas y mesas que sean cómodas y duraderas. Los materiales deben ser resistentes y fáciles de limpiar, pero también deben contribuir al estilo general del restaurante.

Distribución y Espacio: La disposición de las mesas debe facilitar el flujo de los clientes y el personal. Asegúrate de que haya suficiente espacio entre mesas para ofrecer privacidad sin sacrificar la capacidad del restaurante. Considera diferentes configuraciones, como mesas para dos, cuatro o incluso grandes mesas para grupos.

Mobiliario: La elección del mobiliario es crucial. Opta por sillas y mesas que sean cómodas y duraderas. Los materiales deben ser resistentes y fáciles de limpiar, pero también deben contribuir al estilo general del restaurante.

Distribución y Espacio: La disposición de las mesas debe facilitar el flujo de los clientes y el personal. Asegúrate de que haya suficiente espacio entre mesas para ofrecer privacidad sin sacrificar la capacidad del restaurante. Considera diferentes configuraciones, como mesas para dos, cuatro o incluso grandes mesas para grupos.

Mobiliario: La elección del mobiliario es crucial. Opta por sillas y mesas que sean cómodas y duraderas. Los materiales deben ser resistentes y fáciles de limpiar, pero también deben contribuir al estilo general del restaurante.</p>
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
                            <?php getBlogCat('Cocina', 29) ?>
                        </div>
                    </div>
                </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <?php require_once "../layout/foother.php" ?>
        <!-- <script src="../js/script.js"></script> -->
</body>
</html>