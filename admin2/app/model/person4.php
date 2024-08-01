<?php
class ModeloPerson4 {
    public static function insert($table, $columns, $values) {
        $columnNames = implode(',', $columns);
        $valuePlaceholders = implode(',', array_fill(0, count($values), '?'));
        $query = "INSERT INTO $table ($columnNames) VALUES ($valuePlaceholders)";
        
        return Db::query($query, $values);
    }

    public static function get(){

        [ $err, $res ] =  Db::query('SELECT * FROM personredes4'); 

        if( $err ) {
            return [];
        }

        return $res->get_result()->fetch_all(MYSQLI_ASSOC);
        
    }
    public static function delete($id){
        [$error , $res] =  Db::query('DELETE FROM personredes4 WHERE id = ?', [$id]);
        if($error) {
            return false;
        }

        return $res->affected_rows > 0;
    }
}
