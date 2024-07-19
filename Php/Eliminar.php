<?php

if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM `usuario` WHERE id_usuario =$id");
    if ($sql==1) {
        echo'<div class= "alert alert-success">Usuario eliminado correctamente</div>';
    } else{
        echo '<div>Error al eliminar</div>';
    }
}

?>