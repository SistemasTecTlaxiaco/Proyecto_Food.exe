<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>public/css/style.css">  
    <script type="text/javascript" src="<?php echo constant('URL');?>public/css/boton.js"></script>
</head>
<body>
    <div id="envoltura">
        <div id="contenedor">
            <div id="cabecera">
			<p><font size=6 color="Lime" face="Cambria,arial">
                <img src="<?php echo constant('URL');?>public/imagen/mesa2.jpg" align="Center" width="500" height="500"><b>OFERTAS DISPONIBLES</b>
				</p></font>
            </div>
            <div id="cuerpo">
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
					
            </div><!--fin cuerpo-->
        </div><!-- fin contenedor -->
    </div><!--fin envoltura-->
</body>
 
</html>