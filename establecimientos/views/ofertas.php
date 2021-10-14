  
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0"> <meta http-equiv="Last-Modified" content="0"> 
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> 
    <meta http-equiv="Pragma" content="no-cache"> 
    <title>OFERTAS</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/estilos.css" type="text/css">

</head>
<body id="inicial">
<?php require 'views/header.php';?>

    <form id="login" name="login" action="" method="post" autocomplete="off">
	
    <div class="form-group">
			<label>Nombre:</label>
			<input type="text" class="form-control" id="nombrecompleto" name="nombrecompleto" placeholder="Introduzca nombre de platillo">
			</div> <br>	
	
    <div class="form-group">
			<label>Descripción:</label>
			<textarea class="form-control" name="cara" id="cara" placeholder="Introduzca breve descripción">
			</textarea> </div> <br>

	<div class="form-group">
			<label>Precio normal:</label>
			<input type="number" class="form-control" name="precio" id="precio" >
			</div> <br>
	<div class="form-group">
			<label>Precio con descuento:</label>
			<input type="number" class="form-control" name="precio" id="precio" >
			</div> <br>							
				<!--	<form id="login" name="login" action="upload.php" method="POST" enctype="multipart/form-data">
					<input style="position:absolute; top:350px;left:200px;" type="file" name="file">
					<p><img class="img5" src="<?php echo constant('URL');?>public/imagen/galeria.png" alt="mas"></p>
					</form>-->
					<img style="width:50px;"src="<?php echo constant('URL');?>public/imagen/mas.png" alt="mas">     
					<input type="submit" id="platillos" class="btn btn-primary btn-block"  value="ACTUALIZAR" onclick="menu_es()"></input>
                </form>
</body>
</html>