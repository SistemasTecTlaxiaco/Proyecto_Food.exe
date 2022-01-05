<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--LIBRERIAS BootStrap PARA CAMPO CODIGO DE PAIS DE TELEFONO Y VISUALIZACION CONTRASEÑA-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>REGISTRO CLIENTE</title> <link rel="shortcut icon" href="public/IMG/icono.png"> 
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/estilos.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/funciones.js" >

</head>
<body class="inicial">
<?php require 'views/header.php';?>

    <img style="float:left;" src="<?php echo constant('URL');?>public/IMG/icono.png" alt="descripción" />
 <h3  id="titulo">REGISTRO USUARIO</h3>
    <div class="form-group">
			<label>Nombre del usuario:</label>
			<input type="text" required class="form-control" name="usuario" id="usuario" placeholder="Introduzca nombre">
		</div> <br>
        <div class="form-group">
			<label>Telefono:</label>
			<input type="tel" required class="form-control" id="telefono"  id="telefono"name="telefono" placeholder="Introduzca telefono">
		</div> <br> <div class="form-group">
			<label >Contraseña:</label>
			<input type="password" required class="form-control" name="contraseña" id="contraseña"placeholder="Mayusculas, minusculas y numeros" >
		</div>
            <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
            <br>
            <label>Ubicacion:</label>
            <input type="text" required class="form-control" id="ubicacion"  id="ubicacion"name="ubicacion" placeholder="Referencia ubicacion">

   <!--<button type="button" name="ubicacion" onclick="geoloc()" >ubicar</button>-->
    </p>       <br>
    <!--Al presionar el boton, se validan datos desde javascript y luego si son validos se almacenan en la base de datos-->
    <input type="submit" value="REGISTRAR" id="registro" class="btn btn-primary btn-block"></input>
    
</form>


<?php require 'views/footer.php';?>
        
</body>

<!--CODIGO PARA VENTANA DE CODIGO DE PAIS-->
<script type="text/javascript">
   const phoneInputField = document.querySelector("#telefono");
   const phoneInput = window.intlTelInput(phoneInputField, {
    preferredCountries: ["mx", "us", "ar", "cl"],
     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
   const info = document.querySelector(".alert-info");

   /*CODIGO PARA OCULTAR Y MOSTRAR CONTRASEÑA*/
   function mostrarPassword(){
		var cambio = document.getElementById("contraseña");
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
