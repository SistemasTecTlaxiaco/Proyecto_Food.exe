<?php
include_once 'models/oferta.php';

   class ofertas_gralModel extends Model
   {

      public function __construct() 
       {
           parent::__construct();
       }
       public function getOfertas(){ 
            $items=[];
        try{
            
            session_start();
            $oferta=$_SESSION['id_establecimiento'];
            $query=$this->db->connect()->query("SELECT * FROM oferta WHERE id_establecimiento='$oferta'");

            while($row=$query->fetch((PDO::FETCH_ASSOC))){
                $item=new oferta();
                $item->nombre=$row['nombre'];
                $item->especificacion=$row['especificacion'];
                $item->prec_anterior=$row['prec_anterior'];
                $item->descuento=$row['descuento'];
                $item->id_establecimiento=$row['id_establecimiento'];
                $item->id_ofertas=$row['id_ofertas'];
                array_push($items,$item);
            }
            return $items;
        }catch(PDOException $e){
            return[];
        }
       }
       public function getByIdOfertas($id){
        $items=[];
    
        try{
            
            $query=$this->db->connect()->query("SELECT * FROM oferta WHERE id_ofertas='$id'");
            while($row=$query->fetch((PDO::FETCH_ASSOC))){
                $item=new oferta();
                $item->nombre=$row['nombre'];
                $item->especificacion=$row['especificacion'];
                $item->prec_anterior=$row['prec_anterior'];
                $item->descuento=$row['descuento'];
                $item->id_establecimiento=$row['id_establecimiento'];
                $item->id_ofertas=$row['id_ofertas'];
                
                array_push($items,$item);
            }
            return $items;
        }catch(PDOException $e){
            return[];
        }
       }
       public function updateOfertas($item){
        $query = $this->db->connect()->prepare("UPDATE oferta SET nombre = :nombre, especificacion = :especificacion, prec_anterior = :prec_anterior, descuento = :descuento WHERE id_ofertas = :id_ofertas");
        try{
            $query->execute([
                'id_ofertas'=> $item['id_ofertas'],
                'nombre'=> $item['nombre'],
                'especificacion'=> $item['especificacion'],
                'prec_anterior'=>$item['prec_anterior'],
                'descuento'=>$item['descuento'],
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
       }
       public function deleteOfertas($id){
         try{
            $query = $this->db->connect()->query("DELETE FROM oferta WHERE id_ofertas = '$id'");
    
            return true;
        }catch(PDOException $e){
            return false;
        }
       }
       
   }

?>