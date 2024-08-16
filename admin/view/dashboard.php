<?php

require_once '../controller/staterController.php';
$redirect = new StaterController();
if (empty($_SESSION['username'])) {

    $redirect->redireccionar();

}
if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 1:
            true;
            break;
        case 2:
            header('location: cliente.php');
            break;
    }
}

require_once "layout/header.php";
?>
<div class="container panel">
    <div class="row ">
        <div class="col-lg-12 panel-t">
            <h1> Bienvenido <?php echo  $_SESSION['username'];?></h1>
            <h2>Zona de Administracion de Usuarios</h2>
        </div>
    </div>
</div>
<br>
<div class="container panel">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btnSalir" data-toggle="modal">Agregar Nuevo Usuario</button>    
            </div>    
        </div>    



    
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="productosTabla" class="table table-striped table-bordered table-condensed" style="width:100%">
                            <thead>
                                <tr id="tabla__head" class="table-h">
                                    <th class="tabla__celda">Usuario</th>
                                    <th class="tabla__celda">Nombres</th>
                                    <th class="tabla__celda">Nivel de usuario</th>
                                    <th class="tabla__celda">Editar</th>
                                    <th class="tabla__celda">Eliminar</th>
                                    <th class="tabla__celda">Estado</th>
                                </tr>
                            </thead>                      
                                
                       </table>                    
                    </div>
                </div>
        </div>  
</div>

<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-t">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" id="close" class="close modal-c" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
            </div>
        <form id="formPersonas">    
            <div class="modal-body">
            <input type="text" id="id" value="0" hidden>
                <div class="form-group">
                <label for="username" class="col-form-label">Usuario:</label>
                <input type="text" class="form-control" id="username" required>
                </div>
                <div class="form-group">
                <label for="password" class="col-form-label">Contraseña:</label>
                <input type="password" class="form-control" id="password" required>
                </div> 

                <div class="form-group">
                    <label for="gga" class="col-form-label">Nivel de Usuario:</label>
                    <br>
                        <select id ="leveluser" class="form-select form-select-lg mb-3 gga" >
                            <option value="1">Admin</option>
                            <option value="2">Cliente</option>
                            <option value="3">Gestion</option>
                        </select>                    
                </div>
                
                <div class="form-group">
                <label for="name" class="col-form-label">Nombres</label>
                <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                <label for="phone" class="col-form-label">Celular</label>
                <input type="text" class="form-control" id="phone" required>
                </div>             
            </div>
            <div class="modal-footer">
                <button type="button" id="Cancelar" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>


<?php require_once "layout/foother.php";?>