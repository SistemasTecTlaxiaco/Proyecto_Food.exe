<?php
include_once 'models/platillo.php';
include_once 'models/oferta.php';


   class menu_gral_clienteModel extends Model
   {

      public function __construct() 
       {
           parent::__construct();
       }
       public function getMenu($id){ 
            $items=[];
        try{
            
            $query=$this->db->connect()->query("SELECT * FROM platillos WHERE id_establecimiento='$id'");
            while($row=$query->fetch((PDO::FETCH_ASSOC))){
                $item=new platillo();
                $item->nombre=$row['nombre'];
                $item->precio=$row['precio'];
                $item->caracteristicas=$row['caracteristicas'];
                $item->id_establecimiento=$row['id_establecimiento'];
                $item->id_platillos=$row['id_platillos'];
                
                array_push($items,$item);
            }
            return $items;
        }catch(PDOException $e){
            return[];
        }
       }
       public function getOfertas($id){ 
        $items=[];
    try{
        
        $query=$this->db->connect()->query("SELECT * FROM oferta WHERE id_establecimiento='$id'");
        while($row=$query->fetch((PDO::FETCH_ASSOC))){
            $item=new Oferta();
            $item->nombre=$row['nombre'];
            $item->tiempo=$row['tiempo'];
            $item->descuento=$row['descuento'];
            $item->especificacion=$row['especificacion'];
            $item->id_ofertas=$row['id_ofertas'];
            $item->id_establecimiento=$row['id_establecimiento'];
            array_push($items,$item);
        }
        return $items;
    }catch(PDOException $e){
        return[];
    }
   }
       
   }

?>