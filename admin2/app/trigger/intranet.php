<?php

    require_once '../../config/db.php';

    require_once '../controller/intranet.php';
    require_once '../model/intranet.php';

    require_once '../db/db.php';


    $action = isset($_GET['action']) ? $_GET['action'] : null;

    if( $action == 'GET' ) {
        echo json_encode( ControllerIntranet::get() );
    } 
    else if( $action == 'DELETE' ) {
        echo json_encode( ControllerIntranet::delete() );
    } 

    else if( $action == 'UPDATE_STATUS' ) {
        echo json_encode( ControllerIntranet::update_status() );
    }
 
    else if( $action == 'ADD' ) {
        echo json_encode( ControllerIntranet::add() );
    }
    else if( $action == 'Roles' ) {
        ControllerIntranet::Roles();
    }
    
 
    //