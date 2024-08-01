<?php
class ControllerUsuarios {

    public static function add($usuario, $contrasena, $nombre, $rol) {

        // Llamamos al método insert() de la clase ModeloPerson1 para insertar los datos en la base de datos
        $resultado = ModeloUsuarios::insert('usuarios', ['usuario', 'contrasena', 'nombre','rol'], [$usuario, $contrasena, $nombre,$rol]);
        
        // Verificamos el resultado de la operación de inserción
        if ($resultado[0] === null) {
            json_encode(['status' => true, 'message' => 'Datos enviados correctamente']);
        } else {
            json_encode(['status' => false, 'message' => 'Los datos no se han enviado']);
        }
    }
    public static function delete(){
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        return ModeloUsuarios::delete( $id ); 
    }

    public static function get(){

        return ModeloUsuarios::get();
        
    }
    public static function getMost($id){

        return ModeloUsuarios::getShow($id);
        
    }
    public static function update_status(){
        $id     = isset($_POST['id']) ? $_POST['id'] : null;
        $user = isset($_POST['user']) ? $_POST['user'] : null;
        $pass = isset($_POST['pass']) ? $_POST['pass'] : null;
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $rol = isset($_POST['rol']) ? $_POST['rol'] : null;
        return ModeloUsuarios::update_status( $id, $user,$pass,$name,$rol); 
    }
    
}
