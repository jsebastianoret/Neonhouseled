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
                            <img src="../../public/imagenes/imagesBlogBd/com.jpg" alt="Imagen Principal" class="imgprin">
                            <div class="text-box">
                                <p>¡Bienvenidos a nuestro blog sobre diseño de restaurantes! En este espacio, exploraremos cómo el diseño puede transformar un simple local en un lugar encantador y funcional, donde cada elemento contribuye a una experiencia gastronómica inolvidable. Si estás pensando en abrir un restaurante o renovar el que ya tienes, aquí encontrarás ideas y consejos para hacer que tu restaurante sea el lugar más deseado de la ciudad.</p>
                            </div>
                        </div>
                    </header>
                    <main class="blog-main">
                        <article class="blog-article">
                            <hr>
                            <div class="meta">
                                <span id="f">Publicado: 2024-08-02 10:42:47</span>
                                <span id="hoy"></span>
                            </div>
                            <hr>
                            <div class="neon-logo">
                                <img src="../../public/imagenes/logo-black.png" alt="Logo" class="logo-blog">
                                <span class="logo-span">By NeonHouseLed</span>
                            </div>
                            <h2>El Primer Encuentro: La Entrada y el Foyer</h2>
                            <div class="blog-body">
                                <img src="../../public/imagenes/imagesBlogBd/comidassss.jpg" alt="Imagen Secundaria">
                                <p>La entrada de tu restaurante es la primera impresión que los clientes tendrán, por lo que debe ser acogedora y sugerente.

Diseño de la Entrada: Una entrada bien diseñada puede atraer a los transeúntes y crear anticipación. Considera el uso de una señalización distintiva y una puerta que se abra de manera fluida. La entrada debe reflejar el estilo y la temática del restaurante.

Foyer o Recepción: El área de recepción debe ser funcional y estéticamente agradable. Asegúrate de que haya un espacio suficiente para esperar, con una decoración que sumerja a los clientes en el ambiente del restaurante desde el primer momento.

La entrada de tu restaurante es la primera impresión que los clientes tendrán, por lo que debe ser acogedora y sugerente.

Diseño de la Entrada: Una entrada bien diseñada puede atraer a los transeúntes y crear anticipación. Considera el uso de una señalización distintiva y una puerta que se abra de manera fluida. La entrada debe reflejar el estilo y la temática del restaurante.

Foyer o Recepción: El área de recepción debe ser funcional y estéticamente agradable. Asegúrate de que haya un espacio suficiente para esperar, con una decoración que sumerja a los clientes en el ambiente del restaurante desde el primer momento.

La entrada de tu restaurante es la primera impresión que los clientes tendrán, por lo que debe ser acogedora y sugerente.

Diseño de la Entrada: Una entrada bien diseñada puede atraer a los transeúntes y crear anticipación. Considera el uso de una señalización distintiva y una puerta que se abra de manera fluida. La entrada debe reflejar el estilo y la temática del restaurante.

Foyer o Recepción: El área de recepción debe ser funcional y estéticamente agradable. Asegúrate de que haya un espacio suficiente para esperar, con una decoración que sumerja a los clientes en el ambiente del restaurante desde el primer momento.</p>
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
                            <?php getBlogCat('Cocina', 28) ?>
                        </div>
                    </div>
                </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <?php require_once "../layout/foother.php" ?>
        <!-- <script src="../js/script.js"></script> -->
</body>
</html>