<?php

class StaterController{
    public function __construct()
    {
        session_start();
        
    }

    public function redireccionar()
    {
        header("location: ../index.php");        
    }
}

?>