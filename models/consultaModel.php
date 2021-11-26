<?php
include_once 'models/establecimiento.php';
include_once 'models/platillo.php';

   class ConsultaModel extends Model
   {

      public function __construct() 
       {
           parent::__construct();
       }
       public function get(){
      
       }
      
       public function getById($id){
        $items=[];

        try{
            
            $query=$this->db->connect()->query("SELECT * FROM establecimiento WHERE id_establecimiento='$id'");
            while($row=$query->fetch((PDO::FETCH_ASSOC))){
                $item=new establecimiento();
                $item->nombre=$row['nombre'];
                $item->telefono=$row['telefono'];
                $item->horario=$row['horario'];
                $item->ubicacion=$row['ubicacion'];
                $item->doc_valida=$row['doc_valida'];
                $item->contra=$row['contra'];
                $item->id_establecimiento=$row['id_establecimiento'];

                array_push($items,$item);
            }
            return $items;
        }catch(PDOException $e){
            return[];
        }
       }
       
       public function update($item){
        $query = $this->db->connect()->prepare("UPDATE establecimiento SET nombre = :nombre, telefono = :telefono, horario = :horario, ubicacion = :ubicacion, contra = :contra WHERE id_establecimiento = :id_establecimiento");
        try{
            $query->execute([ 
                'id_establecimiento'=> $item['id_establecimiento'],
                'nombre'=> $item['nombre'],
                'telefono'=> $item['telefono'],
                'horario'=>$item['horario'],
                'ubicacion'=>$item['ubicacion'],
                'contra'=>$item['contra']
            ]);
            return true;
        }catch(PDOException $e){
            return false; 
        }
       }
   }

?>
