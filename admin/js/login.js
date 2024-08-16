$("#logins").submit(function (e) {
  e.preventDefault();

  let username = $("#usuario").val();
  let password = $("#clave").val();

  var data = {
    username: username,
    password: password,
    action: "login",
  };
  // window.location.href = "view/dashboard.php";
  console.log(data.username);
  $.ajax({
    type: "POST",
    url: "controller/userController.php",
    data: data,
    success: function (response) {
      console.log(response);
      if (response === 1) {
        swal(
          "Intente Nuevamente!",
          "Usuario o Contraseña Incorrecto!",
          "error"
        );
        console.log(response);
      } else {
        window.location.href = "view/dashboard.php";
      }
    },
  });
});
