<?php
class ControllerPerson2
{

    public static function add($nombre, $telefono, $email)
    {

        // Llamamos al método insert() de la clase ModeloPerson1 para insertar los datos en la base de datos
        $resultado = ModeloPerson2::insert('personweb2', ['nombre', 'email', 'telefono'], [$nombre, $email, $telefono]);

        // Verificamos el resultado de la operación de inserción
        if ($resultado[0] === null) {
            json_encode(['status' => true, 'message' => 'Datos enviados correctamente']);
        } else {
            json_encode(['status' => false, 'message' => 'Los datos no se han enviado']);
        }
    }

    
    public static function get(){

        return ModeloPerson2::get();
        
    }
    public static function delete(){
        $id = isset($_GET['id'])? $_GET['id'] : null;
        return ModeloPerson2::delete($id);
    }
}
