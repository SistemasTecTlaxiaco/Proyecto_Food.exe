<?php
   class home_clientelogin extends Controller
   {
       
       function __construct() 
       {
           parent::__construct();
           $this->view->render('home_clientelogin');
       }

   }

?>