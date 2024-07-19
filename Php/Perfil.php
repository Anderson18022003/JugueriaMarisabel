<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/261028f2b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Css/perfil.css">
</head>

<body>
    <script>
        function eliminar(){
            var respuesta=confirm("¿Estas seguro de eliminar?");
            return respuesta
        }
    </script>
    <br><h1 class="text-center bg-light py-lg-3 px-lg-4" >REGISTRO DE JUGUERIA MARISABEL</h1><br><br>
    <?php
    include "Conectar.php";
    include "Eliminar.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de personas</h3>

            <?php
            include "Registro_Persona.php";
            ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la Persona</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo de la Persona</label>
                <input type="text" class="form-control" name="email">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contraseña de la Persona</label>
                <input type="text" class="form-control" name="contraseña">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cargo de la Persona(1AD -- 2CLI)</label>
                <input type="text" class="form-control" name="cargo">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
            <a href="../index.html" class="btn btn-info">Volver Menu</a>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">CONTRASEÑA</th>
                        <th scope="col">CARGO</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include "Conectar.php";
                    /* $sql = $conexion->query(" SELECT * FROM `usuario`"); */
                    $sql = $conexion->query(" SELECT usuario.id_usuario, usuario.nombre, usuario.email, usuario.contraseña, cargo.nivel AS nivel
                                                    FROM usuario
                                                    JOIN cargo ON usuario.id_cargo = cargo.id_cargo");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id_usuario ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->email ?></td>
                            <td><?= $datos->contraseña ?></td>
                            <td><?= $datos->nivel ?></td>
                            <td>
                                <a href="./modificar.php?id=<?=$datos->id_usuario ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="./Perfil.php?id=<?=$datos->id_usuario?>" class="btn btn-samll btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php   }
                    ?>


                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
                        
</html>