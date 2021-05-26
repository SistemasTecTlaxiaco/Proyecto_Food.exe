<?php
//AQUI SE VALIDA EL INICIO DE SESION SI YA ESTA REGISTRADO EL COMENSAL
//Se usa el telefono y la contraseña para comprobar en base de datos
$telefono-$_POST['telefono'];
$contraseña-$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

//se incluye el archivo que hace la conexion con la base de datos
include('db.php');
//la consulta almacena si de la base de datos coincide el usuario y contraseña
$consulta="SELECT * FROM cliente where telefono='$telefono' and contraseña='$contraseña";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas){
    //si coinciden los datos se va al perfil del cliente
    header("Location:home_cliente.php");
}else{
    ?>
    <?php
    //si no coinciden, se regresa a la pagina y muestra el error, no existe en la base de datos
    include ("inicio_cliente.php");
    ?>
    <h1 class="error">Usuario no valido o no registrado</h1>
    <?php
}
mysqli_free_results($resultado);
mysqli_closet();