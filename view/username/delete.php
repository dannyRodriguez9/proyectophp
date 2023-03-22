<?php

 require_once("C://xampp/htdocs/proyectophp/controller/usernameController.php");
 $obj= new userNameController();
 $obj->delete($_GET['id']);

?>