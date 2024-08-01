<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El viento2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../../public/css/all_blog.css">
    <?php require_once "../layout/links.php" ?>
</head> 
<body>
    <?php require_once "../layout/header.php" ?>

    <div class="blog-post">
        <h1>El viento2</h1>
        <h2>El viento</h2>
        <p>El viento</p>
        <div>
            <img src="../../public/imagenes/imagesBlogBd/../../../public/imagenes/imagesBlogBd/actuali.png" alt="Imagen Principal">
            <img src="../../public/imagenes/imagesBlogBd/../../../public/imagenes/imagesBlogBd/i7.jpg" alt="Imagen Secundaria">
        </div>
        <p>El viento</p>
        <div>
            <iframe src="https://www.youtube.com/watch?v=G2uGZ9Bt8JU&t=2580s" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php require_once "../layout/foother.php" ?>
    <!-- <script src="../js/script.js"></script> -->
</body>
</html>