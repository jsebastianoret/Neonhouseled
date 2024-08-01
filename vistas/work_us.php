<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neo Trabaja con Nosotros | House Led</title>
    <meta name="description" content="Se parte de NHL y desarrolla tus habilidades y competencias con nosotros, ofrecemos línea de carrera, buen clima laboral, además brindamos una capacitación constante a nuestros colaboradores. Postula y se parte de nuestra familia."/>
    <link rel="shortcut icon" href="../ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/work_us.css">    
</head>
<body>
    <h1 class="title-hero_container">Crea e Innova con nosotros <br> ¡Únete a nuestra gran familia!</h1>
<?php require_once "layout/header.php" ?>
    <div class="cambio_img hero_container">
    </div>
    <section class="work_us">
        <h2 class="work_us-title">Trabaja con nosotros</h2>
        <div class="work_us-desc-container">
            <p class="work_us-desc">Se parte de NHL y desarrolla tus habilidades y competencias con nosotros, ofrecemos línea de carrera, buen clima laboral, además brindamos una capacitación constante a nuestros colaboradores. Postula y se parte de nuestra familia.</p>
        </div>
        <div class="work_us-contact-container">
            <div class="work_us-form-container">
                <!-- Formulario -->
                <form class="work_us-form" action="../controladores/workers.php" method="POST" enctype="multipart/form-data">
                    <!-- Nombres -->
                    <div class="box-container">
                        <p>Nombres y Apellidos</p>
                        <label for="full_name">
                            <input type="text" name="full_name" id="full_name" pattern="[a-zA-Z ]{2,254}" title="Solo debe contener letras. e.g. john" required>
                        </label>
                    </div>
                    <!-- Carrera -->
                    <div class="box-container">
                        <p>Carrera profesional</p>
                        <label for="career">
                            <input type="text" name="career" id="career" pattern="[a-zA-Z ]{2,254}" title="Solo debe contener letras. e.g. Sistemas" required>
                        </label>
                    </div>
                    <!-- Género -->
                    <div class="box-container short">
                        <p>Sexo</p>
                        <label for="gender">
                            <select name="gender" id="gender" required>
                                <option value="">Seleccione una opción...</option>
                                <option value="1">Femenino</option>
                                <option value="2">Masculino</option>
                            </select>
                        </label>
                    </div>
                    <!-- Fecha de nacimiento -->
                    <div class="box-container short">
                        <p>Fecha de nacimiento</p>
                        <label for="birthday">
                            <input type="date" name="birthday" id="birthday" required>
                        </label>
                    </div>
                    <!-- Telefono -->
                    <div class="box-container short">
                        <p>Teléfono</p>
                        <label for="telephone">
                            <input type="text" name="telephone" id="telephone" pattern="[0-9]{9,12}" title="debe contener numeros" required>
                        </label>
                    </div>
                    <!-- E-mail -->
                    <div class="box-container short">
                        <p>E-mail</p>
                        <label for="email">
                            <input type="text" name="email" id="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="e.g. aso@gmail.com" required>
                        </label>
                    </div>
                    <!-- Distrito -->
                    <div class="box-container">
                        <p>Distrito</p>
                        <label for="district">
                            <select name="district" id="district" required>
                                <option value="">Seleccione una opción...</option>
                                <option value="1">Ancón</option>
                                <option value="2">Ate</option>
                                <option value="3">Barranco</option>
                                <option value="4">Breña</option>
                                <option value="5">Carabayllo</option>
                                <option value="6">Chaclacayo</option>
                            </select>
                        </label>
                    </div>
                    <!-- CV -->
                    <div class="box-container">
                        <p>Adjuntar CV</p>
                        <label for="cv">
                            <input type="file" name="cv" id="cv" accept=".pdf ">
                        </label>
                    </div>
                    <!-- Button -->
                    <div class="box-container" id="button-container">
                        <!--<button>Enviar</button>-->
                        <button class="form__section boton"  id="enviar" name="enviar" >Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php require_once "layout/foother.php" ?>
    </body>
</html>