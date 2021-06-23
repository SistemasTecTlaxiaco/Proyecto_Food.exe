<?php
   class Consulta extends Controller
   {
       
       function __construct() 
       {
           parent::__construct();
           $this->view->establecimiento=[];
        //$this->view->datos=[];
          // $this->view->render('consulta/index');
       }
       function render(){
           $establecimiento=$this->model->get();
           $this->view->establecimiento=$establecimiento;
         //  $alumnos=$this->view->datos=$this->model->get();
           
           $this->view->render('home_establecimiento');
       }

   }

?>