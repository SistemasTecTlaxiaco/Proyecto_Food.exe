<?php
   class registro_cliente extends Controller
   {
       
       function __construct() 
       {
           parent::__construct();
           $this->view->render('registro_cliente');
       }

   }

?>