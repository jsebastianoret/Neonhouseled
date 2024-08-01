console.log("estamos en addUsuario.js")
$("#login").submit(function(e) {
    e.preventDefault();

    if ($('#nombre').val() == "" || $('#telefono').val() == "" || $('#correo').val() == "") {
        Swal.fire({
            icon: 'warning',
            title: 'Opps..!',
            text: 'Tiene que completar los campos.'
        });
    } else {

        let nombre = $("#nombre").val();
        let telefono = $("#telefono").val();
        let correo = $("#correo").val();
        var data = {
            nombre: nombre,
            telefono: telefono,
            correo: correo,
            action: "addSucriptor"
        }

        $.ajax({
            type: "POST",
            url: "../../admin/controller/userController.php",
            data: data,
            success: function(data) {
                data = JSON.parse(data);
                console.log(data);

                if (data.status) {
                    setTimeout(() => {

                        document.cookie = "user=true; max-age=3600; path=/";
                        document.cookie = "modal=1; max-age=5; path=/";
                        location.reload();
                    }, 1000);
                    Swal.fire({
                        icon: data.type,
                        title: 'Gracias!',
                        text: data.msg
                    });
                    //alert("cookie agregada usuario");

                } else {
                    Swal.fire({
                        icon: data.type,
                        title: 'Opps..!',
                        text: data.msg
                    });
                }
            }
        })

    }

});

$(document).ready(() => {
    if (document.cookie.includes("user")) {
        $('#modal .contenedor:nth-child(1)').removeClass('activo').addClass('inactivo');
        $('#modal .contenedor:nth-child(2)').removeClass('inactivo').addClass('activo');
        if (document.cookie.includes("modal")) {
            $('#catalogo').click();
        }
    }
})