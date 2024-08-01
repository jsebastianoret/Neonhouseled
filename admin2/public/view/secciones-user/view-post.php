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
    <title>.:: Digimedia ::.</title>
</head>

<body>
    <?php require_once ("../utils/sidebar_user.php"); ?>


    <main>
        <h1>Seccion: Publicaciones</h1>


        <!-- No tocar-->
        <div class="content-table">

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITULO</th>
                        <th scope="col">CONTENIDO</th>
                        <th scope="col">LINK</th>
                        <th scope="col">FECHA</th>
                        
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>

        </div>
    </main>
    <script>
        
        const dataRender = () => {
        fetch("../../../app/trigger/posteo.php?action=GET")
            .then((res) => res.json())
            .then((Data = []) => {
                tableBody.innerHTML = Data.map((data) => {
                    return `
                    <tr data-id="${data.id}">
                        <td>${data.id}</td>
                        <td>${data.titulo}</td>
                        <td>${data.contenido}</td>
                        <td>${data.link}</td>
                        <td>${data.fecha}</td>
                        
                    </tr>
                `;
                }).join("");
            });
        
        };

        dataRender();
        
        document.getElementById('logout').addEventListener('click', ()=> {
            fetch('../../../app/trigger/logout.php')
                .then( res => res.json() )
                .then( ()=> location.reload())
        })
    </script>
<?php require_once ("../utils/enlacesDatatables.php"); ?>
    <!-- Script para el sidebar -->
    <script src="../../js/js-admin.js"></script>
    
</body>

</html>
<?php }
else {
    header('Location: ../../../../login.php');
} 
?>
