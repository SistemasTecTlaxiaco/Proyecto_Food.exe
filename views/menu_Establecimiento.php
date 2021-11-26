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

</head>
<body id="inicial" class="con-fondo">
<?php require 'views/header.php';?>

    <!--Los datos del formulario son enviados a ingresar.php ahi se usan para almacenarlos en la base de datos-->
    <form action="<?php echo constant('URL');?>nuevo/agregarPlatillo" enctype="multipart/form-data"  method="post" id="login" class="login">
    <h3  id="titulo">PLATILLOS</h3>

    <div class="form-group">
			<label>Nombre:</label>
			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduzca nombre de platillo">
		</div> <br>
        <div class="form-group">
			<label>Descripción:</label>
			<textarea class="form-control" name="cara" id="cara" placeholder="Introduzca breve descripción">
</textarea> </div> <br>
        <div class="form-group">
			<label>Precio:</label>
			<input type="number" class="form-control" name="precio" id="precio" >
		</div> <br>
        <div class="form-group">
			<label>Imagen de muestra:</label>
			<input type="file" class="form-control"name="archivo" id="archivo" >
		</div> <br>

    <!--Al presionar el boton, se validan datos desde javascript y luego si son validos se almacenan en la base de datos-->
    <input type="submit" id="platillos" class="btn btn-primary btn-block"  value="ACTUALIZAR" onclick="menu_es()"></input>

</form>
    
    </article>
</div>



<?php require 'views/footer.php';?>
        
</body>
</html>


