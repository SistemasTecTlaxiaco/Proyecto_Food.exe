<?php
   class Nuevo extends Controller
   {       
       function __construct() 
       {
           parent::__construct();
           $this->view->mensaje = "";

       }
       //Funcion para insercion de comensal en base de datos
       function registrarCliente(){
         //Obtiene valores del formulario ya que se establece con el metodo POST, basados en el atributo name
         //asigna valores a variables locales
         $usuario=$_POST['usuario'];
           $telefono=$_POST['telefono'];
           $contra=$_POST['contraseña'];
           $ubicacion=$_POST['ubicacion'];
           //Crea una estructura con cada uno de los datos a modo de array u objeto
          $datos=['usuario'=>$usuario,'telefono'=>$telefono,'contra'=>$contra,'ubicacion'=>$ubicacion];
        //si al llamar al metodo insert, devuelve un valor verdadero entonces:
        if($this->model->iniciarsesion2($telefono,'no'))
        {
         $this->view->mensaje = "Ya existe en el registro";
         $this->view->render('errores');  

        }else{
    //Si los datos no estan duplicados o erroneos, abre la pagina inicial
       if($this->model->insert($datos))
        {
         echo "Nuevo cliente registrado ";
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
        $ubicacion=$_POST['ubicacion'];
        //Crea un objeto con los valores a insertar
        $datos=['telefono'=>$telefono,'contra'=>$contra];
        
        if($this->model->iniciarsesion1($telefono,'no'))
        {
         $this->view->mensaje = "Ya existe el dato en el registro";
         $this->view->render('errores');   

        }else{
       $datos2=['nombre'=>$nombre,'telefono'=>$telefono,'contra'=>$contra, 'doc_valida'=>$doc_valida, 'horario'=>$horario,'ubicacion'=>$ubicacion];
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
         $nombre_archivo = "";
         $carpetaDestino="imagenes/";
         if($cara==null){
            $cara=" ";
         }
            # si hay algun archivo que subir
        if(isset($_FILES["archivo"]) && $_FILES["archivo"]["name"][0])
        {                # si es un formato de imagen
                if($_FILES["archivo"]["type"]=="image/jpeg" || $_FILES["archivo"]["type"][$i]=="image/png")
                {
                    # si existe la carpeta o se ha creado
                    if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
                    {
                      $fileTmpPath = $_FILES['archivo']['tmp_name'];
                      $fileName = $_FILES['archivo']['name'];
                      $fileSize = $_FILES['archivo']['size'];
                      $fileType = $_FILES['archivo']['type'];
                      $fileNameCmps = explode(".", $fileName);
                      $fileExtension = strtolower(end($fileNameCmps));
                      $newFileName = $nombre . '.' . $fileExtension;
                      $dest_path = $carpetaDestino . $newFileName;
                        # movemos el archivo
                        if(@move_uploaded_file($fileTmpPath, $dest_path))
                        {
                        }else{
                            echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"];
                        }
                    }else{
                        echo "<br>No se ha podido crear la carpeta: ".$carpetaDestino;
                    }
                }else{
                    echo "<br>".$_FILES["archivo"]["name"]." - NO es imagen jpg, png o gif";
                }
            
        }else{
            echo "<br> No se ha subido ninguna imagen";
        }
         //Crea un objeto con los valores a insertar
        $plato=['nombre'=>$nombre,'precio'=>$precio,'cara'=>$cara,'imagen'=>$newFileName];
         //Si los datos no estan duplicados o erroneos, abre la pagina inicial
       if($this->model->insertarplato($plato))
       {
     //  echo "Nuevo platillo registrado ";
       $this->view->render('home_establecimiento');  

      }else
       {
        $this->view->mensaje = "Error dato duplicado o revise la informacion capturada";
        $this->view->render('home_establecimiento');  
           
       }
        }
        
      function agregarOferta(){
         if (isset($_POST['actualizar'])) {
            if (strlen($_POST['nombrecompleto']) >= 1 &&
            strlen($_POST['cara']) >= 1 &&
            strlen($_POST['precio']) >= 1 &&
            strlen($_POST['preciodesc']) >= 1) {
                $nombrecompleto = trim($_POST['nombrecompleto']);
                $cara = trim($_POST['cara']);
                $precio = trim($_POST['precio']);
                $preciodesc = trim($_POST['preciodesc']);
        }
      }

       //Crea un objeto con los valores a insertar
       $oferta=['nombrecompleto'=>$nombrecompleto,'cara'=>$cara,'precio'=>$precio, 'preciodesc'=>$preciodesc];
       //Si los datos no estan duplicados o erroneos, abre la pagina inicial
     if($this->model->insertaroferta($oferta))
     {
      //$this->view->mensaje = "Nueva oferta registrada";
      $this->view->render('home_establecimiento');  

     }else
     {
      $this->view->mensaje = "Error oferta duplicada o revise la informacion capturada";
      $this->view->render('errores');  
         
     }
      }

   }

?>
