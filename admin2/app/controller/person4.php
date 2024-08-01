<?php
class ControllerPerson4 {

    public static function add($nombre, $telefono, $email) {

        // Llamamos al método insert() de la clase ModeloPerson1 para insertar los datos en la base de datos
        $resultado = ModeloPerson4::insert('personredes4', ['nombre', 'telefono', 'email'], [$nombre, $telefono , $email]);
        
        // Verificamos el resultado de la operación de inserción
        if ($resultado[0] === null) {
            json_encode(['status' => true, 'message' => 'Datos enviados correctamente']);
        } else {
            json_encode(['status' => false, 'message' => 'Los datos no se han enviado']);
        }
    }

    public static function get(){

        return ModeloPerson4::get();
        
    }
    public static function delete(){
        $id = isset($_GET['id'])? $_GET['id'] : null;
        return ModeloPerson4::delete($id);
    }
}
 