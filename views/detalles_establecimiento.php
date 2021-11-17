
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/estilos.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/barra.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/barra.js" type="text/css">
   
    <title>DATOS DEL ESTABLECIMIENTO</title>

</head>
<body >  
<?php require 'views/header.php';?>

   <?php    
    include_once 'models/establecimiento.php';
    foreach ($this->establecimientos as $row){
        $establecimientos=new establecimiento();
        $establecimientos=$row;   }     
        ?>
      <article id="datos">
    <h3 id="food"><?php echo $establecimientos->nombre;?></h3>
    <img  id="imglogo" src="<?php echo constant('URL');?>public/IMG/comida.png" alt="descripción" />

    <h4 style=" text-align: left;">            
    Telefono : <?php  echo $establecimientos->telefono;?><br><br><br>
    Horario : <?php  echo $establecimientos->horario;?><br><br> <br></h4>
   <h4  style=" text-align: left;">Comentarios : <a href="#" id="barra"> Ver mas... </a><br><br><br></h4>
  
   <a href="<?php echo constant('URL').'menu_gral_cliente/Consulta_menu/'.$establecimientos->id_establecimiento?>">
   <button class="btn btn-primary"> Menú </button></a> 

   <!--<a href="<?php echo constant('URL').'menu_gral_cliente/Consulta_redes/'.$establecimientos->id_establecimiento?>">-->
   <button class="btn btn-primary"> Redes sociales </button></a> 
   
   <a href="<?php echo constant('URL').'menu_gral_cliente/Consulta_ofertas/'.$establecimientos->id_establecimiento?>">
   <button class="btn btn-primary"> Ofertas </button></a> 
   
</article>  
</body>
</html>
