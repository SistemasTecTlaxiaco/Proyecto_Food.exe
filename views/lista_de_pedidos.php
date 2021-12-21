<!DOCTYPE html>
<html lang="es">
    <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
   <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/owl.carousel.css" type="text/css">
       <!--TITULO E ICONO EN PESTAÑA DEL NAVEGADOR-->
    <title>PRINCIPAL</title> <link rel="shortcut icon" href="public/IMG/icono.png"> 
    </head>
	
    <body>
        <!--Encabezado-->
    <div class="header-main">
        <div class="main-content">
            <ul class="elementos-header">
            <!--ICONO PRINCIPAL ESQUINA SUPERIOR-->
            <a href="#">
            <img src="<?php echo constant('URL');?>public/IMG/logo.png" class="logo">
            </a>
            
</ul>
    </div>
</div>
	    
<div id="header">
    <ul>
      <li> <br><br>
   <!-- REGRESA A PAGINA ANTERIOR-->
    <a href="<?php echo constant('URL');?>home_establecimiento"> 
     <img src="<?php echo constant('URL');?>public/IMG/flecha2.png" width="50px"/>   </a></li>
  
    </ul>
   </div>  

	<!-- main -->
	<div class="main">
		<h1 id="food">ADMINISTRACIÓN DE PEDIDOS</h1>
		<div class="main-agileinfo"> 
			<div id="owl-demo" class="owl-carousel owl-theme"><!-- owl-carousel -->
				<div class="item">
					<div class="pricing pricing-two">
						<div class="pricing-top top-two">
							<h3 id="pedidos">PEDIDOS PENDIENTES</h3>
							<p>Actualizado al 20/12/2021</p><br>
						</div>
						<div class="pricing-bottom"> 
							<p>Sin registros aun</p> 
							<p></p> 
							<p></p> 
							<p></p> 
							<p class="w3agile">-</p> 
							<div class="agileits-buy">
								<a class="popup-with-zoom-anim" href="#small-dialog">Administrar</a>
							</div>
						</div>
					</div> 
				</div> <div class="item">
					<div class="pricing pricing-two">
						<div class="pricing-top top-two">
							<h3 id="pedidos">PEDIDOS EN PROGRESO</h3><br>
							<p>Actualizado al 20/12/2021</p>
						</div>
						<div class="pricing-bottom"> 
							<p>Sin registros aun</p> 
							<p></p> 
							<p></p> 
							<p></p> 
							<p class="w3agile">-</p> 
							<div class="agileits-buy">
								<a class="popup-with-zoom-anim" href="#small-dialog">Administrar</a>
							</div>
						</div>
					</div> 
				</div> <div class="item">
					<div class="pricing pricing-two">
						<div class="pricing-top top-two">
							<h3 id="pedidos">PEDIDOS FINALIZADOS</h3><br>
							<p>Actualizado al 20/12/2021</p>
						</div>
						<div class="pricing-bottom"> 
							<p>Sin registros aun</p> 
							<p></p> 
							<p></p> 
							<p></p> 
							<p class="w3agile">-</p> 
							<div class="agileits-buy">
								<a class="popup-with-zoom-anim" href="#small-dialog">Administrar</a>
							</div>
						</div>
					</div> 
				</div> 
			</div>	
			<!-- //owl-carousel -->
		</div>	
	</div>	
	<!-- //main -->
	
	<!-- js -->
	<script src="<?php echo constant('URL');?>public/js/jquery-1.9.1.min.js"></script> 
	<script src="<?php echo constant('URL');?>public/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo").owlCarousel({
				
			  autoPlay: 3000, //Set AutoPlay to 3 seconds 
			  items : 3,
			  itemsDesktop : [640,5],
			  itemsDesktopSmall : [414,4]
		 
			}); 
		}); 
	</script> 
	<!-- //js -->
	<!-- popup js --> 
	<script src="<?php echo constant('URL');?>public/js/jquery.magnific-popup.js" type="text/javascript"></script>  
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			}); 															
		});
	</script>
	<!-- //popup js --> 
</body>

    <?php require 'views/footer.php';?>



</html>