<?php
class Database{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    private $puerto;

    public function __construct(){
        $this->host=constant('HOST');
        $this->db=constant('DB');
        $this->user=constant('USER');
        $this->password=constant('PASSWORD');
        $this->charset=constant('CHARSET');
        $this->puerto=constant('PUERTO');

    }
    function connect(){
        try{
            $dsn = 'mysql:host=localhost;port=3307;dbname=base de datos';
$username = 'root';
$password = '';
$options = array(
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