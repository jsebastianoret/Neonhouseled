<?php
    
    session_start();
//Hola des
    if( isset($_SESSION['id']) ){
        
        //echo ("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa  aaaaaaaaaa ".$_SESSION['rol']);
        if($_SESSION['rol'] == 'Usuario'){
            //echo ("Estas el princial intranet");
            include_once './admin2/public/view/intranet_user.php';
        }
    } 
    else {
        header('Location: login.php');
    } 

