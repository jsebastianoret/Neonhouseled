$(function() {
    let tableProd = $("#productosTabla").DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        scrollX: false,
        dom: '<"header__main"<"search"f>>t<"header__main"ip>',
        lengthChange: false,
        pageLength: 5,
        ajax: {
            url: "../controller/userController.php?action=list",
            dataSrc: "",
        },
        columns: [
            { data: "username" },
            { data: "nombres" },
            { data: "user_level" },
            { data: null },
            { data: null },
            { data: null }
        ],
        columnDefs: [{
                defaultContent: '<button class="eliminar_b table-d"><i class="fas fa-trash-alt eliminar"></i></button>',
                targets: -2,
            },
            {
                data: null,
                targets: -3,
                defaultContent: '<button class="editar_b table-e"><i class="fas fa-edit editar"></i></button>',
            }, {
                data: null,
                targets: -1,
                render: function(data, type, row) {
                    var includeCheck = "";
                    if (data.status == 1) {
                        includeCheck = "checked";
                    }
                    return `<input type="checkbox" ${includeCheck} class="checkstatus" value="1" name="user_status">`;
                }

            },
        ],
    });
    //NO TOCAR GAA::::::::::::::::::
    $("#btnNuevo").click(function() {
        $("#formPersonas").trigger("reset");
        $(".modal-header").css("background-color", "#28a745");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Nueva Usuario");
        $("#modalCRUD").modal("show");
        id = null;
        opcion = 1; //alta
    });
    ///////////////:::::::::::::here edit user
    $("#productosTabla tbody").on("click", ".editar_b", function() {

        let data = tableProd.row($(this).parents("tr")).data();
        $("#id").val(data["id"]);
        $("#username").val(data["username"]);
        $("#password").val(data["password"]);
        $("#leveluser").val(data["user_level"]);
        $("#name").val(data["nombres"]);
        $("#phone").val(data["telefono"]);

        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar Usuario");
        $("#modalCRUD").modal("show");



    });

    $("#productosTabla tbody").on("click", ".eliminar_b", function() {
        let id = tableProd.row($(this).parents("tr")).data()["id"];
        let data = {
            action: "delete",
            id: id
        }
        swal({
            title: 'Eliminar',
            text: '¿Desea eliminar el registro actual?',
            icon: 'warning',
            buttons: true,
            dangerMode: true
        }).then(val => {
            if (val) {
                $.ajax({
                    type: "POST",
                    url: "../controller/userController.php",
                    data: data,
                    success: function(response) {
                        let result = JSON.parse(response);
                        swal({
                            title: result.title,
                            text: result.text,
                            icon: result.icon
                        }).then(function() {
                            $("#productosTabla").DataTable().ajax.reload(null, false);
                        });
                    },
                });
            }
        });
    });
    $("#productosTabla tbody").on("change", ".checkstatus", function() {
        let id = tableProd.row($(this).parents("tr")).data()["id"];
        let status = 0;
        if ($(this).is(':checked')) {
            status = 1;
        }

        let data = {
                action: "changeStatusForUser",
                id: id,
                user_status: status
            }
            //console.log(data);
        $.ajax({
            type: "POST",
            url: "../controller/userController.php",
            data: data,
            success: function(response) {

                $("#productosTabla").DataTable().ajax.reload(null, false);

            },

        });

    });


});


$("#formPersonas").submit(function(e) {
    e.preventDefault();
    let aoption = $("#id").val();
    let username = $('#username').val();
    let password = $('#password').val();
    let level = $('#leveluser').val();
    let name = $('#name').val();
    let phone = $('#phone').val();
    let data = {
        aoption: aoption,
        action: "newuser",
        username: username,
        password: password,
        level: level,
        name: name,
        phone: phone
    }

    $.ajax({
        type: "POST",
        url: "../controller/userController.php",
        data: data,
        success: function(response) {
            let result = JSON.parse(response);
            swal({
                title: result.title,
                text: result.text,
                icon: result.icon
            }).then(function() {
                $("#modalCRUD").modal("hide");
                $("#productosTabla").DataTable().ajax.reload(null, false);
            });

        },
    });
    return false;


});


/*$(document).on("click", "#close", function(){
    $("#id").empty();
});
$(document).on("click", "#Cancelar", function(){
    $("#id").empty();
});
$(document).on("click", "#btnGuardar", function(){
    $("#id").empty();
});*/