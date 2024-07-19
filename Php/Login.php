<?php

require ("Conectar.php");

$usuario=$_POST['email'];
$contraseña=$_POST['contraseña'];

$consulta="SELECT * FROM `usuario` WHERE email='$usuario' and contraseña='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);

if ($resultado) {
    $fila = mysqli_fetch_array($resultado);

    // Comprobamos si $fila no es null
    if ($fila) {
        if ($fila['id_cargo'] == 1) {
            header("location: Perfil.php");
            exit();
        } elseif ($fila['id_cargo'] == 2) {
            header("location: ../Productos.html");
            exit();
        }
    }
}else
// Si no hay coincidencias, redirigir a la misma página y mostrar un mensaje
header("location: ../login.html?id=open");
exit();

?>




