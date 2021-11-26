 

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

    <form id="login" name="login" action="<?php echo constant('URL');?>nuevo/agregarOferta" method="post" autocomplete="off">
	<h1>REGISTRO DE OFERTAS</h1>
	<div class="form-group">
			<label>Nombre:</label>
			<input type="text" class="form-control" id="nombrecompleto" name="nombrecompleto" placeholder="Introduzca nombre de platillo">
			</div> <br>	
	
    <div class="form-group">
			<label>Descripción:</label>
			<textarea class="form-control" name="cara" id="cara">
			</textarea> </div> <br>

	<div class="form-group">
			<label>Precio normal:</label>
			<input type="number" class="form-control" name="precio" id="precio" >
			</div> <br>
	<div class="form-group">
			<label>Precio con descuento:</label>
			<input type="number" class="form-control" name="preciodesc" id="precio" >
			</div> <br>								
	<input type="submit" id="platillos" class="btn btn-primary btn-block"  value="AÑADIR OFERTA" onclick="menu_es()" name="actualizar">

				</input>
                </form>
</body>
</html>
