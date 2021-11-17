<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta http-equiv="Expires" content="0"> <meta http-equiv="Last-Modified" content="0"> 
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> 
    <meta http-equiv="Pragma" content="no-cache"> 
    <title>LOGIN CLIENTE</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/estilos.css" type="text/css">


</head>
<body id="inicial" >
<?php require 'views/header.php';?>
<img  id="i" src="<?php echo constant('URL');?>public/IMG/login.svg" alt="descripción" />
 
    <!--Usa el formulario en validarCliente.php para comprobar existencia-->
    <form action="<?php echo constant('URL');?>nuevo/sesion2" method="post" id="login" class="login">
    <h3  id="titulo">INICIAR SESION</h3>
    <img  id="imglogo" src="<?php echo constant('URL');?>public/IMG/perfil.png" alt="descripción" />
    <div class="form-group">
			<label>Telefono:</label>
			<input type="tel" id="input" class="form-control" name="telefono" placeholder="Introduzca telefono">
		</div> <br>
    <div class="form-group">
			<label >Contraseña:</label>
			<input type="password"  id="input" class="form-control"placeholder="Mayusculas, minusculas y numeros" name="contra" id="contra">
		</div>
        <br><p>Aun no tienes una cuenta <a href="<?php echo constant('URL');?>registro_cliente" id="link">Registrarse </a> </p>
       
        <p class="text-center">
        <input type="submit" id="ingresar" class="btn btn-primary btn-block"  value="INGRESAR" onclick="registro_es()"></input>
		</p>
		
</form>
        <?php require 'views/footer.php';?>
</body>
</html>
