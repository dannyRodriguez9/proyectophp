<?php
    require_once("C://xampp/htdocs/proyectophp/view/head/head.php");
    require_once("C://xampp/htdocs/proyectophp/controller/usernameController.php");
    $obj= new userNameController();
    $user=$obj->show($_GET["id"]);
?>

<form action="update.php" method="post" autocomplete="off">
    <h2 class="text-center">Modificando registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user["id"]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo nombre</label>
        <div class="col-sm-10">
        <input type="text" name="nombre" class="form-control" id="inputPassword" value="<?= $user["nombre"]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user["id"]?>">Cancelar</a>
    </div>
</form>