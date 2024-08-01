<?php
class ModeloPerson1 {
    public static function insert($table, $columns, $values) {
        $columnNames = implode(',', $columns);
        $valuePlaceholders = implode(',', array_fill(0, count($values), '?'));
        $query = "INSERT INTO $table ($columnNames) VALUES ($valuePlaceholders)";
        
        return Db::query($query, $values);
    }

    public static function delete($id){
        [$error , $res] =  Db::query('DELETE FROM persondigi1 WHERE id = ?', [$id]);
        if($error) {
            return false;
        }

        return $res->affected_rows > 0;
    }
    public static function get(){

        [ $err, $res ] =  Db::query('SELECT * FROM persondigi1'); 

        if( $err ) {
            return [];
        }

        return $res->get_result()->fetch_all(MYSQLI_ASSOC);
        
    }
}
