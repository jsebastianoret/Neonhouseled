<?php

class SessionHelper{
    public function __construct()
    {
        session_start();
        
    }

    public function redirect()
    {
        header("location: ../index.php");        
    }
}

?>