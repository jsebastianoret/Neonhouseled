<?php
class ControllerlibroReclamacion {

    public static function add($nombre, $apellido, $documento, $numeroDocumento, $email, $celular, $direccion, 
    $distrito, $ciudad, $tipoReclamo, $servicioContratado, $reclamoPerson, $checkReclamoForm, $aceptaPoliticaPrivacidad) {

        $resultado = ModelolibroReclamacion::insert('libroReclamacion', ['nombre', 'apellido', 
        'documento', 'numeroDocumento', 'email', 'celular', 'direccion', 'distrito', 'ciudad', 'tipoReclamo',
        'servicioContratado', 'reclamoPerson', 'checkReclamoForm', 'aceptaPoliticaPrivacidad'], 
        [$nombre, $apellido, $documento, $numeroDocumento, $email, $celular, $direccion, 
        $distrito, $ciudad, $tipoReclamo, $servicioContratado, $reclamoPerson, $checkReclamoForm, $aceptaPoliticaPrivacidad]);
        
        // Verificamos el resultado de la operación de inserción
        if ($resultado[0] === null) {
            json_encode(['status' => true, 'message' => 'Datos enviados correctamente']);
        } else {
            json_encode(['status' => false, 'message' => 'Los datos no se han enviado']);
        }
    }

    public static function delete(){
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        return ModelolibroReclamacion::delete( $id ); 
    }


    public static function get(){

        return ModelolibroReclamacion::get();
        
    }

}
