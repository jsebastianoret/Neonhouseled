let user = $("#users");
user.load("../controller/userController.php?action=showuser");

//------------------------------------------------------------
$(function () {
	let tableProd = $("#galeriaGestion").DataTable({
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
		],
		columnDefs: [
            {
                "targets": -2,
                "data": 'image',
                "render": function (data, type, row, meta) {
                    return '<img src="../imgGallery/'+ data + '" alt="' + data + '"height="80" width="80"/>';
                }
            },

		],
	});
   
    
});//______________________________________________________________________

$("#btnNuevo12").click(function(){
    $("#formGaleriaGestion").trigger("reset");
    //$('.dropify-clear').click();
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Imegen");          
    $("#modalCRUD12").modal("show");        
    id=null;
    opcion = 1; //alta
});

$("#formGaleriaGestion").submit(function(e){
		var fdata = new FormData(this);

        fdata.append('action', 'isertimg');
        console.log(fdata)
        $.ajax({
            type: "POST",
            url: "../controller/userController.php",
            data: fdata,
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {
                //let result = JSON.parse(response);
                swal({
                    title: "Perfecto!",
                    text: "Galeria Agregado Correctamente",
                    icon: "success"
                }).then(function() { 
                    $("#modalCRUD12").modal("hide");                   
                    $("#galeriaGestion").DataTable().ajax.reload(null, false);                    
                }); 
                
            },
        });
        return false;
	
});