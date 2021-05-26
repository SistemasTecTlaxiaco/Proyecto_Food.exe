
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
$insertar="INSERT INTO establecimiento ('Contraseña','doc_valida','horario','nombre','telefono','usuario') VALUES('$contraseña','documento','no definido','$usuario','$telefono','$usuario')";
$resultado=mysqli_query($conexion,$insertar);

if ($resultado == FALSE) {
  echo "<script >alert('Registro Fallido'); location.href ='registro_establecimiento';</script>";
} else {
 $filas = mysqli_affected_rows($resultado);

 if ($filas > 0){
      echo "<script>alert('Registro Exitoso'); location.href ='home_establecimiento';</script>";
   } else {
       if ($filas < 0 ) {
         echo "<script >alert('" . mysqli_info($resultado) . " Registro Exitoso'); location.href ='home_establecimiento';</script>";
       }
   }
}
mysqli_free_results($resultado);
mysqli_close($conexion);