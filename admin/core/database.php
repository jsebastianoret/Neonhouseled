<?php

class DBConnection{
    private $db;
    private static $instance= null;

 public function __construct()
    {
        $host = "localhost";
        $dbname = "ghxumdmy_neonhouselednew";
        $username = "ghxumdmy_neonhoselednew";
        $password = "ghxumdmy_neonhoselednew";

/*
    $host = "localhost";
    $dbname = "ghxumdmy_neonhouselednew";
    $username = "ghxumdmy_neonhoselednew";
    $password = "C,nnQLkM7a!p";
        */

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        } catch (PDOException $th) {
        echo "Error: ". $th->getMessage();
        }
    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new DBConnection();
        }
        return self::$instance;
    }
    public function CloseConexion()
    {
        $this->db = null;
    }
    public function getDb(){
     return $this->db;
    }
}
?>