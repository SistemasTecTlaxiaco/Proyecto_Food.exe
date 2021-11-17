<?php
   class Nuevo extends Controller
   {       
       function __construct() 
       {
           parent::__construct();
       }
       //Funcion para insercion de comensal en base de datos
       function registrarCliente(){
         //Obtiene valores del formulario ya que se establece con el metodo POST, basados en el atributo name
         //asigna valores a variables locales
         $usuario=$_POST['usuario'];
           $telefono=$_POST['telefono'];
           $contra=$_POST['contraseña'];
           //Crea una estructura con cada uno de los datos a modo de array u objeto
          $datos=['usuario'=>$usuario,'telefono'=>$telefono,'contra'=>$contra];
        //si al llamar al metodo insert, devuelve un valor verdadero entonces:
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
 //Funcion para insercion de establecimiento en base de datos
       function registrarEstablecimiento(){
          //Obtiene valores del formulario ya que se establece con el metodo POST, basados en el atributo name
         //asigna valores a variables locales
       
         $nombre=$_POST['usuario'];
        $telefono=$_POST['telefono'];
        $contra=$_POST['contraseña'];
        $doc_valida='no especificado';
        $horario='no definido';
        //Crea un objeto con los valores a insertar
        $datos=['telefono'=>$telefono,'contra'=>$contra];
        
        if($this->model->iniciarsesion1($telefono,'no'))
        {
         $this->view->mensaje = "Ya existe el dato en el registro";
         $this->view->render('errores');   

        }else{
       $datos2=['nombre'=>$nombre,'telefono'=>$telefono,'contra'=>$contra, 'doc_valida'=>$doc_valida, 'horario'=>$horario];
    //Si los datos no estan duplicados o erroneos, abre la pagina inicial
       if($this->model->insert2($datos2))
        {
         echo "Nuevo establecimiento registrado ";
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
        function agregarPlatillo(){
         $nombre=$_POST['nombre'];
         $precio=$_POST['precio'];
         $cara=$_POST['cara'];
         if($cara==null){
            $cara=" ";
         }
         //Crea un objeto con los valores a insertar
        $plato=['nombre'=>$nombre,'precio'=>$precio,'cara'=>$cara];
         //Si los datos no estan duplicados o erroneos, abre la pagina inicial
       if($this->model->insertarplato($plato))
       {
        echo "Nuevo platillo registrado ";
       // <a href="javascript: history.go(-1)">
       $this->view->render('menu_establecimiento');  

      }else
       {
        $this->view->mensaje = "Error dato duplicado o revise la informacion capturada";
        $this->view->render('menu_gral');  
           
       }
        }

   }

?>