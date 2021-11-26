<?php
   class ofertas_gral extends Controller
   {
       
       function __construct() 
       {
           parent::__construct();
           $this->view->mensaje = "Agregado de ofertas";

           $this->view->oferta=[];

       }
       function render(){
        //Manda a llamar a la funcion getOfertas que debe estar en el
        //modelo Ofertas_gralModel
        //Por cada controlador, si se manda a llamar a model
        //concatena nombre_controlador+Model 
        //TODO ESTO SE DEFINE EN  libs>>controller>> loadModel
        $oferta=$this->model->getOfertas();
        $this->view->oferta=$oferta;           
        $this->view->render('ofertas_gral');
    }
    function verOferta($param = null){
        $id_ofertas = $param[0];
        $oferta = $this->model->getByIdOfertas($id_ofertas);
        
        $this->view->oferta = $oferta;
        $this->view->mensaje = "";
        $this->view->render('detalleOferta_establecimiento');
    }
    function actualizarPlatillo(){
        
        $id_ofertas=$_POST['id_oferta'];
        $nombre=$_POST['nombre'];
        $especificacion  = $_POST['especificacion'];
        $prec_anterior=$_POST['prec_anterior'];
        $descuento=$_POST['descuento'];


        if($this->model->updateOfertas(['id_ofertas'=>$id_ofertas,'nombre' => $nombre, 
        'especificacion' => $especificacion,'prec_anterior' => $prec_anterior,'descuento'=> $descuento] )){
            // actualizar platillo exito
            $oferta = new Oferta();
            $oferta->id_ofertas = $id_ofertas;
            $oferta->nombre = $nombre;
            $oferta->especificacion = $especificacion;
            $oferta->prec_anterior = $prec_anterior;
            $oferta->descuento = $descuento;

            $this->view->oferta = $oferta;
        }else{
            // mensaje de error
            echo "No se pudo actualizar el platillo";
        }
        $this->view->render('home_establecimiento');
    }
       
    
          function eliminarOferta($param=null){
        $id_ofertas=$param[0];
        
        if($this->model->deleteOfertas($id_ofertas)){

         //   $mensaje = 'Platillo eliminado';
            $this->view->render('home_establecimiento');

        }else{
            $mensaje = 'No se pudo eliminar el platillo';
        }     
        echo $mensaje;
    }

   }

?>