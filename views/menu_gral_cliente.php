
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0"> <meta http-equiv="Last-Modified" content="0"> 
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> 
    <meta http-equiv="Pragma" content="no-cache"> 
    <title>MENÚ</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/estilos.css" type="text/css">
    <?php require 'views/header.php';?>

</head>
<h1>MENU</h1>
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
    include_once 'models/platillo.php';
    foreach ($this->platillo as $row){
        $platillo=new Platillo();
        $platillo=$row;
        
        ?>
    <tr id="filas">
        <td><img src="<?php echo constant('URL');?>imagenes/<?php echo $platillo->imagen;?>" width="100PX">  </td>
        <td><?php echo $platillo->nombre;?></td>
        <td><?php echo $platillo->caracteristicas;?></td>        
        <td><?php echo $platillo->precio;?></td>

        <td><a href="<?php echo constant('URL').'menu_gral_cliente/Carrito/'.$platillo->id_platillos?> ">
        <button id="btn">Agregar</button></td>
        
        <?php }?>
    </tr>
   
</tbody>
</table>
</html>
