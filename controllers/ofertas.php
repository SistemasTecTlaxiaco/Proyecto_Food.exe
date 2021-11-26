<?php
   class ofertas extends Controller
   {
       
       function __construct() 
       {
           parent::__construct();
           $this->view->mensaje = "Agregado de ofertas";

        $this->view->render('ofertas');
       }
       function render(){

       }

   }

?>