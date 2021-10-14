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

   }

?>