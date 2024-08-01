<?php
class ControllerPerson1 {

    public static function add($nombre, $telefono, $email, $service) {

        // Llamamos al método insert() de la clase ModeloPerson1 para insertar los datos en la base de datos
        $resultado = ModeloPerson1::insert('persondigi1', ['nombre', 'telefono', 'email', 'service'], [$nombre, $telefono, $email, $service]);
        
        // Verificamos el resultado de la operación de inserción
        if ($resultado[0] === null) {
            json_encode(['status' => true, 'message' => 'Datos enviados correctamente']);
        } else {
            json_encode(['status' => false, 'message' => 'Los datos no se han enviado']);
        }
    }
    public static function delete(){
        $id = isset($_GET['id'])? $_GET['id'] : null;
        return ModeloPerson1::delete($id);
    }


    public static function get(){

        return ModeloPerson1::get();
        
    }
}
