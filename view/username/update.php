<?php
 
 require_once("C://xampp/htdocs/proyectophp/controller/usernameController.php");
 $obj= new userNameController();
 $obj->update($_POST["id"], $_POST["nombre"]);

?>