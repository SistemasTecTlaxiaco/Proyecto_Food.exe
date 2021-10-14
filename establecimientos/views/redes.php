<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario</title>
    <meta charset="utf-8">
    <link type="text/css" href="<?php echo constant('URL');?>public/css/estilos.css" rel="stylesheet"/>
</head>
<div id="fondo">
            </div>
<body background="<?php echo constant('URL');?>public/imagen/fondo.jpg">
	<p><img class="img7" src="<?php echo constant('URL');?>public/imagen/descarga.jpg" alt="mas"></p>
	<p><img class="img8" style="float:left; width:100px" src="<?php echo constant('URL');?>public/IMG/flecha.png" onclick="location.href='<?php session_start(); echo constant('URL');?>home_establecimiento'" alt="mas"></p>
    <div id="envoltura">
        <div id="contenedor">
            </div>
            <div id="cuerpo">
                <form id="form-login"  action="" method="post" autocomplete="off">
				<p style="size:6.5; color:black; face:Cambria,arial; align:left;">
				<b>REDES DISPONIBLES</b>
				</p>
				<br>
					<p style="width:50px; color:black; face:Cambria,arial; align:left;">
					<img class="img1" src="<?php echo constant('URL');?>public/imagen/facebook.png" alt="facebook" >
					<br><b>FACEBOOK<b></p>
					
					<p style="size:6; color:black; face:Cambria,arial; align:left;">
					<img class="img2" src="<?php echo constant('URL');?>public/imagen/instagram.png" alt="instagram" >
					<br><br><b>INSTAGRAM<b></p>
					
					<p style="size:6; color:black; face:Cambria,arial; align:left;">
					<img class="img3" src="<?php echo constant('URL');?>public/imagen/whatsapp.png" alt="whatsapp" >
					<br><br><b>WHATSAPP<b></p>
					
					<p><img class="img4" src="<?php echo constant('URL');?>public/imagen/mas.png" alt="mas" onclick="location.href='https://www.facebook.com/'"></p>
					<p><img class="img5" src="<?php echo constant('URL');?>public/imagen/mas.png" alt="mas" onclick="location.href='https://www.instagram.com/'"></p>
					<p><img class="img6" src="<?php echo constant('URL');?>public/imagen/mas.png" alt="mas" onclick="location.href='https://web.whatsapp.com/'"></p>
					     
                    <p id="bot"><input type="submit" id="submit" name="submit" value="ACTUALIZAR" class="boton" onclick="location.href='<?php echo constant('URL');?>inicio_establecimiento.php'" ></p>
                </form>
            </div><!--fin cuerpo-->
        </div><!-- fin contenedor -->
    </div><!--fin envoltura-->
</body>
 
</html>