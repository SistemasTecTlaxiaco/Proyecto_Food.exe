<?php
   class Nuevo extends Controller
   {       
       function __construct() 
       {
           parent::__construct();
          // $this->nuevomodelo=new NuevoModel();
       }
       function registrarCliente(){
         $usuario=$_POST['usuario'];
           $telefono=$_POST['telefono'];
           $contra=$_POST['contraseña'];
           /*echo $matricula;
           echo $nombre;
           echo $apellido;*/
          $datos=['usuario'=>$usuario,'telefono'=>$telefono,'contra'=>$contra];
        if($this->model->iniciarsesion2($telefono,'no'))
        {
         $this->view->mensaje = "Ya existe en el registro";
         $this->view->render('errores');  

        }else{
    //Si los datos no estan duplicados o erroneos, abre la pagina inicial
       if($this->model->insert($datos))
        {
         echo "Nuevo establecimiento registrado ";
         require_once 'views/inicio_cliente.php';

        }else
        {
         $this->view->mensaje = "Error, dato duplicado o revise la informacion capturada";
         $this->view->render('errores');  
            
        }
      }
       }
       function registrarEstablecimiento(){
        $nombre=$_POST['usuario'];
        $telefono=$_POST['telefono'];
        $contra=$_POST['contraseña'];
        $doc_valida='no especificado';
        $horario='no definido';
        $datos=['telefono'=>$telefono,'contra'=>$contra];
        
        if($this->model->iniciarsesion1($telefono,'no'))
        {
            $this->view->mensaje = "Ya existe el dato en el registro";
         $this->view->render('errores');    

        }else{
       $datos2=['nombre'=>$nombre,'telefono'=>$telefono,'contra'=>$contra, 'doc_valida'=>$doc_valida, 'horario'=>$horario];
    
       if($this->model->insert2($datos2))
        {
         echo "Nuevo establecimiento registrado";
         require_once 'views/inicio_establecimiento.php';

        }else
        {
             $this->view->mensaje = "Error dato duplicado o revise la informacion capturada";
         $this->view->render('errores');  
        }
      }
      }
      function sesion1(){

        $telefono=$_POST['telefono'];
        $contra=$_POST['contraseña'];
        $datos=['telefono'=>$telefono,'contra'=>$contra];
        if($this->model->iniciarsesion1($telefono,$contra))
        {
       //  echo "Inicio de sesion exitoso";
        include_once './views/home_establecimiento.php';

        }else
        {
           //ESTE SI FUNCIONA PARA MOSTRAR ERRORES
         $this->view->mensaje = "Error al capturar datos o el usuario no existe, revise de nuevo";
         $this->view->render('errores');
            
        }
       }
      function sesion2(){

         $telefono=$_POST['telefono'];
         $contra=$_POST['contra'];
         $datos=['telefono'=>$telefono,'contra'=>$contra];
         if($this->model->iniciarsesion2($telefono,$contra))
         {
         include_once './views/home_clientelogin.php';
         }else
         {
            $this->view->mensaje = "Error al iniciar sesion, revise la informacion capturada";
            $this->view->render('errores');             
         }
        }

   }

?>
