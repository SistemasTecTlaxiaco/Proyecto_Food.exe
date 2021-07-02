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
        // $this-> model-> insert($datos);
           //$this->model->insert(['matricula'=>$matricula,'nombre'=>$nombre,'apellido'=>$apellido]);
       //    echo "Nuevo estudiante creado";
            if($this->model->insert($datos))
           {
            echo "Nuevo cliente creado";
          //  require_once 'views/home_cliente.php';
            $controller->loadModel('home_cliente');

           // $this->view->render('home_cliente');

           }else{
               
               echo "Error dato duplicado o revise la informacion capturada :)";
              // $this->view->render('errores');
               //  include ("registro_cliente.php");

            }
           //echo "Error dato duplicado o revise la informacion capturada";
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
          echo "Ya existe en el registro";
          $this->view->mensaje = "Hubo un error en
             la solicitud o no existe la pagina";
          require_once 'views/errores.php';  

        }else{
       $datos2=['nombre'=>$nombre,'telefono'=>$telefono,'contra'=>$contra, 'doc_valida'=>$doc_valida, 'horario'=>$horario];
    
       if($this->model->insert2($datos2))
        {
         echo "Nuevo establecimiento registrado";
         require_once 'views/home_establecimiento.php';

        }else
        {
            echo "Error dato duplicado o revise la informacion capturada :)";
            
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
          
           include_once 'errores.php';  
        echo "error";
         //  $url='views/errores.php';
       

    $this->view->render('errores');

            echo "Error, dato no encontrado, revise la informacion capturada :)";
            
        }
       }

   }

?>
