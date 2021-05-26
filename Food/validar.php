<?php
//AQUI SE VALIDA EL INICIO DE SESION SI YA ESTA REGISTRADO ESTABLECIMIENTO
$usuario-$_POST['usuario'];
$contraseña-$_POST['Contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

//se incluye el archivo que hace la conexion con la base de datos
include('db.php');
//la consulta almacena si de la base de datos coincide el usuario y contraseña
$consulta="SELECT * FROM establecimiento where usuario='$usuario' and Contraseña='$contraseña";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas){
    //si coinciden los datos se va al perfil del establecimiento
    header("Location:home_establecimiento.php");
}else{
    ?>
    <?php
    //si no coinciden, se regresa a la pagina y muestra el error, no existe en la base de datos
    include ("inicio_establecimiento.php");
    ?>
    <h1 class="error">Usuario no valido o no registrado</h1>
    <?php
}
mysqli_free_results($resultado);
mysqli_closet($conexion);
