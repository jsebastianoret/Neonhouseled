<?php
    session_start();
    
    // echo ("Estas el principal");
    
    if( isset($_SESSION['id']) && $_SESSION['rol']=='Administrador') header('Location: intranet.php');
    else if(isset($_SESSION['id']) && $_SESSION['rol']=='Usuario') header('Location: intranet_user.php');
    // else include_once "./admin2/public/view/intranet.php";
    else include_once "admin2/public/view/login.php";
    // echo json_encode($_SESSION);
    