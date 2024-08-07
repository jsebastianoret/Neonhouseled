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
        <h1>Seccion: Publicaciones</h1>

        

        <!-- Iniciao-->
       <!-- Button trigger modal -->
        <button type="button" class="btn mb-3 btn-primary btn-show" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Crear Publicacion  
        </button>

        <!-- Modal CREAR NUEVO -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered "> <!-- Agregamos la clase 'modal-sm' para reducir el tamaño del modal -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 " id="staticBackdropLabel">Crear Publicacion</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form id="form-admin2" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Categoria</label>
                                            <!--FRANK Agregar todas las categorias disponobles en una lista desplegable-->
                                            <select name="category" id="category" class="form-control" required>
                                                <option value="" disabled selected>Seleccione una categoría</option>
                                                <option value="RESTAURANTE">RESTAURANTE</option>
                                                <option value="CEVICHERÍA">CEVICHERÍA</option>
                                                <option value="SANGUCHERÍA">SANGUCHERÍA</option>
                                                <option value="FAST FOOD">FAST FOOD</option>
                                                <option value="POLLERÍA">POLLERÍA</option>
                                                <option value="DISCOTECA">DISCOTECA</option>
                                                <option value="PIZZERÍA">PIZZERÍA</option>
                                                <option value="CAFETERÍA Y JUGUERIA">CAFETERÍA Y JUGUERIA</option>
                                                <option value="PANADERÍA Y PASTELERÍA">PANADERÍA Y PASTELERÍA</option>
                                                <option value="SALON SPA Y BARBERÍA">SALON SPA Y BARBERÍA</option>
                                                <option value="BAR">BAR</option>
                                                <option value="HOGAR">HOGAR</option>
                                                <option value="MINIMARKET">MINIMARKET</option>
                                                <option value="CLINICA DENTAL">CLINICA DENTAL</option>
                                                <option value="DEPARTAMENTO">DEPARTAMENTO</option>
                                                <option value="DORMITORIO PARA NIÑOS">DORMITORIO PARA NIÑOS</option>
                                                <option value="ESTILO INDUSTRIAL">ESTILO INDUSTRIAL</option>
                                                <option value="FUENTE DE SODA">FUENTE DE SODA</option>
                                                <option value="GIMNASIO">GIMNASIO</option>
                                                <option value="HOTELES">HOTELES</option>
                                                <option value="RECEPCIONES">RECEPCIONES</option>
                                                <option value="RESTOBAR">RESTOBAR</option>
                                                <option value="SALÓN DE BELLEZA Y BARBERIA">SALÓN DE BELLEZA Y BARBERIA</option>
                                                <option value="TERRAZA">TERRAZA</option>
                                                <option value="ROPA">ROPA</option>
                                                <option value="VETERINARIA">VETERINARIA</option>
                                                <option value="HELADERIA">HELADERIA</option>
                                            </select>
                                            <!---->
                                        </div> 
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Titulo</label>
                                            <input type="text" name="title" id="title" class="form-control" required>
                                        </div> 
                                        <div class="mb-3">
                                            <label for="resumen" class="form-label">Resumen</label>
                                            <textarea type="text" name="resumen" id="resumen" class="form-control"  style="height: 10vh;" required></textarea>

                                        </div> 
                                        <div class="mb-3">
                                            <label for="subtitle" class="form-label">Subtitulo</label>
                                            <input type="text" name="subtitle" id="subtitle" class="form-control" required>
                                        </div>
                                        <!--Agregar 4 campos para 4 parrafos -->  
                                        <div class="mb-3">
                                            <label for="content" class="form-label">Párrafo 1</label>
                                            <textarea type="text" name="content1" id="content1" class="form-control"  style="height: 20vh;" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="content" class="form-label">Párrafo 2</label>
                                            <textarea type="text" name="content2" id="content2" class="form-control"  style="height: 20vh;" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="content" class="form-label">Párrafo 3</label>
                                            <textarea type="text" name="content3" id="content3" class="form-control"  style="height: 20vh;" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="content" class="form-label">Párrafo 4</label>
                                            <textarea type="text" name="content4" id="content4" class="form-control"  style="height: 20vh;" required></textarea>
                                        </div><!---->
                                        <div class="mb-3">
                                            <label for="imagep" class="form-label">Imagen Portada</label>
                                            <input type="file" name="image_portada" id="image_portada" class="form-control" required accept=".jpg,.jpeg,.png,.webp,.avif">
                                        </div> 
                                        <div class="mb-3">
                                            <label for="image1" class="form-label">Imagen Principal</label>
                                            <input type="file" name="image1" id="image1" class="form-control" required accept=".jpg,.jpeg,.png,.webp,.avif">
                                        </div> 
                                        <div class="mb-3">
                                            <label for="image2" class="form-label">Imagen Secundaria</label>
                                            <input type="file" name="image2" id="image2" class="form-control" required accept=".jpg,.jpeg,.png,.webp,.avif"> 
                                        </div> 
                                        <div class="mb-3">
                                            <label for="linkVideo" class="form-label">Link de Video</label>
                                            <input type="text" name="linkVideo" id="linkVideo" class="form-control" required>
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

         <!-- Modal EDITAR -->
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
                                            <label for="category2" class="form-label">Categoria</label>
                                            <!--FRANK Agregar todas las categorias disponobles en una lista desplegable-->
                                            <select name="category2" id="category2" class="form-control" required>
                                                <option value="" disabled selected>Seleccione una categoría</option>
                                                <option value="RESTAURANTE">RESTAURANTE</option>
                                                <option value="CEVICHERÍA">CEVICHERÍA</option>
                                                <option value="SANGUCHERÍA">SANGUCHERÍA</option>
                                                <option value="FAST FOOD">FAST FOOD</option>
                                                <option value="POLLERÍA">POLLERÍA</option>
                                                <option value="DISCOTECA">DISCOTECA</option>
                                                <option value="PIZZERÍA">PIZZERÍA</option>
                                                <option value="CAFETERÍA Y JUGUERIA">CAFETERÍA Y JUGUERIA</option>
                                                <option value="PANADERÍA Y PASTELERÍA">PANADERÍA Y PASTELERÍA</option>
                                                <option value="SALON SPA Y BARBERÍA">SALON SPA Y BARBERÍA</option>
                                                <option value="BAR">BAR</option>
                                                <option value="HOGAR">HOGAR</option>
                                                <option value="MINIMARKET">MINIMARKET</option>
                                                <option value="CLINICA DENTAL">CLINICA DENTAL</option>
                                                <option value="DEPARTAMENTO">DEPARTAMENTO</option>
                                                <option value="DORMITORIO PARA NIÑOS">DORMITORIO PARA NIÑOS</option>
                                                <option value="ESTILO INDUSTRIAL">ESTILO INDUSTRIAL</option>
                                                <option value="FUENTE DE SODA">FUENTE DE SODA</option>
                                                <option value="GIMNASIO">GIMNASIO</option>
                                                <option value="HOTELES">HOTELES</option>
                                                <option value="RECEPCIONES">RECEPCIONES</option>
                                                <option value="RESTOBAR">RESTOBAR</option>
                                                <option value="SALÓN DE BELLEZA Y BARBERIA">SALÓN DE BELLEZA Y BARBERIA</option>
                                                <option value="TERRAZA">TERRAZA</option>
                                                <option value="ROPA">ROPA</option>
                                                <option value="VETERINARIA">VETERINARIA</option>
                                                <option value="HELADERIA">HELADERIA</option>
                                            </select>
                                            <!---->
                                        </div> 
                                        <div class="mb-3">
                                            <label for="title2" class="form-label">Titulo</label>
                                            <input type="text" name="title2" id="title2" class="form-control" required>
                                        </div> 
                                        <div class="mb-3">
                                            <label for="resumen2" class="form-label">Resumen</label>
                                            <textarea type="text" name="resumen2" id="resumen2" class="form-control"  style="height: 10vh;" required></textarea>

                                        </div> 
                                        <div class="mb-3">
                                            <label for="subtitle2" class="form-label">Subtitulo</label>
                                            <input type="text" name="subtitle2" id="subtitle2" class="form-control" required>
                                        </div> 
                                        <!--Nuevos campos de Parrafo en editar-->
                                        <div class="mb-3">
                                            <label for="content2" class="form-label">Párrafo 1</label>
                                            <textarea type="text" name="content12" id="content12" class="form-control"  style="height: 20vh;" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="content2" class="form-label">Párrafo 2</label>
                                            <textarea type="text" name="content22" id="content22" class="form-control"  style="height: 20vh;" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="content2" class="form-label">Párrafo 3</label>
                                            <textarea type="text" name="content32" id="content32" class="form-control"  style="height: 20vh;" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="content2" class="form-label">Párrafo 4</label>
                                            <textarea type="text" name="content42" id="content42" class="form-control"  style="height: 20vh;" required></textarea>
                                        </div>
                                        <!---->
                                        <div class="mb-3">
                                            <label for="image1_portada" class="form-label">Imagen Portada</label>
                                            <img id="previewImagep_2" src="" alt="Vista Previa Imagen Portada" style="width: 90px; height: 90px; margin-left: 70px; margin-bottom: 15px;">
                                            <input type="file" name="image1_portada" id="image1_portada" class="form-control" accept=".jpg,.jpeg,.png,.webp,.avif">
                                        </div> 
                                        <div class="mb-3">
                                            <label for="image1_2" class="form-label">Imagen Principal</label>
                                            <img id="previewImage1_2" src="" alt="Vista Previa Imagen1" style="width: 90px; height: 90px; margin-left: 70px; margin-bottom: 15px;">
                                            <input type="file" name="image1_2" id="image1_2" class="form-control" accept=".jpg,.jpeg,.png,.webp,.avif">
                                        </div> 
                                        <div class="mb-3">
                                            <label for="image2_2" class="form-label">Imagen Secundaria</label>
                                            <img id="previewImage2_2" src="" alt="Vista Previa Imagen2" style="width: 90px; height: 90px; margin-left: 56px; margin-bottom: 15px;">
                                            <input type="file" name="image2_2" id="image2_2" class="form-control"  accept=".jpg,.jpeg,.png,.webp,.avif">
                                        </div> 
                                        <div class="mb-3">
                                            <label for="linkVideo2" class="form-label">Link de Video</label>
                                            <input type="text" name="linkVideo2" id="linkVideo2" class="form-control" required>
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
                        <th scope="col">CATEGORIA</th>
                        <th scope="col">TITULO</th>
                        <th scope="col">RESUMEN</th>
                        <th scope="col">SUBTITULO</th>
                        <th scope="col">PARRAFO 1</th>
                        <th scope="col">PARRAFO 2</th>
                        <th scope="col">PARRAFO 3</th>
                        <th scope="col">PARRAFO 4</th>
                        <th scope="col">IMAGEN PORTADA</th>
                        <th scope="col">IMAGEN PRINCIPAL</th>
                        <th scope="col">IMAGEN SECUNDARIA</th>
                        <th scope="col">LINK</th>
                        <th scope="col">FECHA</th>
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
        // POST Function 0
        function waitToGo() {
            const formMain = document.querySelector("#form-admin2");    //Llama al <form> con la clase 2, que es el de ADD
            formMain.addEventListener("submit", (e) => {                //De ese form ADD, agarra su evento que es al apretar el boton "AGREGAR"
                console.log("Boton activado");  
                e.preventDefault();
                // validarData("title", "complement", "link", "ADD")
                validarData("category", "title", "resumen", "subtitle", "content1", "content2", "content3", "content4", "image_portada", "image1", "image2", "linkVideo", "ADD")  //Llama a la funcion validarData, con sus id("") nombres
            });
        }

        //UPDATE Function 0
        function waitToGoUpdate() {
            const formMain = document.querySelector("#form-admin3");
            formMain.addEventListener("submit", (e) => {
                console.log("Boton activado Update");
                e.preventDefault();
                // validarData("title2", "complement2", "link2", "UPDATE")
                validarData("category2", "title2", "resumen2", "subtitle2", "content12", "content22", "content32", "content42", "image1_portada", "image1_2", "image2_2", "linkVideo2", "UPDATE") //Como parametro ponemos UPDATE
            });
        }

        //Funciones auxiliares
        // Genera un formato de fecha y hora
        function generateDateFormat() {
            const now = new Date();

            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');  // Los meses van de 0 a 11
            const day = String(now.getDate()).padStart(2, '0');

            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');

            return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
        }

        //Función que permite el cambio de nombre en la imagen
        // Procesa una imagen, creando un nuevo archivo con un nombre único basado en el timestamp
        function processImage(imgInput,timestamp){
            if (imgInput.files.length > 0) {
                const file = imgInput.files[0];
                // Crear nuevos objetos File con el nuevo nombre(con el fin de evitar borrados
                // o edición de imagenes que tengan el mismo nombre)
                const newName = `blog_${timestamp}_${file.name}`;
                return new File([file], newName, {
                    type: file.type,
                    lastModified: file.lastModified
                });
            }
            return null;
        }


        // Maneja la lógica de actualización de imágenes, incluyendo el procesamiento de nuevas imágenes y el manejo de imágenes existentes
        // Función que revisa si ya hay un documento subido en el inputFile,
        // sino coge su ruta que no ha cambiado y que lo pusimos en un atributo nuevo
        function handleImageForUpdate(input,fieldName,body,timestamp){
            if (input.files.length > 0) {
                const newFile = processImage(input, timestamp);
                body.append(fieldName, newFile);
                // Si hay una imagen nueva, la ruta antigua lo pasamos al body para asi eliminar la imagen antigua
                if (input.hasAttribute('data-existing-file')) {
                    body.append(`${fieldName}_antigua`, input.getAttribute('data-existing-file'));
                }
            } else if (input.hasAttribute('data-existing-file')) {
                body.append(fieldName, input.getAttribute('data-existing-file'));
            }
        }

        // Valida que todos los campos obligatorios estén llenos
        function validarCamposObligatorios(campos) {
            let isValid = true;
            campos.forEach(({ campo, mensaje }) => {
                if (campo.value.trim() === "") {
                    alert(mensaje);
                    isValid = false;
                }
            });
            return isValid;
        }

        // Función principal que valida los datos del formulario y maneja la lógica de agregar o actualizar posts
        // POST-UPDATE Function 1, Sea que llamen a esta funcion en waitToGo() o waitToGoUpdate(), con el tipe se vera si es ADD o UPDATE
        function validarData(ca, ti, re, subti, cont, img1, img2, link, tipe) {
            const elements = {
                categories: document.getElementById(ca),
                titles: document.getElementById(ti),
                resumens: document.getElementById(re),
                subtitles: document.getElementById(subti),
                contents: document.getElementById(cont),
                imgs1: document.getElementById(img1),
                imgs2: document.getElementById(img2),
                links: document.getElementById(link),
                idm: document.querySelector(".inputText") //Esto es por si estamos en el modal editar, agarramos el id que ya esta en un elemento <p>
            };

            const camposObligatorios = [
                { campo: elements.categories, mensaje: "Agregue una Categoría" },
                { campo: elements.titles, mensaje: "Agregue un Título" },
                { campo: elements.resumens, mensaje: "Agregue un resumen" },
                { campo: elements.subtitles, mensaje: "Agregue un subtítulo" },
                { campo: elements.contents, mensaje: "Agregue Contenido" },
                { campo: elements.links, mensaje: "Agregue link" }
            ];

            if (!validarCamposObligatorios(camposObligatorios)) return;

            alert("Todos los campos son correctos. " + tipe);

            if (tipe === "ADD") {
                handleAdd(elements);
            } else if (tipe === "UPDATE") {
                handleUpdate(elements);
            }
        }

        // Maneja la lógica para agregar un nuevo post
        function handleAdd(elements) {
            const timestamp = Date.now();
            const newFile1 = processImage(elements.imgs1, timestamp);
            const newFile2 = processImage(elements.imgs2, timestamp);
            const formattedDateTime = generateDateFormat();

            catchDate(elements.categories, elements.titles, elements.resumens, elements.subtitles,
                elements.contents, newFile1, newFile2, elements.links, formattedDateTime, "ADD");
            cleanDate(elements.categories, elements.titles, elements.resumens, elements.subtitles,
                elements.contents, elements.imgs1, elements.imgs2, elements.links);
        }

        // Maneja la lógica para actualizar un post existente
        function handleUpdate(elements) {
            catchDateUp(elements.idm, elements.categories, elements.titles, elements.resumens,
                elements.subtitles, elements.contents, elements.imgs1, elements.imgs2, elements.links, "UPDATE");
            modificarYCerrarModal();
        }


        // POST Function 4
        function cleanDate(c,t,r,s,p1,p2,p3,p4,img,img2,imgp,l) {
            c.value = ""
            t.value= ""
            r.value = ""
            s.value = ""
            p1.value = ""
            p2.value = ""
            p3.value = ""
            p4.value = ""
            img.value = ""
            img2.value = ""
            imgp.value = ""
            l.value = ""
        }

        // Prepara y envía los datos para crear un nuevo post
        // POST Function 2
        function catchDate(ca,ti,re,sub,cont,i1,i2,l,      f,tipe) {

            const body = new FormData();
            body.append('nombre_categoria', ca.value.trim());
            body.append('titulo', ti.value.trim());
            body.append('resumen', re.value);
            body.append('subtitulo', sub.value.trim());
            body.append('contenido', cont.value);
            body.append('imagen_principal', i1);
            body.append('imagen_secundaria', i2);
            body.append('videoBlog', l.value.trim());
            body.append("fecha", f);
            
            
            //Nos manda a la ultima funcion para un POST, por medio de type, nos dira si es un POST o UPDATE
            sentDataToServerSide(body, tipe);
        }
        function modificarYCerrarModal() {
            var modal = document.getElementById("staticBackdrop_2");
            var modalInstance = bootstrap.Modal.getInstance(modal);
            modalInstance.hide();
        }

        // Prepara y envía los datos para actualizar un post existente
        //UPDATE Function 2
        function catchDateUp(i, ca, ti, re, sub, cont, i1, i2, l, tipe) {
            const body = new FormData();
            const timestamp = Date.now();

            body.append("id", i.textContent);
            body.append('nombre_categoria', ca.value.trim());
            body.append('titulo', ti.value.trim());
            body.append('resumen', re.value);
            body.append('subtitulo', sub.value.trim());
            body.append('parrafo_uno', p1.value);
            body.append('parrafo_dos', p2.value);
            body.append('parrafo_tres', p3.value);
            body.append('parrafo_cuatro', p4.value);
            body.append('videoBlog', l.value.trim());

            handleImageForUpdate(i1, 'imagen_principal', body, timestamp);
            handleImageForUpdate(i2, 'imagen_secundaria', body, timestamp);

            sentDataToServerSide(body, tipe);
        }


        // Envía los datos al servidor y maneja la respuesta
        // POST Function 3, depende del type si es POST o UPDATE
        function sentDataToServerSide(form, tipe) {
            fetch(`../../../app/trigger/posteo.php?action=${tipe}`, {
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

        // METODO ELIMINAR
        tableBody.addEventListener("click",(e)=>{
            const button = e.target.closest("button");

            if(button && button.getAttribute("data-action") === "eliminar"){
                const tr= button.closest("tr");
                const id= tr.getAttribute("data-id");
                const img1 = tr.querySelector(".image1").getAttribute('ruta1');
                const img2 = tr.querySelector(".image2").getAttribute('ruta2');

                if (confirm("¿Está seguro que desea eliminar este registro?")) {
                    attemptToDeleteRecord(id, img1, img2, tr);
                }

            }
        })

        //Delete Post de Blog
        function attemptToDeleteRecord(id,img1,img2,tr){
            const numericId = validateAndConvertId(id);
            if (numericId === null) {
                console.error('El ID no es un número válido:', id);
                alert('El ID del post no es válido. No se puede eliminar el registro.');
                return;
            }

            const data = prepareBlogDataForDeletion(numericId, img1, img2);
            logFormattedData(data); // Log data for debugging purposes
            sendDeleteRequest(data, tr);
        }

        //Validar y convertir ID de post a número
        function validateAndConvertId(id) {
            const numericId = Number(id);
            return isNaN(numericId) ? null : numericId;
        }

        function prepareBlogDataForDeletion(id,img1,img2){
            return {
                id: id,
                image1: img1,
                image2: img2
            };
        }

        // Registrar datos formateados en la consola
        function logFormattedData(data) {
            const dataWithTypes = addTypeInfo(data);
            console.log('Deleting post with data:', JSON.stringify(dataWithTypes, null, 2));
        }

        // Crear una función para añadir tipos de datos (con propositos meramente informativos)
        function addTypeInfo(obj) {
            const typedObj = {};
            for (const key in obj) {
                if (obj.hasOwnProperty(key)) {
                    typedObj[key] = {
                        value: obj[key],
                        type: typeof obj[key]
                    };
                }
            }
            return typedObj;
        }

        // Enviar solicitud de eliminación
        function sendDeleteRequest(data, tr) {
            $.ajax({
                url: '../../../app/trigger/posteo.php?action=DELETE',
                type: 'POST',
                data: JSON.stringify(data),
                contentType: 'application/json',
                success: function (response) {
                    console.log('Success:', response);
                    tr.remove();
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                    alert('Hubo un error al eliminar el registro. Por favor, intente de nuevo.');
                }
            });
        }

        //Funcion GET ALL
        const dataRender = () => {
        fetch("../../../app/trigger/posteo.php?action=GET")
            .then((res) => res.json())
            .then((Data = []) => {
                tableBody.innerHTML = Data.map((data) => {
                    return `
                    <tr data-id="${data.id}">
                        <td>${data.id}</td>
                        <td>${data.nombre_categoria}</td>
                        <td>${data.titulo}</td>
                        <td>${data.resumen}</td>
                        <td>${data.subtitulo}</td>
                        <td>${data.parrafo_uno}</td>
                        <td>${data.parrafo_dos}</td>
                        <td>${data.parrafo_tres}</td>
                        <td>${data.parrafo_cuatro}</td>
                        <td><img class="image_portada" ruta3="${data.imagen_portada}" id="imagen_portada" src="../${data.imagen_portada}" alt="Imagen Portada" style="width: 90px; height: 90px;"></td>
                        <td><img class="image1" ruta1="${data.imagen_principal}" id="imagen1" src="../${data.imagen_principal}" alt="Imagen Principal" style="width: 90px; height: 90px;"></td>
                        <td><img class="image2" ruta2="${data.imagen_secundaria}" id="imagen2" src="../${data.imagen_secundaria}" alt="Imagen Secunaria" style="width: 90px; height: 90px;"></td>
                        <td>${data.videoBlog}</td>
                        <td>${data.fecha}</td>
                        <td><button data-action="eliminar" class="btnEliminar"  style="border:none;margin-right:10px;color:red;" aria-describedby="eliminar"><ion-icon name="trash-outline"></ion-icon></button>

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
                    fetch("../../../app/trigger/posteo.php?action=Mostrar", {
                        method: "POST",
                        body: bodyFats,
                    })
                        .then((res) => res.json())
                        .then((data) => {
                            const userData = data[0];   //En "userData", almacenamos el json que nos entrega sobre esa columna nada mas, con su id
                            
                            const ids = document.querySelector(".inputText");   //Agarramos los elementos del modal EDITAR
                            const cate2 = document.getElementById("category2")
                            const titu2 = document.getElementById("title2");
                            const res2 = document.getElementById("resumen2");
                            const subti2 = document.getElementById("subtitle2");
                            const parrafo12 = document.getElementById("content12");
                            const parrafo22 = document.getElementById("content22");
                            const parrafo32 = document.getElementById("content32");
                            const parrafo42 = document.getElementById("content42");
                            const i1_2 = document.getElementById("image1_2");
                            const i2_2 = document.getElementById("image2_2");
                            const ip_2 = document.getElementById("image1_portada");
                            const link2 = document.getElementById("linkVideo2");

                            
                            ids.textContent = userData.id;
                            cate2.value = userData.nombre_categoria;
                            titu2.value = userData.titulo;
                            res2.value = userData.resumen;
                            subti2.value = userData.subtitulo;
                            parrafo12.value = userData.parrafo_uno;
                            parrafo22.value = userData.parrafo_dos;
                            parrafo32.value = userData.parrafo_tres;
                            parrafo42.value = userData.parrafo_cuatro;      
                            //Creamos un atributo nuevo que contenga la ruta original, no importa si el file cambia, esta fue la ruta y/o nombre original de la imagen
                            i1_2.setAttribute('data-existing-file', userData.imagen_principal);
                            i2_2.setAttribute('data-existing-file', userData.imagen_secundaria);
                            ip_2.setAttribute('data-existing-file', userData.imagen_portada);



                            previewImage1_2.src = `../${userData.imagen_principal}`;
                            previewImage2_2.src = `../${userData.imagen_secundaria}`;
                            previewImagep_2.src = `../${userData.imagen_portada}`;

                            link2.value = userData.videoBlog;
                        
                        })
                        .catch((error) => {
                            console.error("Error al obtener los datos:", error);
                        });
                    // Escuchar los cambios en los inputs de archivo para actualizar la vista previa
                    document.getElementById('image1_2').addEventListener('change', function (event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                        document.getElementById('previewImage1_2').src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                    });

                    document.getElementById('image2_2').addEventListener('change', function (event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                        document.getElementById('previewImage2_2').src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                    });

                    document.getElementById('image1_portada').addEventListener('change', function (event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                        document.getElementById('previewImagep_2').src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
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
