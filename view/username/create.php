<?php
    require_once("C://xampp/htdocs/udemy/proyecto/view/head/head.php");
?>

    <form action="store.php" method="post" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
            <input type="text" name="nameUser" class="form-control" id="nameUser" aria-describedby="nameUser" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="index.php" class="btn btn-danger">Cancelar</a>
    </form>

<?php
    require_once("C://xampp/htdocs/udemy/proyecto/view/head/footer.php");
?>