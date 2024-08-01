<?php
    
    session_start();
//Hola des
    if( isset($_SESSION['id']) ){
        
        //echo ("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa  aaaaaaaaaa ".$_SESSION['rol']);
        if($_SESSION['rol'] == 'Administrador'){
        //    echo ("Estas el principal intranet");
           //$names = $_SESSION['name'];
            include_once './admin2/public/view/intranet.php';
        }
    } 
    else {
        header('Location: login.php');
    } 