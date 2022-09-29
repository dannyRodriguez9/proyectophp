<?php
 
 require_once("C://xampp/htdocs/udemy/proyecto/controller/usernameController.php");
 $obj= new userNameController();
 $obj->update($_POST["id"], $_POST["nombre"]);

?>