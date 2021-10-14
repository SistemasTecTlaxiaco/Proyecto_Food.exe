<?php
include_once 'models/platillo.php';

   class menu_gralModel extends Model
   {

      public function __construct() 
       {
           parent::__construct();
       }
       public function get(){ 
            $items=[];
        try{
            
            session_start();
            $plato=$_SESSION['id_establecimiento'];
            $query=$this->db->connect()->query("SELECT * FROM platillos WHERE id_establecimiento='$plato'");
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
       public function getById($id){
        $items=[];

        try{
            
            $query=$this->db->connect()->query("SELECT * FROM platillos WHERE id_platillos='$id'");
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
       public function update($item){
        $query = $this->db->connect()->prepare("UPDATE platillos SET nombre = :nombre, caracteristicas = :caracteristicas, precio = :precio WHERE id_platillos = :id_platillos");
        try{
            $query->execute([
                'id_platillos'=> $item['id_platillos'],
                'nombre'=> $item['nombre'],
                'caracteristicas'=> $item['caracteristicas'],
                'precio'=>$item['precio']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
       }
       public function delete($id){
        try{
            $query = $this->db->connect()->query("DELETE FROM platillos WHERE id_platillos = :'$id'");

          //  $query->execute(['id_platillos'=> $id ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
       }
   }

?>