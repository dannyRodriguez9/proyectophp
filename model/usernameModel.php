<?php

    class userNameModel
    {
        private $PDO;
        public function __construct()
        {
            require_once("C://xampp/htdocs/udemy/proyecto/conexionBD/db.php");
            $con= new db();
            $this->PDO=$con->conexion();
        }

        public function insertar($nameUser)
        {
            $stament= $this->PDO->prepare("INSERT INTO username VALUES (null,:nameUser)");
            $stament->bindParam(":nameUser",$nameUser);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }

        public function show($id)
        {
            $stament=$this->PDO->prepare("SELECT * FROM username where id=:id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false;

        }
    }



?>