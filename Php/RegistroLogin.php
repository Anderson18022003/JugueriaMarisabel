<?php 
//registrar//

require ("Conectar.php");

$nombrere=$_POST['nombrere'];
$emailre=$_POST['emailre'];
$contraseñare=$_POST['contraseñare'];

$consulta="INSERT INTO `usuario`( `nombre`, `email`, `contraseña`, `id_cargo`) VALUES ('$nombrere','$emailre','$contraseñare','2')";

$resultado=mysqli_query($conexion,$consulta);

if ($resultado) {

    echo "<script>alert('Usuario registrado');</script>";
    echo "<script>window.location.href='../login.html';</script>";
}else{

    echo "<script>alert('Usuario no registrado');</script>";
    echo "<script>window.location.href='../login.html';</script>";
}
exit();
?>