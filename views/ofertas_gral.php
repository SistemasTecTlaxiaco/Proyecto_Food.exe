
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
<h1>OFERTAS DEL ESTABLECIMIENTO</h1>
<table width="100" id="tabla_platos" >
    
<thead>
<tr id="firstrow">
    <th>Platillo</th>
    <th>Descripcion</th>
    <th>Descuento</th>
    <th colspan="2">Editar</th>
</tr>
</thead>
<tbody>
    <?php    
    include_once 'models/oferta.php';
    foreach ($this->oferta as $row){
        $oferta=new oferta();
        $oferta=$row;
        
        ?>
    <tr id="filas">
        <td><?php echo $oferta->nombre;?></td>
        <td><?php echo $oferta->especificacion;?></td>
        <td><?php echo $oferta->descuento;?></td>

        <td><a href="<?php echo constant('URL').'ofertas_gral/verOferta/'.$oferta->id_ofertas?> ">Modificar</td>
        <td><a href="<?php echo constant('URL').'ofertas_gral/eliminarOferta/'.$oferta->id_ofertas?> ">Eliminar</td>
        
        <?php }?>
    </tr>
   
</tbody>

<tfoot>
    <tr id="firstrow">
    <th colspan="6" >
        <a href="<?php echo constant('URL');?>ofertas" id="barra">
        <button class="redondo" >AÑADIR OFERTA</button></a>
    </th>
</tr>
</tfoot>

</table>
</html>