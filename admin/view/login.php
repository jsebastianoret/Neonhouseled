
<!DOCTYPE html>
<html lang="es">
  <head><meta charset="euc-jp">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio de sesion</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link
      href="https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Raleway&display=swap");
      * {
        margin: 0px;
        padding: 0px;
        font-family: "Raleway", sans-serif;
        box-sizing: border-box;
      }
      .contenedor {
        width: 100%;
        height: 100vh;
        background-color: #f2f2f2;
      }
      .header {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        text-align: center;
      }
      .header-logo {
        width: 100%;
        text-align: center;
      }
      .header-logo img {
        width: 20%;
      }
      .header-info {
        width: 100%;
      }
      .header-info h1 {
        font-size: 24px;
        padding-bottom: 30px;
      }
      .form {
        width: 28%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: auto;
        padding: 40px 25px;
        background-color: #ffffff;
      }
      .form-row {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 10px 0px;
        position: relative;
      }
      input[type="text"],
      input[type="password"] {
        width: 100%;
        border-radius: 10px;
        border: none;
        outline: none;
        padding: 10px 25px;
        color: black;
        font-size: 18px;
        border-bottom: 1px solid #b3b3b3;
        padding-top: 30px;
      }
      input[type="text"]::placeholder,
      input[type="password"]::placeholder {       
        color: gray;
        font-weight: 800;
      }
      input[type="text"]:focus,
      input[type="password"]:focus {
        color: black;
      }
      input[type="submit"] {
        margin-top: 20px;
        padding: 10px;
        background-color: rgb(130, 130, 196);
        font-size: 20px;
        color:white ;
        border-radius: 10px;
        outline: none;
        border: none;
      }
      input[type="submit"]:hover {
        color: white;
        background-color: rgb(216, 166, 72);
        cursor: pointer;
      }
      .bx {
        position: absolute;
        bottom: 20px;
        cursor: pointer;
        right: 10px;
      }
    
      @media (max-width: 425px) {
        .bx {
          position: absolute;
          bottom: 20px;
          cursor: pointer;
          right: 30px;
        }
        .contenedor {
          width: 100%;
          height: 100vh;
        }
        .header-logo img {
          width: 50%;
        }
        .header-info h1 {
          font-size: 14px;
          padding-bottom: 30px;
        }
        .form {
          width: 80%;
          margin: auto;
          padding: 20px 0px 10px 0px;
          border-radius: 10px;
        }
        input[type="text"],
        input[type="password"] {
          width: 80%;
          border-radius: 10px;
          margin: auto;
          border: none;
          outline: none;
          padding: 15px 15px;
          color: #b3b3b3;
          font-size: 10px;
          border-bottom: 1px solid #b3b3b3;
        }
        input[type="submit"] {
          margin-top: 20px;
          padding: 10px;
          font-size: 14px;
          border-radius: 10px;
          outline: none;
          border: none;
        }
      }
    </style>
  </head>
  <body>
    <div class="contenedor">
      <header class="header">
        <div class="header-logo">
          <a href="../index.php"><img
            src="https://firebasestorage.googleapis.com/v0/b/untels-simulacion.appspot.com/o/logo.webp?alt=media&token=c1836a6e-d7f3-4159-a686-2b500e080d37"
            />
          </a>
        </div>
        <div class="header-info">
          <h1>Bienvenido acceda con el usuario porporcionado</h1>
        </div>
      </header>
        <form class="form" id="logins">
            <div class="form-row">
            <input
                type="text"
                name="usuario"
                id="usuario"
                placeholder="Usuario"
                required
            />
            </div>
            <div class="form-row">
            <input
                type="password"
                name="clave"
                id="clave"
                placeholder="Contraseña"
                required
            />
            <i class="bx bx-show"></i>
            </div>
            <div id="alertBoxes"></div>
            <input type="submit"  id="login" value="Ingresar"/>
        </form>
    </div>
    <script src="js/login.js" ></script>
  </body>
</html>
