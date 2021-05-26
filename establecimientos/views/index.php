<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>PRINCIPAL</title>
        <link rel="shortcut icon" href="../IMG/icono.png"> 
    <link rel="stylesheet" href="../../../public/css/login5.css">
    <link rel="stylesheet" href="../../../public/css/css/cabecera.css">

    </head>
    <body>
        <?php require 'views/header.php';?>
        <div  id="content">  

<table style="width: calc(100% - 120px);"> 

 <tr> 
<td><button id="ex" type="submit" value="INICIAR SESION"><img src="css/IMG/usuario.png"  height="30px" width="30px"/><a href="inicio_cliente"> INICIAR SESION</a></button></td>
<td><button id="ex" type="submit" value="EXPLORAR"><img src="css/IMG/buscar.png"  height="30px" width="30px"/><a href="home_cliente">EXPLORAR</a></button></td>
<td><button id="ex" type="submit" value="INICIAR SESION"><img src="css/IMG/empresa.png"  height="30px" width="30px"/><a href="inicio_establecimiento">  INICIAR SESION</a></button></td>
 </tr> 
  <tr>    

        <td colspan="3"><img src="css/IMG/icono.png" height="500px" width="500px"></td>
 </tr>
</table>
</div>
        </div>
        <?php require 'views/footer.php';?>

   </body>

</html>