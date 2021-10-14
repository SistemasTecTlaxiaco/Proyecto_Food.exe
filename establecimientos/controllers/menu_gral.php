<?php
   class menu_gral extends Controller
   {
       
       function __construct() 
       {
           parent::__construct();
           
           $this->view->platillo=[];
       }
       function render(){
           
        $platillo=$this->model->get();
        $this->view->platillo=$platillo;           
        $this->view->render('menu_gral');
       }
       

    function verPlatillo($param = null){
        $id_platillos = $param[0];
        $platillo = $this->model->getById($id_platillos);
        
        $this->view->platillo = $platillo;
        $this->view->mensaje = "";
        $this->view->render('detallePlato_establecimiento');
    }
       function actualizarPlatillo(){
        $id_platillos=$_POST['id_platillos'];
        $nombre=$_POST['nombre'];
        $caracteristicas  = $_POST['caracteristicas'];
        $precio=$_POST['precio'];

        if($this->model->update(['nombre' => $nombre, 'caracteristicas' => $caracteristicas,
         'precio' => $precio,'id_platillos'=> $id_platillos] )){
            // actualizar platillo exito
            $platillo = new Platillo();
            $platillo->nombre = $nombre;
            $platillo->caracteristicas = $caracteristicas;
            $platillo->precio = $precio;
            
            $this->view->platillo = $platillo;
        }else{
            // mensaje de error
            echo "No se pudo actualizar el platillo";
        }
        $this->view->render('home_establecimiento');
    }
    function eliminarPlatillo($param=null){
        $id_platillos=$param[0];
        
        if($this->model->delete($id_platillos)){

         //   $mensaje = 'Platillo eliminado';
            $this->view->render('home_establecimiento');

        }else{
            $mensaje = 'No se pudo eliminar el platillo';
        }     
        echo $mensaje;
    }
   }

?>
