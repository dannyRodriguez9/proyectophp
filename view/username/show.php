<?php

require_once("C://xampp/htdocs/proyectophp/view/head/head.php");
require_once("C://xampp/htdocs/proyectophp/controller/usernameController.php");
$obj= new userNameController();
$date=$obj->show($_GET["id"]);
?>

<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a class="btn btn-primary" href="index.php">Regresar</a>
    <a class="btn btn-success" href="edit.php?id=<?=$date["id"]?>">Actualizar</a>
        <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado no se podra recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id=<?=$date["id"]?>" class="btn btn-danger">Eliminar</a>
            <!--<button type="button" class="btn btn-danger">Eliminar</button>-->
        </div>
        </div>
    </div>
    </div>
</div>

<!--Tabla-->
<table class="table table-striped">
    <thead>  <!-- encabezado--->
        <tr> <!--filas-->
            <th scope="col">Id</th> <!--celda del encabezado-->
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody><!--cuerpo de la tabla-->
        <tr >
            <td scope="col"><?=$date["id"]?></td><!--dato de fila id-->
            <td scope="col"><?=$date["nombre"]?></td><!--dato de fila nombre-->
        </tr>

    </tbody>
</table>
