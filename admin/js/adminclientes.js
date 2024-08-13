$(function () {
  let tableProd = $("#clientes").DataTable({
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json",
    },
    scrollX: false,
    dom: '<"header__main"<"search"f>>t<"header__main"ip>',
    lengthChange: false,
    pageLength: 9,
    ajax: {
      url: "../controller/userController.php?action=listsuscriptor",
      dataSrc: "",
    },
    columns: [
      { data: "id" },
      { data: "nombre" },
      { data: "telefono" },
      { data: "correo" },
      { data: null },
    ],
    columnDefs: [
      {
        defaultContent:
          '<button class="eliminar_b1 table-d"><i class="fas fa-trash-alt eliminar"></i></button>',
        targets: -1,
      },
    ],
  });

  $("#clientes tbody").on("click", ".eliminar_b1", function () {
    let id = tableProd.row($(this).parents("tr")).data()["id"];
    let nameimage = tableProd.row($(this).parents("tr")).data()["image"];
    let data = {
      action: "deletegallery",
      id: id,
      nameimage: nameimage,
    };
    swal({
      title: "Eliminar",
      text: "¢ÄDesea eliminar el registro actual?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((val) => {
      if (val) {
        $.ajax({
          type: "POST",
          url: "../controller/userController.php",
          data: data,
          success: function (response) {
            let result = JSON.parse(response);
            swal({
              title: result.title,
              text: result.text,
              icon: result.icon,
            }).then(function () {
              $("#clientes").DataTable().ajax.reload(null, false);
            });
          },
        });
      }
    });
  });
}); //______________________________________________________________________

//::code for disabled copy paste
$(document).ready(function () {
  //Disable cut copy paste
  $("body").bind("cut copy paste", function (e) {
    e.preventDefault();
  });

  //Disable mouse right click
  $("body").on("contextmenu", function (e) {
    return false;
  });
});
