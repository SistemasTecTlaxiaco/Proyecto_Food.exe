<?php
include_once 'models/establecimiento.php';

   class lista_establecimientosModel extends Model
   {

      public function __construct() 
       {
           parent::__construct();
       }
       public function get(){ 
            $items=[];
        try{
            
            $query=$this->db->connect()->query("SELECT * FROM establecimiento");
            while($row=$query->fetch((PDO::FETCH_ASSOC))){
                $item=new establecimiento();
                $item->nombre=$row['nombre'];
                $item->telefono=$row['telefono'];
         //      $item->ubicacion=$row['ubicacion'];
                $item->id_establecimiento=$row['id_establecimiento'];
                $item->horario=$row['horario'];
                
                array_push($items,$item);
            }
            return $items;
        }catch(PDOException $e){
            return[];
        }
       }
       public function getById($id){
        $items=[];

        try{
            
            $query=$this->db->connect()->query("SELECT * FROM establecimiento WHERE id_establecimiento='$id'");
            while($row=$query->fetch((PDO::FETCH_ASSOC))){
                $item=new establecimiento();
                $item->nombre=$row['nombre'];
                $item->telefono=$row['telefono'];
               // $item->ubicacion=$row['ubicacion'];
                $item->id_establecimiento=$row['id_establecimiento'];
                $item->horario=$row['horario'];
                
                array_push($items,$item);
            }
            return $items;
        }catch(PDOException $e){
            return[];
        }

       }      
      
   }

?>