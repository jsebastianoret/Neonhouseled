<?php
class ModelolibroReclamacion {
    public static function insert($table, $columns, $values) {
        $columnNames = implode(',', $columns);
        $valuePlaceholders = implode(',', array_fill(0, count($values), '?'));
        $query = "INSERT INTO $table ($columnNames) VALUES ($valuePlaceholders)";
        
        return Db::query($query, $values);
    }

    public static function get(){
        [ $err, $res ] =  Db::query('SELECT * FROM libroreclamacion'); 

        if( $err ) {
            return [];
        }
        return $res->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public static function delete($id){

        [ $err, $res ] =  Db::query('DELETE FROM libroreclamacion WHERE idReclamacion = ?', [$id]); 

        if($err) {
            return false;
        }

        return $res->affected_rows > 0;
        
    }
}
