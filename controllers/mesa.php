<?php
   class mesa extends Controller
   {
       
       function __construct() 
       {
           parent::__construct();
           $this->view->render('mesa');
       }

   }

?>