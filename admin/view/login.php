
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
    <link rel="stylesheet" href="/Neonhouseled/public/bootstrap/bootstrap.min.css">
  </head>
  <body>
  <div class="login-container">
      <div class="left">
          <div class="logo-container">
            <img src="public/img/neonhouse_led_logo.webp" alt="NHL Logo" class="logo">
              <h1 class="tagline">Diseñando y Creando Espacios Ideales</h1>
              <p class="subtagline">Innovación y diseño a tu alcance para crear ambientes únicos</p>
          </div>
      </div>
      <div class="right">
          <div class="login-form">
                <div class="linkt-div">
                    <h2>Bienvenido</h2>
                    <a href="../index.php" class="link-index">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                        </svg>
                    </a>
                </div>
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


