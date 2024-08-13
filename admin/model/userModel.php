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

    protected function SearchUsuario()
    {
        $ic = new Conexion();
        $sql = "SELECT * FROM users WHERE username='$this->username'";
        $consulta = $ic->db->prepare($sql);
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
        $ic = new Conexion();
        $sql = "SELECT * FROM users";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoConsulta;


    }

    protected function insertUser()
    {
        $ic = new Conexion();

        $sql = "INSERT INTO users(username,password,user_level,status,nombres,telefono) VALUES(?,?,?,default,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $this->username);
        $insertar->bindParam(2, $this->password);
        $insertar->bindParam(3, $this->user_level);
        $insertar->bindParam(4, $this->nombres);
        $insertar->bindParam(5, $this->telefono);
        return $insertar->execute();

    }


    protected function UpdateUser()
    {
        $ic = new Conexion();
        $sql = "UPDATE users SET username='$this->username',password='$this->password',user_level='$this->user_level',nombres='$this->nombres',telefono='$this->telefono' WHERE id='$this->id'";
        $insertar = $ic->db->prepare($sql);
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
        $cnx = new Conexion();
        $stmt = $cnx->db->prepare("DELETE FROM users WHERE id = :id");
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
        $ic = new Conexion();
        $sql = "SELECT id, nombres FROM users WHERE user_level='2' AND status='1' ";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoConsulta;
    }

    protected function inserGallerys()
    {

        $ic = new Conexion();
        $sql = "INSERT INTO galeria(descripcion,idcliente,image) VALUES(?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $this->descripcion);
        $insertar->bindParam(2, $this->idcliente);
        $insertar->bindParam(3, $this->image);
        return $insertar->execute();


    }

    protected function listviewgallery()
    {
        $ic = new Conexion();
        $sql = "SELECT * FROM galeria";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoConsulta;


    }
    protected function deleteYouGallery()
    {
        $ic = new Conexion();
        $sql = "DELETE FROM galeria WHERE id='$this->idgallery'";
        $insertar = $ic->db->prepare($sql);
        return $insertar->execute();
    }

    protected function galleryforclients()
    {
        $ic = new Conexion();
        $sql = "SELECT galeria.descripcion, galeria.image FROM galeria
        INNER JOIN users
        ON galeria.idcliente = users.id
        WHERE users.username = '$this->identclientgallery' AND  users.user_level =2";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        if ($consulta->execute()) {
            $objetoConsulta = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $objetoConsulta;
        }


    }

    protected function galleryforAll()
    {
        $ic = new Conexion();
        $sql = "SELECT galeria.descripcion, galeria.image FROM galeria
        INNER JOIN users
        ON galeria.idcliente = users.id
        WHERE  users.user_level =3";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        if ($consulta->execute()) {
            $objetoConsulta = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $objetoConsulta;
        }


    }

    protected function getGalleryForUser($id)
    {
        $cnx = new Conexion();
        $stmt = $cnx->db->prepare("SELECT id,idcliente,image FROM galeria WHERE idcliente = :idcliente");
        $stmt->bindValue(":idcliente", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /***
     * Metodo para cambiar estado de usuario deshabilitado/habilitado
     */
    protected function changeStatus()
    {
        $ic = new Conexion();
        $sql = "UPDATE users SET status = '$this->status' WHERE id='$this->id'";
        $insertar = $ic->db->prepare($sql);
        return $insertar->execute();
    }
}
?>