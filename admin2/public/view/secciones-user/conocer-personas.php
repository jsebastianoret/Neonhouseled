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
    <?php require_once ("../utils/sidebar_user.php"); ?>

    <main>
        <h1>Seccion: Home</h1>

        <div class="content-table">
            <table id="example" class="table table-striped" style="width:100%">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">SERVICE</th>
                    </tr>
                </thead>

                <tbody id="tableBody"></tbody>

            </table>
        </div>

    </main>



    <script>
        const tableBody = document.getElementById('tableBody');
        const person =document.getElementById("person")

        const dataRender = () => {
            fetch('../../../app/trigger/person1.php?action=GET')
                .then(res => res.json())
                .then((Data = []) => {

                    tableBody.innerHTML = Data.map(data => {
                        return `
        <tr data-id="${data.id}">
            <td>${data.id}</td>
            <td>${data.nombre}</td>
            <td>${data.telefono}</td>
            <td>${data.email}</td>
            <td>${data.service}</td>
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

    <!-- Script para el sidebar -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../../js/js-admin.js"></script>
</body>

</html>
<?php }
else {
    header('Location: ../../../../login.php');
} 
?>