<?php


class ModelPosteo{

    public static function get(){
        [$validacion , $valor] = DB::query('SELECT *FROM posting_blog');

        if($validacion){
            return [];
        }

        return $valor->get_result()->fetch_all(MYSQLI_ASSOC);
    }


    public static function getBlog(){
        [$validacion , $valor] = DB::query('SELECT *FROM posting_blog');

        if($validacion){
            return [];
        }

        return $valor->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public static function add($tabla,$columnas,$valores){
        $columnNames = implode(',', $columnas);
        $valuePlaceholders = implode(',', array_fill(0, count($valores), '?'));
        $query = "INSERT INTO $tabla ($columnNames) VALUES ($valuePlaceholders)";

        return DB::query($query,$valores);
    }
    
    public static function getMost($id){
        [ $err, $res ] =  Db::query('SELECT * FROM posting_blog where id=?',[$id]); 

        if( $err ) {
            return [];
        }

        return $res->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public static function update($id, $nombre_categoria, $titulo, $resumen, $subtitulo, $contenido, $imagen_principal, $imagen_secundaria, $videoBlog) {
        [$err, $res] = DB::query(
            'UPDATE posting_blog SET nombre_categoria = ?, titulo = ?, resumen = ?, subtitulo = ?, contenido = ?, imagen_principal = ?, imagen_secundaria = ?, videoBlog = ? WHERE id = ?',
            [$nombre_categoria, $titulo, $resumen, $subtitulo, $contenido, $imagen_principal, $imagen_secundaria, $videoBlog, $id]
        );

        if ($err) {
            return false;
        }

        return $res->affected_rows > 0;
    }


    public static function delete($id){
        [ $err, $res ] =  Db::query('DELETE FROM posting_blog WHERE id = ?', [$id]); 

        if($err) {
            return false;
        }

        return $res->affected_rows > 0;
    }
}