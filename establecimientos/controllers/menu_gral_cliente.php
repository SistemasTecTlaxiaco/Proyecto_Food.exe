<?php
   class menu_gral_cliente extends Controller
   {
       
       function __construct() 
       {
           parent::__construct();
           $this->view->platillo=[];
           $this->view->oferta=[];

       }
       function render(){
           
       // $platillo=$this->model->get();
       // $this->view->platillo=$platillo;           
       }
       function Consulta_menu($param = null){
        $id_establecimiento = $param[0];
        $platillo = $this->model->getMenu($id_establecimiento);
        $this->view->platillo = $platillo;
        $this->view->render('menu_gral_cliente');

       }
       function Consulta_Ofertas($param = null){
        $id_establecimiento = $param[0];
        $oferta = $this->model->getOfertas($id_establecimiento);
        $this->view->oferta = $oferta;
        $this->view->render('ofertas_gral_cliente');
       }
   }

?>