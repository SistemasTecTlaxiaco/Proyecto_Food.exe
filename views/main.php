<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Evita que al abrir en movil, el usuario haga zooom-->
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/estilos.css" type="text/css">

        <title>PRINCIPAL</title>
        <link rel="shortcut icon" href="public/IMG/icono.png"> 
    </head>
    
    <body class="estab" id="inicial">
    <div class="contenedor">
        <div  id="content">  

<table style="width: 100%"> 

 <tr> 
<td><a href="<?php echo constant('URL');?>inicio_cliente"><button  class="btn btn-primary" value="INICIAR SESION"><img src="<?php echo constant('URL');?>public/IMG/usuario.png"  height="30px" width="30px"/> INICIAR SESION</button></a></td>
<td><a href="<?php echo constant('URL');?>home_cliente"><button  class="btn btn-primary" value="EXPLORAR"><img src="<?php echo constant('URL');?>public/IMG/buscar.png"  height="30px" width="30px"/>EXPLORAR</button></a></td>
<td><a href="<?php echo constant('URL');?>inicio_establecimiento"> <button  class="btn btn-primary" value="INICIAR SESION"><img src="<?php echo constant('URL');?>public/IMG/empresa.png"  height="30px" width="30px"/> INICIAR SESION</button></a></td>
  </tr> 
  <tr>    

        <td colspan="3">
            <figure>
        <img src="<?php echo constant('URL');?>public/IMG/icono.png" height="500px" width="500px" alt="Food">
        </figure>
      </td>
 </tr>
    <tr>
    <td colspan="3">
    <?php require 'views/footer.php';?>

        <td>
</tr>
</table>
</div>
        </div>
</div>
   </body>

</html>
