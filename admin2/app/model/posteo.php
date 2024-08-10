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

    public static function update($id, $nombre_categoria, $titulo, $resumen, $subtitulo, $parrafo1, $parrafo2, $parrafo3, $parrafo4, $imagen_principal, $imagen_secundaria, $imagen_portada, $imagen_card, $videoBlog) {
        [$err, $res] = DB::query(
            'UPDATE posting_blog SET nombre_categoria = ?, titulo = ?, resumen = ?, subtitulo = ?, parrafo_uno = ?, parrafo_dos = ?, parrafo_tres = ?, parrafo_cuatro = ?, imagen_principal = ?, imagen_secundaria = ?, imagen_portada = ?, imagen_card = ?, videoBlog = ? WHERE id = ?',
            [$nombre_categoria, $titulo, $resumen, $subtitulo, $parrafo1, $parrafo2, $parrafo3, $parrafo4, $imagen_principal, $imagen_secundaria, $imagen_portada, $imagen_card,$videoBlog, $id]
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

     //Obtener blog x categoria, solo tres registros
     public static function getBlogCat($categoria, $id){
        [$err, $res ] = Db::query('SELECT * FROM posting_blog WHERE nombre_categoria = ? AND id != ? LIMIT 3;', [$categoria, $id]);
        if( $err ) {
            return [];
        }
        return $res->get_result()->fetch_all(MYSQLI_ASSOC);
    }
    public static function getPostById($id)
    {
        [$err, $res] = DB::query('SELECT * FROM posting_blog WHERE id = ?', [$id]);

        if ($err) {
            return null;
        }

        $result = $res->get_result();
        if ($result->num_rows === 0) {
            return null;
        }

        return $result->fetch_assoc();
    }

}