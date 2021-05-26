<?php
$servername = "localhost";
$database = "food_db";
$username = "root";
$password = "";
// Create connection
$conexion = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conexion) {
    die("Todo mal :( " . mysqli_connect_error());
}
echo "Todo bien :)";
mysqli_close($conexion);
?>