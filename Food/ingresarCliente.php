
<?php

//AQUI SE INGRESA EL COMENSAL NUEVO A LA BASE DE DATOS
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$telefono=$_POST['telefono'];
session_start();
$_SESSION['usuario']=$usuario;

//se incluye el archivo que hace la conexion con la base de datos
include('db.php');
$insertar="INSERT INTO cliente ('contraseña','usuario','telefono') VALUES('$contraseña','$usuario','$telefono')";
$resultado=mysqli_query($conexion,$insertar);
$filas=mysqli_num_rows($resultado);
if($filas){
    echo "correcto";
    header("Location:home_clientelogin.php");
}else{
    ?>

    <?php
        echo "algo fue mal en la base de datos";
    //si no coinciden, se regresa a la pagina y muestra el error, no existe en la base de datos
    include ("registro_cliente.php");
    ?>
    <?php
}

"mysqli_free_results"($resultado);
"mysqli_closet"($conexion);