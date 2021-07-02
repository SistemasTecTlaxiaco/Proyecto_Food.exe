<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/inicio_establecimiento.php" type="text/css">
    <link rel="stylesheet" href="public/css/cabecera.css" type="text/css">
    <script type="text/javascript" src="./public/css/funciones.js"></script>

</head>
<body class="inicial" id="pawegrap">
<?php require 'views/header.php';?>

<div id="content"> 
    <img style="float:left;" src="./public/IMG/Comida.png" alt="descripción" />
    <article class="cuadro-inicial">
    <!--Los datos del formulario son enviados a ingresar.php ahi se usan para almacenarlos en la base de datos-->
    <form action="Inicio_Establecimiento" method="post" id="cuadro" class="cuadro">
    <h1>Menú</h1>

    <p>Nombre del platillo:<input type="text" placeholder="Nombre del platillo" name="nombre" id="nombre"></p> 

    <p>Descripcion:<input type="text" placeholder="Ingresar descripción" name="caracteristicas" id="caracteristicas"></p>

    <p>Precio:<input type="number" placeholder="Ingresar precio" name="precio" id="precio"></p> 

  <p>Imagen de muestra:<input type="file" placeholder="Seleccione archivo" name="Imgplatillo"></p> 

    </p>       <br>
    <!--Al presionar el boton, se validan datos desde javascript y luego si son validos se almacenan en la base de datos-->
    <input type="submit" value="Actualizar" id="platillos" class="menú_Establecimiento" onclick="registro_es()"></input>
</form>
    </article>
</div>



<?php require 'views/footer.php';?>
        
</body>
</html>


