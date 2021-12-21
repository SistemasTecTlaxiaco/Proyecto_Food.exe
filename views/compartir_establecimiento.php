<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/estilos.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/barra.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/barra.js" type="text/css">       <!--TITULO E ICONO EN PESTAÑA DEL NAVEGADOR-->
    <title>HOME ESTABLECIMIENTO</title> <link rel="shortcut icon" href="<?php echo constant('URL');?>public/IMG/icono.png"> 

</head>

<body >

<div id="header">
    <ul>
      <li>
   <!-- REGRESA A PAGINA ANTERIOR-->
    <a href="<?php echo constant('URL');?>home_establecimiento"> 
     <img src="<?php echo constant('URL');?>public/IMG/flecha2.png" width="50px"/>   </a></li>
  
    </ul>
   </div>  
   <img  id="i2" src="<?php echo constant('URL');?>public/IMG/red-social.png" alt="icono red social" />

        <form action="<?php echo constant('URL');?>home_establecimiento" method="post" id="login" class="login">
        <h3  id="titulo">REDES SOCIALES DISPONIBLES</h3>

        <div class="form-group">
			<label>FACEBOOK:</label>
			<input type="checkbox" class="form-control" id="telefono" name="facebook" value="Facebook">
		</div> <br>
        <div class="form-group">
			<label>INSTAGRAM:</label>
			<input type="checkbox" class="form-control" id="telefono" name="facebook" value="Facebook">
		</div> <br>
        <div class="form-group">
			<label>TWITTER:</label>
			<input type="checkbox" class="form-control" id="telefono" name="facebook" value="Facebook">
		</div> <br>
        <p class="text-center">
        <input type="submit" id="ingresar" class="btn btn-primary btn-block"  value="GUARDAR" onclick="registro_es()"></input>
		</p>
		
</form>
    
</body>
<?php require 'views/footer.php';?>

</html>