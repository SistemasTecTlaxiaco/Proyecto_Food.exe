<?php
class Database{

    function connect(){
        try{
        //DATOS PARA CONEXION HEROKU
        $dsn = 'mysql:host=wcwimj6zu5aaddlj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com; port=3306; dbname=mmdfc754pwa3llx7;';
        $username = 'zfkdp6whp5okxxgy';
        $password = 'c95r118qp2h6ev0c'; 
        
        /*PARA PRUEBAS LOCALES
        $dsn = 'mysql:host=localhost; port=3306; dbname=food;';
        //El usuario por defecto es ROOT, sin contraseña    
        $username = 'root';
        $password = '';*/
 
        $options = array(
   //La extensión Objetos de Datos de PHP (PDO) 
   //define un interfaz ligera para poder acceder a cualquier base de datos en PHP .
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'",
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
    $pdo = new PDO($dsn, $username, $password, $options);
    return $pdo;

        }catch (PDOException $e){
            print_r('Error connection: '.$e->getMessage());
        }        
    }
}

?>
