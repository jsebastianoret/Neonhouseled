<?php

require_once '../controller/staterController.php';
$redirect = new StaterController();
if (empty($_SESSION['username'])) {

    $redirect->redireccionar();

}
if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 2:
            header('location: cliente.php');
            break;

        case 3:
            header('location: general.php');
            break;

        default:
    }
}
require_once "layout/header.php"; ?>

<div class="container">
    <h2>Zona de Administracion de Suscriptores</h2>
</div>
<div class="container panel">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="clientes" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead>
                        <tr id="tabla__head">
                            <th class="tabla__celda">id</th>
                            <th class="tabla__celda">nombre</th>
                            <th class="tabla__celda">telefono</th>
                            <th class="tabla__celda">correo</th>
                            <th class="tabla__celda">Eliminar</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once "layout/foother.php"; ?>