$('#restaurante').submit(function(e){
    e.preventDefault();
    let link = $("#url").val();
    var redirectWindow = window.open(link, '_blank');
    let nomcategory = $("#nomcategory").val();
    let empresa = $("#empresa").val();
    let email = $("#email").val();
    let tel = $("#tel").val();
    let data ={
        option: "calatogrequest",
        nomcategory:nomcategory,
        empresa: empresa,
        email: email,
        tel: tel
    }
    $.ajax({
        type:"POST",
        url: "../controladores/catalogRequest.php",
        data: data,
        success: function(response){
            if(response == 1){
                swal({
                    title: "Formulario enviado exitosamente!",
                    text: "le responderemos lo mas pronto posible.",
                    icon: "success"
                }).then(function() {
                    //$("#restaurante").trigger('reset');
                    //$("#form_1").hide();
                    //console.log(response)
                    window.location.href = "categoria.php";
                    redirectWindow.location;
                });
                               
            }
            else{
                swal("Nooo!", "Error al enviar el formulario.", "error");

            }
            
        }

    })

})