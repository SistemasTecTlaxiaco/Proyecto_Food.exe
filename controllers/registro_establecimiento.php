<?php
   class registro_establecimiento extends Controller
   {
       
       function __construct() 
       {
           parent::__construct();
           $this->view->render('registro_establecimiento');
       }

   }

?>