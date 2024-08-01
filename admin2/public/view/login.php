<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | NeonHouseLed</title>
  <link rel="stylesheet" href="./admin2/public/css/login.css">
  <link rel="shortcut icon" href="./admin2/public/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container form-container">
    <div class="row w-100 shadow-lg">
        <!-- Imagen principal en el css-->
        <div class="col-md-6 p-0 side-image position-relative d-none d-md-block ">
            </a>
            <div class="text">
                <p>Bienvenido al Portal Administrativo <i>NeonHouseLed</i></p>
            </div>
        </div>
        <div class="col-md-6 p-4 d-flex flex-column justify-content-center position-relative">

            <a href="./index.php" class="position-absolute side-img">
              <i class="bi bi-house-door-fill config-icon"></i>
            </a>

            <h4 class="title-text text-center mb-2 mt-2">Iniciar Sesión</h4>
            <div class="text-center mb-4 mt-4">
              <!-- Logo -->
                <img src="./admin2/public/img/logo.png" alt="Logo" class="img-logo">
            </div>


            <form class="w-100 mt-1 pt-1" id="formulario" autocomplete="off">
              <!-- Mensaje de error, falta config -->
                <div id="formulario_mensaje" style="display:none"
                  class="alert alert-warning alert-dismissible fade show des" role="alert">
                   
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="email" placeholder="Usuario" name="email">
                    <label for="email">Usuario</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" autocomplete="off">
                    <label for="password">Contraseña</label>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="custom-button btan btn-primarya mt-3 px-5 pt-2 pb-2">Ingresar</button>
                </div>
                
            </form>
        </div>
    </div>
</div>

<script>
    
    const formulario_mensaje = document.getElementById('formulario_mensaje')
    const formulario = document.getElementById('formulario')

    formulario.addEventListener('submit', e => {
      e.preventDefault()
      const formData = new FormData()
      formData.append('email', formulario.email.value)
      formData.append('password', formulario.password.value)

      fetch('./admin2/app/trigger/login.php', { method: 'POST', body: formData })
        .then(res => res.json())
        .then(res => {
          if (!res.estado) {
            formulario_mensaje.removeAttribute('style')
            formulario_mensaje.textContent = res.mensaje
            
            setTimeout(() => formulario_mensaje.setAttribute('style', 'display:none'), 1500)
          } else { 
            location.reload() 
          }
        })

    })
  </script>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>