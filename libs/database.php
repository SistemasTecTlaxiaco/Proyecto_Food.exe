<? php
class  Database {
     $ host privado ;
    private  $ db ;
     usuario $ privado ;
     contraseña $ privada ;
     juego de caracteres $ privado ;
     puerto $ privado ;

     función  pública __construct () {
        $ esto -> host = constante ( 'HOST' );
        $ esto -> db = constante ( 'DB' );
        $ esto -> usuario = constante ( 'USUARIO' );
        $ esto -> contraseña = constante ( 'CONTRASEÑA' );
        $ this -> charset = constante ( 'CHARSET' );
        $ esto -> puerto = constante ( 'PUERTO' );

    }
    function  connect () {
        prueba {
             $ dns = 'mysql: host = pk1l4ihepirw9fob.cbetxkdyhwsb.us-east-1.rds.amazonaws.com; puerto = 3306; nombrebd = gdxzaewzup8sigpm ' ;
$ nombre de usuario = 'nj4v3bybsyrznops' ;
$ contraseña = 'kcaoyaygqjrt2ry9' ;         
$ opciones = matriz (
    PDO :: MYSQL_ATTR_INIT_COMMAND => "ESTABLECER NOMBRES 'utf8mb4'" ,
    PDO :: ATTR_DEFAULT_FETCH_MODE => PDO :: FETCH_OBJ );
    $ pdo = nuevo  PDO ( $ dsn , $ nombre de usuario , $ contraseña , $ opciones );
    return  $ pdo ;

        } captura ( PDOException  $ e ) {
            print_r ( 'Error de conexión:' . $ e -> getMessage ());
        }        
    }
}

?>
