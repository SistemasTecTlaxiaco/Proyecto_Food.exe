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
             $ dns = 'mysql: host =w3epjhex7h2ccjxx.cbetxkdyhwsb.us-east-1.rds.amazonaws.com; puerto = 3306; nombrebd = wk1jkjwcw7iwluww ' ;
$ nombre de usuario = 'oqvhc6hm3krmmi6u' ;
$ contraseña = 'tukonndciuyimuzi' ;         
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
