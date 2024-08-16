<?php
require_once 'core/database.php';
require_once "controller/userController.php";
$control = new UserController();
$control->index();

?>