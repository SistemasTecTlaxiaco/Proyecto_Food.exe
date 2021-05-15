<?php
$usuario-$_POST['usuario'];
$contraseña-$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include('db.php');
$consulta="SELECT * FROM usuarios where usuarios='$usuario' and contraseña='$contraseña";
$resultado=mysql_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas){
    header("Location:home.php");
}else{
    ?>
    <?php
    include ("inicio_establecimiento.php");
    ?>
    <h1 class="error">ERROR EN EL USUARIO</h1>
    <?php
}
mysql_free_results($resultado);
mysqli_closet();