<?php
require_once dirname(dirname(__FILE__)). '/core/database.php';

$ic = new Conexion();

$sql = "SELECT * FROM users WHERE username='admin'";
$consulta = $ic->db->prepare($sql);
$consulta->execute();
if($consulta){
    $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
} else {
    echo "<script>alert('Error al consultar')</script>";
}




$infoUsuario = $objetoConsulta;
if($infoUsuario){
    foreach($infoUsuario as $usuario){
        //echo var_dump($usuario->password);
        //echo $password;
        $passha = '1234';
        
        if($usuario->username == 'admin'){
            if($passha == $usuario->password){
                // Verificacion si usuario esta habilitado para ingresar 
                if($usuario->status == true){
                    $_SESSION['username'] = $usuario->username;
                    $_SESSION['nombres'] = $usuario->nombres;
                    $_SESSION['rol'] = $usuario->user_level;
                    echo 1;
                }else{
                    echo 0;
                }
            }
        } else {
            echo 0;
        }
    }
} else {
    echo 0;
}



?>