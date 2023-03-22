<?php

    class userNameModel
    {
        private $PDO;
        public function __construct()
        {
            require_once("C://xampp/htdocs/proyectophp/conexionBD/db.php");
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
            $stament=$this->PDO->prepare("SELECT * FROM username where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false;

        }

        public function index()
        {
            $stament = $this->PDO->prepare("SELECT * from username");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function update($id,$nombre)
        {
            $stament=$this->PDO->prepare("UPDATE username set nombre=:nombre where id=:id");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":id",$id);
            return ($stament->execute())? $id:false;

        }

        public function delete($id)
        {
            $stament= $this->PDO->prepare("DELETE FROM username where id=:id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false ;
        }


    }



?>