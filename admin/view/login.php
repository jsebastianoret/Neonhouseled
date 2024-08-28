
<!DOCTYPE html>
<html lang="es">
  <head><meta charset="euc-jp">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio de sesion</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="public/css/login.css">
    <link
      href="https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
  <div class="login-container">
      <div class="left">
          <div class="logo-container">
              <a href="../index.php">
                  <img src="public/img/neonhouse_led_logo.webp" alt="NHL Logo" class="logo">
              </a>
              <h1 class="tagline">Diseñando y Creando Espacios Ideales</h1>
              <p class="subtagline">Innovación y diseño a tu alcance para crear ambientes únicos</p>
          </div>
      </div>
      <div class="right">
          <div class="login-form">
              <h2>Bienvenido</h2>
              <p>Acceda con el usuario proporcionado</p>
              <form id="logins">
                  <div class="form-group">
                      <label for="username">Usuario</label>
                      <input type="text" id="usuario" name="username" placeholder="mail@site.com" required>
                  </div>
                  <div class="form-group">
                      <label for="password">Contraseña</label>
                      <input type="password" id="clave" name="password" required>
                  </div>
<!--                  <div class="form-group">
                      <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
                  </div>-->
                  <button type="submit" class="btn-login">Ingresar</button>
              </form>
<!--              <div class="register">
                  <p>No Registrado Aún? <a href="#">Crear una cuenta</a></p>
              </div>-->
          </div>
      </div>
  </div>
  <script src="js/login.js"></script>
  </body>
</html>


