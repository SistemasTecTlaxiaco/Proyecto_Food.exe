<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0"> <meta http-equiv="Last-Modified" content="0"> 
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> 
    <meta http-equiv="Pragma" content="no-cache"> 
	
    <!--JS PARA CAMPO CODIGO DE PAIS DE TELEFONO-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>LOGIN CLIENTE</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/estilos.css" type="text/css">


</head>
<body id="inicial">
<?php require 'views/header.php';?>
<img  id="i" src="<?php echo constant('URL');?>public/IMG/icono.png" alt="icono" />
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
	            <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>

        <br><p>Aun no tienes una cuenta <a href="<?php echo constant('URL');?>registro_cliente" id="link">Registrarse </a> </p>
       
        <p class="text-center">
        <input type="submit" id="ingresar" class="btn btn-primary btn-block"  value="INGRESAR" onclick="registro_es()"></input>
		</p>
		
</form>
        <?php require 'views/footer.php';?>
        
</body>

<!--CODIGO PARA VENTANA DE CODIGO DE PAIS-->
<script>
   const phoneInputField = document.querySelector("#telefono");
   const phoneInput = window.intlTelInput(phoneInputField, {
    preferredCountries: ["mx", "us", "ar", "cl"],
     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
   const info = document.querySelector(".alert-info");
/*CODIGO PARA OCULTAR Y MOSTRAR CONTRASEÑA*/
function mostrarPassword(){
		var cambio = document.getElementById("contra");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});

 </script>
</html>
