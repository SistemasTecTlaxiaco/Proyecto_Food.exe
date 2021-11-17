
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0"> <meta http-equiv="Last-Modified" content="0"> 
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> 
    <meta http-equiv="Pragma" content="no-cache"> 
    <title>OFERTAS</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/estilos.css" type="text/css">
    <?php require 'views/header.php';?>

</head>
<h1>OFERTAS</h1>
<table width="100" id="tabla_platos" >
    
<thead>
<tr id="firstrow">
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Precio</th>
    <th ></th>
</tr>
</thead>
<tbody>
    <?php    
    include_once 'models/oferta.php';
    foreach ($this->oferta as $row){
        $oferta=new Oferta();
        $oferta=$row;
        
        ?>
    <tr id="filas">
        <td><?php echo $oferta->nombre;?></td>
        <td><?php echo $oferta->caracteristicas;?></td>
        
        <td><?php echo $oferta->precio;?></td>

        <td><a href="<?php echo constant('URL').'menu_gral_cliente/Carrito/'.$oferta->id_platillos?> ">
        <button id="btn">Agregar</button></td>
        
        <?php }?>
    </tr>
   
</tbody>
</table>
</html>