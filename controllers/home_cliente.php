<?php
   class home_cliente extends Controller
   {       
       function __construct() 
       {
           parent::__construct();
           $this->view->render('home_cliente');
       }

   }

?>