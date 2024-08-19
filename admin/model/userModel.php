<?php
require_once dirname(dirname(__FILE__)) . '/core/database.php';

class Usuario
{
    protected $id;
    protected $username;
    protected $password;
    protected $user_level;

    //Nuevo campo estado de usuario (deshabilitado/habilitado)
    protected $status;

    protected $nombres;
    protected $telefono;

    protected $idgallery;
    protected $descripcion;
    protected $idcliente;
    protected $image;

    protected $identclientgallery;

    private function getDBInstance(){
        return DBConnection::getInstance()->getDb();
    }

    private function prepareQuery($sql){
        return $this->getDBInstance()->prepare($sql);
    }

    protected function SearchUsuario()
    {
        $sql = "SELECT * FROM users WHERE username='$this->username'";
        $consulta = $this->prepareQuery($sql);
        $consulta->execute();
        if ($consulta) {

            $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $objetoConsulta;

        } else {
            echo "<script>alert('Error al consultar')</script>";
        }

    }
    protected function listUser()
    {
        $sql = "SELECT * FROM users";
        $consulta = $this->prepareQuery($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoConsulta;


    }

    protected function insertUser()
    {
        $sql = "INSERT INTO users(username,password,user_level,status,nombres,telefono) VALUES(?,?,?,default,?,?)";
        $insertar = $this->prepareQuery($sql);
        $insertar->bindParam(1, $this->username);
        $insertar->bindParam(2, $this->password);
        $insertar->bindParam(3, $this->user_level);
        $insertar->bindParam(4, $this->nombres);
        $insertar->bindParam(5, $this->telefono);
        return $insertar->execute();

    }
    protected function UpdateUser()
    {
        $sql = "UPDATE users SET username='$this->username',password='$this->password',user_level='$this->user_level',nombres='$this->nombres',telefono='$this->telefono' WHERE id='$this->id'";
        $insertar = $this->prepareQuery($sql);
        return $insertar->execute();
    }

    protected function userdelete()
    {
        $return = false;

        $gallery = $this->getGalleryForUser($this->id);
        foreach ($gallery as $img) {
            unlink($_SERVER["DOCUMENT_ROOT"] . "/admin/imgGallery/" . $img['image']);
            $this->idgallery = $img['id'];
            $this->deleteYouGallery();
        }
        $gallery = $this->getGalleryForUser($this->id);
        if (sizeof($gallery) == 0) {
            $return = true;
        } else {
            $return = false;
        }
        $stmt = $this->preparequery("DELETE FROM users WHERE id = :id");
        $stmt->bindValue(":id", $this->id, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount() != 0) {
            $return = true;
        } else {
            $return = false;
        }
        return $return;
    } //___________________________________________________________________________________

    protected function showuser()
    {
        $sql = "SELECT id, nombres FROM users WHERE user_level='2' AND status='1' ";
        $consulta = $this->prepareQuery($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoConsulta;
    }

    protected function inserGallerys()
    {
        $sql = "INSERT INTO galeria(descripcion,idcliente,image) VALUES(?,?,?)";
        $insertar = $this->prepareQuery($sql);
        $insertar->bindParam(1, $this->descripcion);
        $insertar->bindParam(2, $this->idcliente);
        $insertar->bindParam(3, $this->image);
        return $insertar->execute();


    }

    protected function listviewgallery()
    {
        $sql = "SELECT * FROM galeria";
        $consulta = $this->prepareQuery($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoConsulta;


    }
    protected function deleteYouGallery()
    {
        $sql = "DELETE FROM galeria WHERE id='$this->idgallery'";
        $insertar = $this->prepareQuery($sql);
        return $insertar->execute();
    }

// userModel.php

    protected function galleryforclients($page = 1, $itemsPerPage = 6)  // Cambiado a 6
    {
        $offset = ($page - 1) * $itemsPerPage;

        $sql = "SELECT galeria.descripcion, galeria.image 
            FROM galeria
            INNER JOIN users ON galeria.idcliente = users.id
            WHERE users.username = :username 
            AND users.user_level = 2
            LIMIT :limit OFFSET :offset";

        $consulta = $this->prepareQuery($sql);
        $consulta->bindParam(':username', $this->identclientgallery, PDO::PARAM_STR);
        $consulta->bindParam(':limit', $itemsPerPage, PDO::PARAM_INT);
        $consulta->bindParam(':offset', $offset, PDO::PARAM_INT);
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }


// Añade un método para contar el total de imágenes para la paginación
    protected function countGalleryItems()
    {
        $sql = "SELECT COUNT(*) AS total 
            FROM galeria
            INNER JOIN users ON galeria.idcliente = users.id
            WHERE users.username = :username 
            AND users.user_level = 2";

        $consulta = $this->prepareQuery($sql);
        $consulta->bindParam(':username', $this->identclientgallery, PDO::PARAM_STR);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC)['total'];
    }

    protected function galleryforAll()
    {
        $sql = "SELECT galeria.descripcion, galeria.image FROM galeria
        INNER JOIN users
        ON galeria.idcliente = users.id
        WHERE  users.user_level =3";
        $consulta = $this->prepareQuery($sql);
        $consulta->execute();
        if ($consulta->execute()) {
            $objetoConsulta = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $objetoConsulta;
        }


    }
    protected function getGalleryForUser($id)
    {
        $stmt = $this->prepareQuery("SELECT id,idcliente,image FROM galeria WHERE idcliente = :idcliente");
        $stmt->bindValue(":idcliente", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /***
     * Metodo para cambiar estado de usuario deshabilitado/habilitado
     */
    protected function changeStatus()
    {
        $sql = "UPDATE users SET status = '$this->status' WHERE id='$this->id'";
        $insertar = $this->prepareQuery($sql);
        return $insertar->execute();
    }
}
?>