<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/estilos.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/estilos.css" type="text/css">

    <title>HOME ESTABLECIMIENTO</title> <link rel="shortcut icon" href="<?php echo constant('URL');?>public/IMG/icono.png"> 

    <div id="header">
    <ul>
      <li>
   <!-- REGRESA A PAGINA ANTERIOR-->
    <a href="<?php echo constant('URL');?>home_clientelogin"> 
     <img src="<?php echo constant('URL');?>public/IMG/flecha2.png" width="50px"/>   </a></li>
  
    </ul>
   </div>  
</head>

<body >
<img  id="i2" src="<?php echo constant('URL');?>public/IMG/comparte.png" alt="icono red social" />

<div class="container">
	  <div class="content">
	    <a class="btnCoral" href="#open-modal">Comparte en tus redes sociales</a>
	  </div>
	</div>
	<div id="open-modal" class="modal-window">
	  <div>
	    <a href="#" title="Close" class="modal-close">Cerrar</a>
	    <h1>Ahora puedes compartir desde tus redes sociales y encontrar increibles descuentos</h1>
		<h6>Consulta terminos y condiciones del establecimiento</h6>
		    <a href="https://www.facebook.com/sharer/sharer.php?u=https://espai.es" target="_blank">
			<button class="btn btn-primary" type="button"> FACEBOOK </button></a>
		    <a href="https://twitter.com/intent/tweet?text= escola%20inform%C3%A1tica%20i%20disseny&url=https://espai.es&hashtags=dissenyweb" target="_blank">
			<button class="btn btn-primary" type="button"> TWITTER </button></a>
			<a href="https://api.whatsapp.com/send?text=Te invito a visitar este lugar" target="_blank">
			<button class="btn btn-primary" type="button"> WHATSAPP </button></a>
	    </div>
	</div>
</body>