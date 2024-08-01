<?php session_start();
if( isset($_SESSION['id']) ){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once ("../utils/enlacesCss.php"); ?>
    <link rel="stylesheet" href="../../css/desing-admin.css">
    <title>.:: NeonHouseLed ::.</title>
</head>

<body>
    <?php require_once ("../utils/sidebar.php"); ?>

    <main>
        <h1>Seccion: Terms and reclaims</h1>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Estas Seguro de Eliminar El registro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary confirm">Eliminar</button>
                </div>
                </div>
            </div>
        </div>
        <div class="content-table">

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">DOCUMENTO</th>
                        <th scope="col">NUMERO DE DOCUMENTO</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">CELULAR</th>
                        <th scope="col">DIRECION</th>
                        <th scope="col">DISTRITO</th>
                        <th scope="col">CIUDAD</th>
                        <th scope="col">TIPO DE RECLAMACION</th>
                        <th scope="col">SERVICIO CONTRATADO</th>
                        <th scope="col">RECLAMO PERSONA</th>
                        <th scope="col">ACEPTAR TERMINOS 1</th>
                        <th scope="col">ACEPTAR TERMINO 2</th>
                        <th scope="col">ACCION</th>
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>

        </div>
    </main>



    <script>

        const tableBody = document.getElementById('tableBody');
        tableBody.addEventListener('click' ,e =>{
            const btn = e.target.closest('button');
            const btnEl = document.querySelector(".confirm");
            btnEl.addEventListener("click", () =>{
                if(btn){
                    const fila = btn.closest('tr');
                    const id = fila.getAttribute('data-id');
                    const action = btn.getAttribute('data-action');
                    if(action == 'delete'){
                        fetch(`../../../app/trigger/libroReclamacion.php?action=DELETE&id=${id}`)
                            .then(res => res.json())
                            .then(console.log(),location.reload())
                    }
                }
            })
        })
        const dataRender = () => {
            fetch('../../../app/trigger/libroReclamacion.php?action=GET')
                .then(res => res.json())
                .then((Data = []) => {

                    tableBody.innerHTML = Data.map(data => {
                        return `
                <tr data-id="${data.idReclamacion}">
                    <td>${data.idReclamacion}</td>
                    <td>${data.nombre}</td>
                    <td>${data.apellido}</td>
                    <td>${data.documento}</td>
                    <td>${data.numeroDocumento}</td>
                    <td>${data.email}</td>
                    <td>${data.celular}</td>
                    <td>${data.direccion}</td>
                    <td>${data.distrito}</td>
                    <td>${data.ciudad}</td>
                    <td>${data.tipoReclamo}</td>
                    <td>${data.servicioContratado}</td>
                    <td>${data.reclamoPerson}</td>
                    <td>${data.checkReclamoForm}</td>
                    <td>${data.aceptaPoliticaPrivacidad}</td>
                    <td>
                        <button type="button" data-action="delete" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</button>
                    </td>
                </tr>
            `
                    }).join('')

                })
        };
        dataRender();


        document.getElementById('logout').addEventListener('click', ()=> {
            fetch('../../../app/trigger/logout.php')
                .then( res => res.json() )
                .then( ()=> location.reload())
        })

    </script>


    <?php require_once ("../utils/enlacesDatatables.php"); ?>
    <script src="../../js/js-admin.js"></script>
</body>

</html>
<?php }
else {
    header('Location: ../../../../login.php');
} 
?>