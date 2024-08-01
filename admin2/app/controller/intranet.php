<?php
    class ControllerIntranet {
        public static function get(){

            return ModelIntranet::get();
            
        }

        public static function delete(){
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            return ModelIntranet::delete( $id ); 
        }

        public static function update_status(){
            $id     = isset($_GET['id']) ? $_GET['id'] : null;
            $status = isset($_POST['estado']) ? $_POST['estado'] : null;
            return ModelIntranet::update_status( $id, $status ); 
        }

        public static function add(){
            $id     = isset($_GET['id']) ? $_GET['id'] : null;
            $status = isset($_POST['estado']) ? $_POST['estado'] : null;
            //return ModelIntranet::add( $columns, $values ); 
            $array = $_POST;

            $columns    = implode(', ', array_keys($array));
            $params     = implode(', ', array_map(fn()=> '?', $array));
            $values     = array_values($array);
            
            return ModelIntranet::add( $columns, $params, $values ); 
            
        }
        public static function Roles () {
            
            $email = $_POST['user'];
            $password = $_POST['con'];
            $rol =  ModelIntranet::Roles([
                'email' => $email,
                'password' => $password
            ]);
            if( $rol == null ) {
                exit(json_encode([
                    'estado' => false,
                    'mensaje' => 'La cuenta no existe'
                ]));
            }
            $valorDeRol = $rol[1];
            echo json_encode([
                'rol' => $valorDeRol
            ]);
        }
            
    }