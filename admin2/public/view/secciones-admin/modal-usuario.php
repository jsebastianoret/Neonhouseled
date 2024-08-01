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
        <h1>Seccion: Usuarios</h1>

        

        <!-- Iniciao-->
       <!-- Button trigger modal -->
        <button type="button" class="btn mb-3 btn-primary btn-show" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Crear Usuario
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered "> <!-- Agregamos la clase 'modal-sm' para reducir el tamaño del modal -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 " id="staticBackdropLabel">Registrar Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form id="form-admin2" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" name="name" id="name" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="usuario" class="form-label">Usuario</label>
                                            <input type="text" name="usuario" id="usuario" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="contrasena" class="form-label">Password</label>
                                            <input type="password" name="pass" id="pass" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="servicio" class="form-label">Rol</label>
                                            <select class="form-select" name="servicio" id="servicio">
                                                <option selected disabled value="">Selecciona</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Usuario">Usuario</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex justify-content-center">
                                    <div class="btn-group" role="group" aria-label="Botones de acción">
                                        <input type="submit" value="Agregar" name="submit" id="submit1" class="btn btn-primary btn-lg mx-2">
                                        <input type="submit" value="Cancelar" name="submit" id="submit2" class="btn btn-danger btn-lg mx-2" data-bs-dismiss="modal"> <!-- Agregamos 'data-bs-dismiss="modal"' para cerrar el modal -->
                                    </div>
                                </div>


                                
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

         <!-- Modal -->
        <div class="modal fade" id="staticBackdrop_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered "> <!-- Agregamos la clase 'modal-sm' para reducir el tamaño del modal -->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex align-items-center"> <!-- Utilizamos d-flex para hacer que los elementos se comporten como flexbox y align-items-center para alinear verticalmente -->
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">id :</h1>
                            <p class="mb-0 ms-3 fs-5 inputText">762</p> <!-- Agregamos ms-2 para un pequeño margen a la izquierda -->
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form id="form-admin3" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" name="name" id="name2" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="usuario" class="form-label">Usuario</label>
                                            <input type="text" name="usuario" id="usuario2" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="contrasena" class="form-label">Password</label>
                                            <input type="password" name="pass" id="pass2" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="servicio" class="form-label">Rol</label>
                                            <select class="form-select selectorDmi" name="servicio" id="servicio2">
                                                <option selected disabled value="">Selecciona</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Usuario">Usuario</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex justify-content-center">
                                    <div class="btn-group" role="group" aria-label="Botones de acción">
                                        <input type="submit" value="Modificar" name="submit" id="submit4" class="btn btn-primary btn-lg mx-2">
                                        <button type="button" class="btn btn-danger btn-lg mx-2" data-bs-dismiss="modal">Cancelar</button> <!-- Cambiamos <input> por <button> y agregamos 'type="button"' -->
                                    </div>
                                </div>


                                
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>



        <!-- No tocar-->
        <div class="content-table">

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">USUARIO</th>
                        <th scope="col">ROL</th>
                        <th scope="col">OPCIONES</th>
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>

        </div>
    </main>
    <script>
        const objRegex_lost = {
            pass: /^(?!.*\s).*.{6,}$/,
        };//resistencia Nazari
        document.addEventListener("DOMContentLoaded", function () {
            dataRender();
            waitToGo();
            waitToGoUpdate();
        });
        function waitToGo() {
            const formMain = document.querySelector("#form-admin2");
            formMain.addEventListener("submit", (e) => {
                console.log("Boton activado");
                e.preventDefault();
                validarData("name", "usuario", "pass", "#servicio", "ADD");
            });
        }
        function waitToGoUpdate() {
            const formMain = document.querySelector("#form-admin3");
            formMain.addEventListener("submit", (e) => {
                console.log("Boton activado Update");
                e.preventDefault();
                validarData("name2", "usuario2", "pass2", "#servicio2", "UPDATE");
            });
        }
        function validarData(na, use, pas, ser, tipe) {
            const name = document.getElementById(na);
            const user = document.getElementById(use);
            const pasor = document.getElementById(pas);
            const ServisOptions = document.querySelector(ser);
            const idm = document.querySelector(".inputText");

            //var valor = parrafo.textContent;
            //const idm = document.
            const passTrue = objRegex_lost.pass.test(pasor.value);

            if (name.value === "") alert("El nombre no debe estar vacio");

            if (ServisOptions.value === "") alert("Seleccione un servicio");

            if (user.value === "") alert("Coloca Un Usuario");

            if (!passTrue)
                alert("Contraseña mal Digitada. Asegurese de colocar mas de 6 caracteres.");

            if (
                name.value != "" &&
                user.value != "" &&
                ServisOptions.value != "" &&
                passTrue
            ) {
                alert("Todos los campos son correctos." + tipe);
                if (tipe == "ADD") {
                catchDate(name, user, pasor, ServisOptions, tipe);
                cleanDate(name, user, pasor, ServisOptions);
                } else if (tipe == "UPDATE") {
                catchDateUp(idm, name, user, pasor, ServisOptions, tipe);
                modificarYCerrarModal();
                }
            }
        }

        function cleanDate(n, u, p, s) {
            n.value = "";
            u.value = "";
            p.value = "";
            s.value = "";
        }

        function catchDate(n, u, p, s, tipe) {
            const body = new FormData();
            body.append("name", n.value);
            body.append("user", u.value);
            body.append("pass", p.value);
            body.append("rol", s.value);

            sentDataToServerSide(body, tipe);
        }
        function modificarYCerrarModal() {
            var modal = document.getElementById("staticBackdrop_2");
            var modalInstance = bootstrap.Modal.getInstance(modal);
            modalInstance.hide();
        }
        function catchDateUp(i, n, u, p, s, tipe) {
            const body = new FormData();
            body.append("id", i.textContent);
            body.append("name", n.value);
            body.append("user", u.value);
            body.append("pass", p.value);
            body.append("rol", s.value);

            sentDataToServerSide(body, tipe);
        }
        function sentDataToServerSide(form, tipe) {
            fetch(`../../../app/trigger/modal-usuario.php?action=${tipe}`, {
                method: "POST",
                body: form,
            })
                .then((res) => res.json())
                .then((res) => {
                dataRender();
                window.location.reload();
                console.log(res);
                })
                .catch((err) => console.log(err));
        }

        const tableBody = document.getElementById("tableBody");

        tableBody.addEventListener("click", (e) => {
            const button = e.target.closest("button");

            if (button) {
                const tr = button.closest("tr");

                const id = tr.getAttribute("data-id");
                const action = button.getAttribute("data-action");

                if (action == "eliminar") {
                let condicion = confirm("Desea Continuar?");
                if (condicion) {
                    tr.remove();

                    fetch(`../../../app/trigger/modal-usuario.php?action=DELETE&id=${id}`)
                    .then((res) => res.json())
                    .then(console.log);
                }
                }
            }
        });
        const dataRender = () => {
        fetch("../../../app/trigger/modal-usuario.php?action=GET")
            .then((res) => res.json())
            .then((Data = []) => {
                tableBody.innerHTML = Data.map((data) => {
                    return `
                    <tr data-id="${data.id}">
                        <td>${data.id}</td>
                        <td>${data.nombre}</td>
                        <td>${data.usuario}</td>
                        <td>${data.rol}</td>
                        <td><button data-action="eliminar" class="btnEliminar"  style="border:none;margin-right:50px;color:red;" aria-describedby="eliminar"><ion-icon name="trash-outline"></ion-icon></button>

                        <button data-action="editar" type="button" class="btn mb-3 btnEditar btn-show" data-bs-toggle="modal" data-bs-target="#staticBackdrop_2" style="border:none;margin-top:10px;color:aqua;" aria-describedby="editar"><ion-icon name="create-outline"></ion-icon></button></td>
                    </tr>
                `;
                }).join("");
                
            
                document.querySelectorAll(".btnEditar").forEach((btn) => {
                    btn.addEventListener("click", () => {
                    // Lógica para editar la fila
                    const rowId = btn.closest("tr").getAttribute("data-id");
                    console.log(rowId);
                    const bodyFats = new FormData();
                    bodyFats.append("id", rowId);
                    fetch("../../../app/trigger/modal-usuario.php?action=Mostrar", {
                        method: "POST",
                        body: bodyFats,
                    })
                        .then((res) => res.json())
                        .then((data) => {
                            const userData = data[0];
                            //console.log(userData);
                            //console.log(userData.rol);
                            //console.log(userData.id);
                            //console.log(userData.contrasena);
                            //console.log(userData.usuario);
                            //console.log(userData.nombre);
                            const ServisOptions = document.querySelector(".selectorDmi");
                            const ids = document.querySelector(".inputText");
                            const names = document.getElementById("name2");
                            const user = document.getElementById("usuario2");
                            const passw = document.getElementById("pass2");

                            ServisOptions.value = userData.rol;
                            ids.textContent = userData.id;
                            names.value = userData.nombre;
                            user.value = userData.usuario;
                            passw.value = userData.contrasena;
                        
                        })
                        .catch((error) => {
                            console.error("Error al obtener los datos:", error);
                        });

                    });
                });
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