<!DOCTYPE html>  
<html lang="es">  
<head>  
    <title>Lista de pedido</title>  
</head>  
<body> 
<?php require 'view/header.php';?> 
<?php
include_once "home_establecimiento.php";
$db="food";
$conexion=Conectar();
mysql_select_db($db, $conexion)or die ('error'. mysql_errno($conexion)."-".mysql_error($conexion));
$query = "SELECT * FROM detalle_pedido";
// Ejecuta las consultas
$result = mysql_query($query);
// Check resultado
// Si hubo un error mostras cual es
if (!$result) {
$message = 'Invalid query: ' . mysql_error() . " ";
$message .= 'Whole query: ' . $query;
die($message);
}
// Use result
//Recorre todas las filas y va devolviendo el resultado
while ($row =mysql_fetch_row($result)) {
echo $row['fecha'];
echo $row['id_detalle'];
echo $row['id_pago'];
echo $row['id_pedido'];
echo $row['id_platillos'];
echo $row['monto_total'];
}
    
//Libera el resultado
mysql_free_result($result);
//Cierra conexion
mysql_close($conexion);
?>
</body>  
</html> 
