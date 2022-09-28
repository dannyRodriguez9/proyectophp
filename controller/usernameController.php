<?php
    
    class userNameController
    {
        private $model;
        public function __construct()
        {
            require_once("C://xampp/htdocs/udemy/proyecto/model/usernameModel.php");
             $this->model= new userNameModel();
        }

        public function guardar($nameUser)
        {
            $id=$this->model->insertar($nameUser);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");

        }

        public function show($id)
        {
            return ($this->model->show($id)!=false) ? $this->model->show($id) : header("Location:index.php");

        }

        public function index()
        {
            return ($this->model->index()) ? $this->model->index() : false;
        }
    
    }

?> 