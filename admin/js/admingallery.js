let dep = $("#users");
dep.load("../controller/userController.php?action=showuser");

//------------------------------------------------------------
$(function() {
    let tableProd = $("#galeria").DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        scrollX: false,
        dom: '<"header__main"<"search"f>>t<"header__main"ip>',
        lengthChange: false,
        pageLength: 4,
        ajax: {
            url: "../controller/userController.php?action=listgallery",
            dataSrc: "",
        },
        columns: [
            { data: "id" },
            { data: "image" },
            { data: "descripcion" },
            { data: null },
        ],
        columnDefs: [{
                "targets": -3,
                "data": 'image',
                "render": function(data, type, row, meta) {
                    let originalPath = '../imgGallery/' + data;
                    let webpPath = "../imgGallery/webp/" + data.replace(/\.(jpg|jpeg|png)$/i, '.webp');
                    return '<img src="' + webpPath + '" alt="' + data + '"height="80" width="80" onerror="this.onerror=null;this.src=\'' + originalPath + '\';" />';
                }
            },

            {
                defaultContent: '<button class="eliminar_b1 table-d"><i class="fas fa-trash-alt eliminar"></i></button>',
                targets: -1,
            },
        ],
    });

    $("#galeria tbody").on("click", ".eliminar_b1", function() {
        let id = tableProd.row($(this).parents("tr")).data()["id"];
        let nameimage = tableProd.row($(this).parents("tr")).data()["image"];
        let data = {
            action: "deletegallery",
            id: id,
            nameimage: nameimage
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
                            $("#galeria").DataTable().ajax.reload(null, false);
                        });
                    },
                });
            }
        });
        

    });


}); //______________________________________________________________________

$("#btnNuevo1").click(function() {
    $("#formGaleria").trigger("reset");
    //$('.dropify-clear').click();
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Imegen");
    $("#modalCRUD1").modal("show");
    id = null;
    opcion = 1; //alta
});

$("#formGaleria").submit(function(e) {
    var fdata = new FormData(this);
    fdata.append('action', 'isertimg');
    $.ajax({
        type: "POST",
        url: "../controller/userController.php",
        data: fdata,
        processData: false,
        contentType: false,
        cache: false,
      success: function (response) {
            let result = JSON.parse(response);
            swal({
                title: result.status ? "Perfecto!" : "Opps..!",
                text: result.msg,
                icon: result.type
            }).then(function() {
                $("#modalCRUD1").modal("hide");
                $("#galeria").DataTable().ajax.reload(null, false);
            });

        },
    });
    return false;

});

//:::::::::::::::Client ::::::::::::::::
// admingallery.js
$(document).ready(function() {
    let identgallery = $("#identgallery").val();
    let currentPage = 1;

    // Inicializa la carga de la primera página
    loadGalleryPage(currentPage);

    function loadGalleryPage(page) {
        let urlProds = "../controller/userController.php?action=showGalleryForClient&identgallery=" + identgallery + "&page=" + page;

        $.get(urlProds, function(response) {
            const data = JSON.parse(response);
            renderGallery(data.articles);
            renderPagination(data.pagination);
            bindPaginationEvents();
            handleImageLoading();
        });
    }

    // Función para renderizar la galería
    function renderGallery(articlesHtml) {
        $("#products-container").html(articlesHtml);
    }

    // Función para renderizar la paginación
    function renderPagination(paginationHtml) {
        $("#pagination-container").html(paginationHtml);
    }

    // Función para asociar eventos a la paginación
    function bindPaginationEvents() {
        $(".page-link").click(function(e) {
            e.preventDefault();
            let page = $(this).data("page");
            loadGalleryPage(page);
        });

        // Manejo del formulario para ir a una página específica
        // Dentro de bindPaginationEvents
        $("#goto-page-form").off("submit").on("submit", function(e) {
            e.preventDefault();
            let page = parseInt($("#goto-page-input").val());
            let totalPages = parseInt($("#total-pages").val());  // Asegúrate de que este valor sea un número
            if (page >= 1 && page <= totalPages) {
                loadGalleryPage(page);
            } else {
                alert("Número de página no válido");
            }
        });

    }

    // Función para manejar la carga de imágenes
    function handleImageLoading() {
        $(".gallery-image").each(function() {
            let img = $(this);
            let spinner = img.siblings(".loading-container").find(".loading-spinner");

            img.on("load", function() {
                setTimeout(function() {
                    spinner.hide();
                    img.css("opacity", "1");
                    img.show();
                }, 0);
            }).on("error", function() {
                spinner.hide();
            });

            spinner.show();
            img.hide();
        });
    }
});


//:::::::::::::::::Gestion::::::::::::::::::::
//let urlProds1 =
//	"../controller/userController.php?action=showGalleryForAll";
//$("#products-container1").load(urlProds1, { type: "article" }, function () {
//});


//::code for disabled copy paste

$(document).ready(function() {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function(e) {
        e.preventDefault();
    });

    //Disable mouse right click
    $("body").on("contextmenu", function(e) {
        return false;
    });
});