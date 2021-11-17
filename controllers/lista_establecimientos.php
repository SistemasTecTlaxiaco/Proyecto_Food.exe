<?php
   class lista_establecimientos extends Controller
   {       
       function __construct() 
       {
           parent::__construct();
           $this->view->establecimientos=[];
       }
       function render(){
           $establecimientos=$this->model->get();
           $this->view->establecimientos=$establecimientos;           
           $this->view->render('lista_establecimientos');
       }
       function verEstablecimiento($param = null){
        $id_establecimiento= $param[0];
        $establecimientos = $this->model->getById($id_establecimiento);
        
        $this->view->establecimientos = $establecimientos;
        $this->view->mensaje = "";
        $this->view->render('detalles_establecimiento');
    }

   }

?>