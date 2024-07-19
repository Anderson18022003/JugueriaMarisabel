<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["email"]) and !empty($_POST["contraseña"]) and !empty($_POST["cargo"])) {
        
        $nombre=$_POST["nombre"];
        $email=$_POST["email"];
        $contraseña=$_POST["contraseña"];
        $cargo=$_POST["cargo"];

        $sql = $conexion->query("INSERT INTO `usuario`(`nombre`, `email`, `contraseña`, `id_cargo`) VALUES ('$nombre','$email','$contraseña','$cargo')");

        if ($sql==1) {
            echo '<div class="alert alert-success">Persona registrado correctamente</div>';
        }else {
            echo '<div class="alert alert-danger">Error al registrar Persona</div>';
        }




    }else{
        echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
    }
}

?>