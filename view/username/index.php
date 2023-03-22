<?php

require_once("C://xampp/htdocs/proyectophp/view/head/head.php");
require_once("C://xampp/htdocs/proyectophp/controller/usernameController.php");
$obj= new userNameController();
$rows=$obj->index();

?>

<div class="mb-3">
    <a href="/proyectophp/view/username/create.php" class="btn btn-primary">Agregar nuevo usuario</a>
</div>

<!--Tabla-->

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows):?>
            <?php foreach($rows as $row):?>
                <tr>
                    <th><?= $row["id"] ?></th>  <!--retorna los id-->
                    <th><?= $row["nombre"] ?></th> <!--retorna los nombres-->
                    <th>
                        <a href="show.php?id= <?= $row["id"]?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?id= <?= $row["id"]?>" class="btn btn-success">Modificar</a>
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
                                    <a href="delete.php?id=<?=$row["id"]?>" class="btn btn-danger">Eliminar</a>
                                    <!--<button type="button" class="btn btn-danger">Eliminar</button>-->
                                </div>
                                </div>
                            </div>
                            </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No existen registros</td>
            </tr>
        <?php endif;?>
    </tbody>

</table>