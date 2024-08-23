<?php
require_once dirname(dirname(__FILE__)) . '/core/database.php';

class User
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

    /*
    stmt-> Statement (Sentencia SQL)
    */
    public function searchUser()
    {
        $sql = "SELECT * FROM users WHERE username='$this->username'";
        $stmt = $this->prepareQuery($sql);
        $stmt->execute();
        if ($stmt) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        } else {
            echo "<script>alert('Error al consultar')</script>";
        }
    }
    public function listUser()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->prepareQuery($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertUser()
    {
        $sql = "INSERT INTO users(username,password,user_level,status,nombres,telefono) VALUES(?,?,?,default,?,?)";
        $stmt = $this->prepareQuery($sql);
        $stmt->bindParam(1, $this->username);
        $stmt->bindParam(2, $this->password);
        $stmt->bindParam(3, $this->user_level);
        $stmt->bindParam(4, $this->nombres);
        $stmt->bindParam(5, $this->telefono);
        return $stmt->execute();

    }
    public function updateUser()
    {
        $sql = "UPDATE users SET username='$this->username',password='$this->password',user_level='$this->user_level',nombres='$this->nombres',telefono='$this->telefono' WHERE id='$this->id'";
        $stmt = $this->prepareQuery($sql);
        return $stmt->execute();
    }

    public function deleteUserGalleries(){
        $return = false;

        $gallery = $this->getGalleryForUser($this->id);
        foreach ($gallery as $img) {
            unlink($_SERVER["DOCUMENT_ROOT"] . "/admin/imgGallery/webp/" . $img['image']);
            $this->idgallery = $img['id'];
            $this->deleteGalleryById();
        }
        $gallery = $this->getGalleryForUser($this->id);
        if (sizeof($gallery) == 0) {
            $return = true;
        } else {
            $return = false;
        }
    }

    public function deleteUserById(){
        $stmt = $this->preparequery("DELETE FROM users WHERE id = :id");
        $stmt->bindValue(":id", $this->id, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount() != 0) {
            $return = true;
        } else {
            $return = false;
        }
        return $return;
    }

    public function deleteUserAndGalleriesById(){
        $this->deleteUserGalleries();
        $isUserDeleted = $this->deleteUserById();
        return $isUserDeleted;
    }

    public function getActiveUsers()
    {
        $sql = "SELECT id, nombres FROM users WHERE user_level='2' AND status='1' ";
        $stmt  = $this->prepareQuery($sql);
        $stmt ->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertGallery()
    {
        $sql = "INSERT INTO galeria(descripcion,idcliente,image) VALUES(?,?,?)";
        $stmt = $this->prepareQuery($sql);
        $stmt->bindParam(1, $this->descripcion);
        $stmt->bindParam(2, $this->idcliente);
        $stmt->bindParam(3, $this->image);
        return $stmt->execute();
    }

    /*
    * Gallery se refiere a una imagen de la galería
    */
    public function getAllGalleries()
    {
        $sql = "SELECT * FROM galeria";
        $stmt = $this->prepareQuery($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function deleteGalleryById()
    {
        $sql = "DELETE FROM galeria WHERE id='$this->idgallery'";
        $stmt = $this->prepareQuery($sql);
        return $stmt->execute();
    }

    public function getClientGalleries($page = 1, $itemsPerPage = 6)  // Cambiado a 6
    {
        $offset = ($page - 1) * $itemsPerPage;

        $sql = "SELECT galeria.descripcion, galeria.image 
            FROM galeria
            INNER JOIN users ON galeria.idcliente = users.id
            WHERE users.username = :username 
            AND users.user_level = 2
            LIMIT :limit OFFSET :offset";

        $stmt = $this->prepareQuery($sql);
        $stmt->bindParam(':username', $this->identclientgallery, PDO::PARAM_STR);
        $stmt->bindParam(':limit', $itemsPerPage, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Añade un método para contar el total de imágenes para la paginación
    public function countClientGalleries()
    {
        $sql = "SELECT COUNT(*) AS total 
            FROM galeria
            INNER JOIN users ON galeria.idcliente = users.id
            WHERE users.username = :username 
            AND users.user_level = 2";

        $stmt = $this->prepareQuery($sql);
        $stmt->bindParam(':username', $this->identclientgallery, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function galleryforAll()
    {
        $sql = "SELECT galeria.descripcion, galeria.image FROM galeria
        INNER JOIN users
        ON galeria.idcliente = users.id
        WHERE  users.user_level =3";
        $stmt = $this->prepareQuery($sql);
        $stmt->execute();
        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    public function changeStatus()
    {
        $sql = "UPDATE users SET status = '$this->status' WHERE id='$this->id'";
        $stmt = $this->prepareQuery($sql);
        return $stmt->execute();
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getUserLevel()
    {
        return $this->user_level;
    }

    public function setUserLevel($user_level)
    {
        $this->user_level = $user_level;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getIdgallery()
    {
        return $this->idgallery;
    }

    public function setIdgallery($idgallery)
    {
        $this->idgallery = $idgallery;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getIdcliente()
    {
        return $this->idcliente;
    }

    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getIdentclientgallery()
    {
        return $this->identclientgallery;
    }

    public function setIdentclientgallery($identclientgallery)
    {
        $this->identclientgallery = $identclientgallery;
    }

}
?>