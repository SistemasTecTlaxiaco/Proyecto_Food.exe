<?php
class NuevoModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function insert($datos){

        try{
//Realiza la conexión con la base de datos y usa sentencias de insercion en tabla clientes
            $query=$this->db->connect()->prepare('INSERT INTO cliente (USUARIO, TELEFONO, CONTRA) VALUES (:usuario, :telefono, :contra)');
//Asigna los parametros segun el dato en el arreglo recibido, realiza la insercion con execute
            if($query->execute(['usuario'=>$datos['usuario'],'telefono'=>$datos['telefono'], 'contra'=>$datos['contra']])){
                //si la insercion es exitosa devuelve un valor verdadero
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            $this->view->mensaje = "Ya existe el cliente";
            $this->view->render('errores');  
            return false;
        }

    }
    public function insert2($datos){
        try{
            //Realiza la conexión con la base de datos y usa sentencias de insercion en tabla Establecimiento
            $query=$this->db->connect()->prepare('INSERT INTO establecimiento (NOMBRE, TELEFONO, CONTRA, DOC_VALIDA, HORARIO) 
            VALUES (:nombre, :telefono, :contra, :doc_valida, :horario)');
            //Asigna los parametros segun el dato en el arreglo recibido, realiza la insercion con execute    
            if($query->execute(['nombre'=>$datos['nombre'],'telefono'=>$datos['telefono'], 'contra'=>$datos['contra'], 'doc_valida'=>$datos['doc_valida'], 'horario'=>$datos['horario']])){
            
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){ $this->view->mensaje = "Ya existe el establecimiento";
            $this->view->render('errores');  
            return false;
        }
    }
    public function insertarplato($datos){
        require_once("./views/islogin.php");

        try{
            //Realiza la conexión con la base de datos y usa sentencias de insercion en tabla platillos
            $query=$this->db->connect()->prepare('INSERT INTO platillos (NOMBRE, PRECIO, CARACTERISTICAS,ID_ESTABLECIMIENTO) 
            VALUES (:nombre, :precio, :caracteristicas, :id_establecimiento)');
            //Asigna los parametros segun el dato en el arreglo recibido, realiza la insercion con execute    
            if($query->execute(['nombre'=>$datos['nombre'],'precio'=>$datos['precio'], 'caracteristicas'=>$datos['cara'], 
            'id_establecimiento'=>$idusuario])){
            
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){ $this->view->mensaje = "Ya existe el platillo";
            $this->view->render('menu_establecimiento');  
            return false;
        }
    }


    
    public function iniciarsesion1($telefono,$contra){
     
        try{
            $db = $this->db->connect();
           // $hash_password= hash('sha256', $contra); //encriptacion de contraseña
           if($contra=="no"){
            $stmt = $db->prepare("SELECT id_establecimiento FROM establecimiento WHERE (telefono=:telefono)"); 
            $stmt->bindParam("telefono", $telefono,PDO::PARAM_STR) ;
           }
           else{
            $stmt = $db->prepare("SELECT id_establecimiento FROM establecimiento WHERE (telefono=:telefono) AND contra=:contra"); 
            $stmt->bindParam("telefono", $telefono,PDO::PARAM_STR) ;
            $stmt->bindParam("contra", $contra,PDO::PARAM_STR) ;}
            
            $stmt->execute();
            $count=$stmt->rowCount();
            $data=$stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            if($count)
            {
                session_start();
            $_SESSION['id_establecimiento']=$data->id_establecimiento; // 
            return true;
            }
            else
            {
            return false;
            } 
            }
            catch(PDOException $e) {
            echo 'ALGO SALIO MAL'. $e->getMessage();
            }
            
            }

             
    public function iniciarsesion2($telefono,$contra){
     
        try{
            $db = $this->db->connect();
           // $hash_password= hash('sha256', $contra); //encriptacion de contraseña
           if($contra=="no"){
            $stmt = $db->prepare("SELECT id_cliente FROM cliente WHERE (telefono=:telefono)"); 
            $stmt->bindParam("telefono", $telefono,PDO::PARAM_STR) ;
           }
           else{
            $stmt = $db->prepare("SELECT id_cliente FROM cliente WHERE (telefono=:telefono) AND contra=:contra"); 
            $stmt->bindParam("telefono", $telefono,PDO::PARAM_STR) ;
            $stmt->bindParam("contra", $contra,PDO::PARAM_STR) ;}
            
            $stmt->execute();
            $count=$stmt->rowCount();
            $data=$stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            if($count)
            {
                session_start();
            $_SESSION['id_cliente']=$data->id_cliente; // 
            return true;
            }
            else
            {
            return false;
            } 
            }
            catch(PDOException $e) {
            echo 'ALGO SALIO MAL'. $e->getMessage();
            }
            
            }

}
?>