<?php
if(!empty($_POST["btnregistrar"])){
     if (!empty($_POST["nombre"]) and !empty($_POST["email"]) and !empty($_POST["contraseña"]) and !empty($_POST["cargo"])) {
        
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $email=$_POST["email"];
        $contraseña=$_POST["contraseña"];
        $cargo=$_POST["cargo"];
        $sql=$conexion->query("UPDATE `usuario` SET `nombre`='$nombre',`email`='$email',`contraseña`='$contraseña',`id_cargo`='$cargo' WHERE id_usuario=$id");
        if ($sql==1) {
            header("location:Perfil.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>Error al registrar Persona</div>";
     }
}

?>