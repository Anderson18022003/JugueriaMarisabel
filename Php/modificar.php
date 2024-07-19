<?php

include "Conectar.php";


$id = $_GET["id"];


$sql = $conexion->query(" SELECT usuario.id_usuario, usuario.nombre, usuario.email, usuario.contraseña, cargo.nivel  AS nivel
                                                    FROM usuario
                                                    JOIN cargo ON usuario.id_cargo = cargo.id_cargo WHERE usuario.id_usuario = $id")


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/261028f2b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Css/Modificar.css">
</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center alert alert-secondary">Modificar Usuarios</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
 
        include "Modificarfinal.php";

        while ($datos = $sql->fetch_object()) { ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la Persona</label>
                <input type="text" class="form-control" name="nombre" value="<?=$datos->nombre ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo de la Persona</label>
                <input type="text" class="form-control" name="email" value="<?= $datos->email ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contraseña de la Persona</label>
                <input type="text" class="form-control" name="contraseña" value="<?= $datos->contraseña ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cargo de la Persona</label>
                <input type="text" class="form-control" name="cargo" value="<?= $datos->nivel ?>">
            </div>



        <?php }


        ?>

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
        <a href="Perfil.php" class="btn btn-info">Cancelar</a>
    </form>
</body>

</html>