<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QRZPWCXDM8"></script>
    <title>Neon House Led - Blog</title>
    <link rel="shortcut icon" href="../ico.ico" type="image/x-icon">
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/blog.css">
    <link rel="stylesheet" href="../public/imagenes/img-blog/blog-1.jpg">
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
</head>

<body>
    <h1 style="display:none" >Seccion de Blog</h1>
    <?php require_once "layout/header.php" ?>

    <main class="pb-5">
        <section class="image_blog position-relative section-padding">
            <div class="position-absolute top-50 start-0 translate-middle-y text-left mx-4 pl-5">
                <div class="mx-5 ">
                    <h1 class="title-blog">
                        BLOG
                    </h1>
                </div>

            </div>


        </section>



        <section class="pt-4 section-container-blogs" id="sectionBlog">

             

        </section>





    </main>



    <?php require_once "layout/foother.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<script>
    //section blog
    const htmlBlog = document.getElementById('sectionBlog');

    //lista de imagenes
    const list_img = ['../public/imagenes/img-blog/blog-1.jpg','../public/imagenes/img-blog/blog-2.jpg',
    '../public/imagenes/img-blog/blog-3.jpg','../public/imagenes/img-blog/blog-4.jpg',
    '../public/imagenes/img-blog/blog-5.jpg','../public/imagenes/img-blog/blog-6.jpg',
    '../public/imagenes/img-blog/blog-7.jpg','../public/imagenes/img-blog/blog-8.jpg',
    '../public/imagenes/img-blog/blog-9.jpg','../public/imagenes/img-blog/blog-10.jpg'
    ]

    //funcion, mostrar el contenido de la bd al blog , especificamente dentro del section blog
    const dataSee = () => {
        fetch('../admin2/app/trigger/posteo.php?action=GETB')
            .then((res) => res.json())
            .then((Data) =>{
                let intervalo = 0;
                //iterar de la Lista , dupla, etc, con foreach 
                Data.forEach(data => {
                    //sumar mostrar cada Secmento del codigo , y se muestra
                    // de forma independiente
                    htmlBlog.innerHTML += 
                    `
                    <div class="container-blogs mb-4">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mx-auto" style="max-width: 80%;">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary">Blog</strong>
                                <h3 class="mb-4">${data.titulo}</h3>
                                <p class="card-text mb-auto">${data.resumen}</p>
                                <a href="../vistas/blogs/mediaBlogs${data.id}.php" class="link_blog">Leer más</a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img class="blog-img" src="../public/imagenes/imagesBlogBd/${data.imagen_principal}" alt="" width="200" height="250">
                            </div>
                        </div>
                    </div>
                    `;
                    htmlBlog.innerHTML += '\n';
                    intervalo ++;
                    //repetir imagen una vez llegado a 10 blog section
                    if(intervalo >= 10){
                        intervalo = 0;
                    }
                
                
                });
                
            })
    }
    dataSee();
</script>