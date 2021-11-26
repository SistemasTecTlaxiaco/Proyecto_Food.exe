
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0"> <meta http-equiv="Last-Modified" content="0"> 
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> 
    <meta http-equiv="Pragma" content="no-cache"> 
    <title>LISTA ESTABLECIMIENTOS</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/estilos.css" type="text/css">
    
     <div id="header">
    <ul>
      <li>
   <!-- REGRESA A PAGINA ANTERIOR-->
    <a href="<?php echo constant('URL');?>home_clientelogin"> 
     <img src="<?php echo constant('URL');?>public/IMG/flecha2.png" width="50px"/>   </a></li>
  
    </ul>
   </div>  
    
</head>
<h1>ESTABLECIMIENTOS CERCANOS</h1><br>

<table >
<tbody>

    <?php    
    include_once 'models/establecimiento.php';
    foreach ($this->establecimientos as $row){
        $establecimientos=new establecimiento();
        $establecimientos=$row;
        
        ?>
        <tr id="fila_vacia"><td id="fila_vacia">   ESTABLECIMIENTO </td></tr>
    <tr id="filas">
        <td>
        <img  id="logo_res" src="<?php echo constant('URL');?>public/IMG/restaurante.png" alt="descripción" />
    </td>
        <td>
            
            <?php echo $establecimientos->nombre;?><br>
            <?php echo $establecimientos->telefono;?><br>
            <?php echo $establecimientos->ubicacion;?>
        </td>
      
<td id="rotar"> <a href="<?php echo constant('URL').'lista_establecimientos/verEstablecimiento/'.$establecimientos->id_establecimiento?>">
<button class="btn btn-primary"> Visitar </button></a> </td>

        <?php }?>
    </tr>
  
</tbody>
</table>
</html>
