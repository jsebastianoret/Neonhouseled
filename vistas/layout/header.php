<!--Ajax
<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<?php 
session_start(); // Iniciar la sesión al principio del archivo
$consulta = "Consulta General";
if (isset($_GET["v"]) && $_GET["v"] != null) {
    $consulta = base64_decode($_GET["v"]);
}
$respuesta = '';
if (isset($_SESSION['categoria']) && $_SESSION['categoria']) {
    $respuesta = $_SESSION['categoria'];
} else if (isset($_SESSION['servicio']) && $_SESSION['servicio']) {
    $respuesta = $_SESSION['servicio'];
}
?>
    <header class="header">
        <figure class="logo-container">
            <a href="/">
                <img class="imagen_neonhl" src="../../public/imagenes/Neon_House_Logo.webp" alt="Logo Neon House LED">
            </a>
        </figure>
        <nav class="menu">
            <h2 style="display:none">Menu de navegación</h2>
            <ul>

                <li>
                    <a href="/">Inicio</a>
                </li>

                <li class="parent-first">
                    <p>¿Quiénes somos?</p><i class="fas fa-chevron-down first"></i>
                    <ul class="submenu first">
                        <li class="submenu-element first">
                            <a href="../../vistas/nosotros.php">Nosotros</a>
                        </li>
                        <li class="submenu-element first">
                            <a href="../../vistas/work_us.php">Trabaja con nosotros</a>
                        </li>
                    </ul>
                </li>

                <li class="hidden-desk first">
                    <a href="../../vistas/nosotros.php">Nosotros</a>
                </li> 
                <li class="hidden-desk second">
                    <a href="../../vistas/work_us.php">Trabaja con nosotros</a>
                </li>

                <li class="parent-second">
                    <p>Nhl Collection</p><i class="fas fa-chevron-down second"></i>
                    <ul class="submenu second">
                        <li class="submenu-element second">
                            <a href="../../vistas/servicios.php">Servicios</a>
                        </li>
                        <li class="submenu-element second">
                            <a href="../../vistas/categoria.php">Categorías</a>
                        </li>
                    </ul>
                </li>

                <li class="hidden-desk third">
                    <a href="../../vistas/servicios.php">Servicios</a>
                </li>
                <li class="hidden-desk fourth">
                    <a href="../../vistas/categoria.php">Categorías</a>
                </li>


                <li>
                    <a href="../../vistas/proyectos.php">Proyectos</a>
                </li>
                <!-- <li>
                    <a href="../../vistas/contacto.php">Contáctenos</a>
                </li> -->

                <!-- Nuevo -->
                <li class="parent-third">
                    <p>Mas </p><i class="fas fa-chevron-down third"></i>
                    <ul class="submenu third">
                        <li class="submenu-element third">
                            <a href="../../vistas/contacto.php">Contáctenos</a>
                        </li>
                        <li class="submenu-element third">
                            <a href="../../vistas/blog.php">Blog</a>
                        </li>
                    </ul>
                </li>

                <li class="hidden-desk fifth">
                    <a href="../../vistas/contacto.php">Contáctenos</a>
                </li>
                <li class="hidden-desk sixth">
                    <a href="../../vistas/blog.php">Blog</a>
                </li>


                <li>
                    <a href="#">Luces Led Programables</a>
                </li>
                <!-- Nuevo -->
                <li >
                    <a href="/login.php">Login</a>
                </li>
            </ul>
        </nav>
        <div class="burger-button">
            <i class="fas fa-bars"></i>
        </div>
    </header>
    <a href="https://api.whatsapp.com/send?phone=51936910425&text=¡Bienvenidos!%20Cuéntanos%20sobre%20tus%20proyectos%20para%20poder%20ayudarte  <?= $respuesta ?>" class="float" target="_blank" rel="noopener" aria-label="contactar via whatssap">
        <i class="fa fa-whatsapp my-float"></i>
    </a>