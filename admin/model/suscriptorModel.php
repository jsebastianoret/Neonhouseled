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

    private function getDBInstance(){
        return DBConnection::getInstance()->getDb();
    }

    private function prepareQuery($sql){
        return $this->getDBInstance()->prepare($sql);
    }

    public function nuevoSuscriptor()
    {

        $sql = "INSERT INTO suscriptor(nombre, telefono, correo) VALUES(?,?,?)";
        $insertar = $this->prepareQuery($sql);
        $insertar->bindParam(1, $this->nombre);
        $insertar->bindParam(2, $this->telefono);
        $insertar->bindParam(3, $this->correo);
        $result = $insertar->execute();

        return $result;
    }
    public function buscarSuscriptor()
    {
        $sql = "select count(*) AS resultado FROM suscriptor WHERE correo='$this->correo';";
        $consulta = $this->prepareQuery($sql);
        $consulta->execute();

        if ($consulta) {
            $objetoConsulta = $consulta->fetch();
            return $objetoConsulta;
        }
    }

    public function listSuscriptor()
    {

        $sql = "SELECT * FROM suscriptor";
        $consulta = $this->prepareQuery($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);

        return $objetoConsulta;
    }

    protected function listUser()
    {
        $sql = "SELECT * FROM users WHERE status= 1";
        $consulta = $this->prepareQuery($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);

        return $objetoConsulta;
    }
}
?>