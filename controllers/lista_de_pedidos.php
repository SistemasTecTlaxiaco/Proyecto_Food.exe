<?php
   class lista_de_pedidos extends Controller
   {
       
       function __construct() 
       {
           parent::__construct();
           $this->view->render('lista_de_pedidos');
       }
   }

?>