<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Evita que al abrir en movil, el usuario haga zooom-->
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0">
    
        <title>PRINCIPAL MAIN</title>
        <link rel="shortcut icon" href="public/IMG/icono.png"> 
    <link rel="stylesheet" href="public/css/login.css" type="text/css">
    <link rel="stylesheet" href="public/css/cabecera.css" type="text/css">

    </head>
    <body class="inicial">
    <div class="contenedor">
        <?php require 'views/header.php';?>
        <div  id="content">  

<table style="width: calc(100% - 120px);"> 

 <tr> 
<td><button id="ex" type="submit" value="INICIAR SESION"><img src="./public/IMG/usuario.png"  height="30px" width="30px"/><a href="inicio_cliente"> INICIAR SESION</a></button></td>
<td><button id="ex" type="submit" value="EXPLORAR"><img src="public/IMG/buscar.png"  height="30px" width="30px"/><a href="home_cliente">EXPLORAR</a></button></td>
<td><button id="ex" type="submit" value="INICIAR SESION"><img src="public/IMG/empresa.png"  height="30px" width="30px"/><a href="inicio_establecimiento">  INICIAR SESION</a></button></td>
 </tr> 
  <tr>    

        <td colspan="3"><img src="public/IMG/icono.png" height="500px" width="500px"></td>
 </tr>
</table>
</div>
        </div>
        <?php require 'views/footer.php';?>
</div>
   </body>

</html>