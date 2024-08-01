<?php

    session_start();

    class ControllerAuth {
        public static function login () {
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            if( in_array('', [ $email, $password ]) ) {
                exit(json_encode([
                    'estado' => false,
                    'mensaje' => 'los datos estan vacios'
                ]));
            }

            if( strlen($password) < 6 ) {
                exit(json_encode([
                    'estado' => false,
                    'mensaje' => 'la contraseña debe tener un minimo de 6'
                ]));
            } 

            if( isset($_SESSION['id']) ) {
                exit(json_encode([
                    'estado' => false,
                    'mensaje' => 'ya existe una sesion'
                ]));
            }

            $usuario = ModelAuth::login([
                'email' => $email,
                'password' => $password
            ]);
            $rol = ModelAuth::rolBack([
                'email' => $email,
                'password' => $password
            ]);

            if( $usuario == null ) {
                exit(json_encode([
                    'estado' => false,
                    'mensaje' => 'La cuenta no existe'
                ]));
            }

            if( $usuario['contrasena'] != $password ) {
                exit(json_encode([
                    'estado' => false,
                    'mensaje' => 'La contraseña es incorrecta'
                ]));
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['rol'] = $usuario['rol'];
            $_SESSION['name'] = $usuario['nombre'];
            $valorDeRol = $rol[1];
            echo json_encode([
                'estado' => true,
                'mensaje' => 'exito al ingresar',
                'rol' => $valorDeRol
            ]);

        }
 
        public static function logout () {

            session_destroy();
            echo json_encode([
                'estado' => true,
                'mensaje' => 'exito al cerrar sesion'
            ]);
        }


    }