<?php
    require_once("C://xampp/htdocs/udemy/proyecto/controller/usernameController.php");
    $obj= new userNameController();
    $obj->guardar($_POST["nameUser"]);

?>