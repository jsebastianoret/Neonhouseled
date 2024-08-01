<?php

    class ModelIntranet {
        public static function get(){

            [ $err, $res ] =  Db::query('SELECT * FROM contactanos'); 

            if( $err ) {
                return [];
            }

            return $res->get_result()->fetch_all(MYSQLI_ASSOC);
            
        }

        public static function delete($id){

            [ $err, $res ] =  Db::query('DELETE FROM contactanos WHERE id = ?', [$id]); 

            if($err) {
                return false;
            }

            return $res->affected_rows > 0;
            
        }

        public static function update_status($id, $status){

            [ $err, $res ] =  Db::query('UPDATE contactanos SET estado = ? WHERE id = ?', [ $status, $id ]); 

            if($err) {
                return false;
            }

            return $res->affected_rows > 0;
            
        }
 
        public static function add($columns, $params, $values){

            [ $err, $res ] =  Db::query("INSERT INTO contactanos ({$columns}) VALUES ({$params})", $values); 

            if($err) {
                return $err;
            } 

            return $res->affected_rows > 0;
            // return "INSERT INTO contactanos ({$columns}) VALUES ({$params})";
            
        }
        public static function Roles($Data = []) {


            $rol =  Db::querys('SELECT rol FROM usuarios WHERE usuario = ?', [ $Data['email'] ]); 

            

            return $rol;
 
        }
    }