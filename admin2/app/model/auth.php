<?php
    class ModelAuth {
        public static function login($Data = []) {


            [ $err, $res ] =  Db::query('SELECT * FROM usuarios WHERE usuario = ?', [ $Data['email'] ]); 

            if( $err ) {
                return null;
            }

            return $res->get_result()->fetch_assoc();
 
        }
        public static function rolBack($Data = []) {


            $rol =  Db::querys('SELECT rol FROM usuarios WHERE usuario = ?', [ $Data['email'] ]); 

            

            return $rol;
 
        }
    }

    //el correo no existe
    //la contraseña no existe


    //las credenciale son incorrectas