<?php
require_once dirname(dirname(__FILE__)) . '/core/database.php';

class Suscriptor
{
    protected $id;
    protected $nombre;
    protected $telefono;
    protected $correo;

    public function __construct($nombre = "", $telefono = "", $correo = "")
    {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->correo = $correo;
    }

    public function nuevoSuscriptor()
    {
        $ic = new Conexion();

        $sql = "INSERT INTO suscriptor(nombre, telefono, correo) VALUES(?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $this->nombre);
        $insertar->bindParam(2, $this->telefono);
        $insertar->bindParam(3, $this->correo);
        $result = $insertar->execute();

        return $result;
    }

    public function buscarSuscriptor()
    {
        $ic = new Conexion();
        $sql = "select count(*) AS resultado FROM suscriptor WHERE correo='$this->correo';";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();

        if ($consulta) {
            $objetoConsulta = $consulta->fetch();
            return $objetoConsulta;
        }
    }

    public function listSuscriptor()
    {
        $ic = new Conexion();
        $sql = "SELECT * FROM suscriptor";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);

        return $objetoConsulta;
    }

    protected function listUser()
    {
        $ic = new Conexion();
        $sql = "SELECT * FROM users WHERE status= 1";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);

        return $objetoConsulta;
    }
}
?>