
<?php
//AQUI SE INGRESA EL ESTABLECIMIENTO NUEVO A LA BASE DE DATOS
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$telefono=$_POST['telefono'];
$archivo=$_POST['archivo'];

session_start();
$_SESSION['usuario']=$usuario;

//se incluye el archivo que hace la conexion con la base de datos
include('db.php');
$insertar="INSERT INTO establecimientos ('contraseña','doc_valida','horario','nombre','telefono','usuario') VALUES('$contraseña','documento','no definido','$usuario','$telefono','$usuario')";
$resultado=mysqlI_query($conexion,$insertar);
$filas=mysqli_num_rows($resultado);
if($filas){
    echo "correcto";
    header("Location:home_establecimiento.php");
}else{
    ?>
    <?php  
      echo "algo fue mal en la base de datos";

    //si no coinciden, se regresa a la pagina y muestra el error, no existe en la base de datos
    include ("registro_establecimiento.php");
    ?>
    <?php
}
mysqli_free_results($resultado);
mysqli_closet($conexion);
