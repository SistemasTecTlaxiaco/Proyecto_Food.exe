<?php
   class Consulta extends Controller
   {
       
       function __construct() 
       {
           parent::__construct();
           $this->view->establecimiento=[];
       }
       function render(){
           $establecimiento=$this->model->get();
           $this->view->establecimiento=$establecimiento;
           $this->view->render('home_establecimiento');
       }
      
       function editarEstablecimiento($param=null){
           
        $id_establecimiento = $param[0];
        $establecimiento = $this->model->getById($id_establecimiento);
        
        $this->view->establecimiento = $establecimiento;
        $this->view->mensaje = "";
        $this->view->render('modificar_establecimiento');
    }
    function actualizarEstablecimiento(){
        
        $id_establecimiento=$_POST['id_establecimiento'];
        $nombre=$_POST['nombre'];
        $ubicacion  = $_POST['ubicacion'];
        $telefono=$_POST['telefono'];
        $contra=$_POST['contra'];
        $horario=$_POST['horario'];


        if($this->model->update(
            ['id_establecimiento'=>$id_establecimiento,'nombre' => $nombre, 
            'ubicacion' => $ubicacion,'telefono' => $telefono,'contra'=> $contra, 'horario'=>$horario] )){
            // actualizar platillo exito
            $establecimiento = new establecimiento();
            $establecimiento->id_establecimiento = $id_establecimiento;
            $establecimiento->nombre = $nombre;
            $establecimiento->ubicacion = $ubicacion;
            $establecimiento->telefono = $telefono;
            $establecimiento->contra = $contra;

            $this->view->establecimiento = $establecimiento;
        }else{
            // mensaje de error
            echo "No se pudo actualizar el establecimiento";
        }
        $this->view->render('home_establecimiento');
    }

   }

?>
