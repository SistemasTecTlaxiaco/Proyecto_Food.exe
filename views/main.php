<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Evita que al abrir en movil, el usuario haga zooom-->
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/estilos.css" type="text/css">

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
            <!--INICIO DE SESION DEL COMENSAL--><li>  
            <a href="<?php echo constant('URL');?>inicio_cliente" class="textos-sesion" >
             <img src="<?php echo constant('URL');?>public/IMG/usuario.png"  height="30px" width="30px"/>
                 <span>COMENSAL</span>
            </a> </li> 
            <!--INICIO DE SESION DEL ESTABLECIMIENTO--> <li>           
            <a href="<?php echo constant('URL');?>inicio_establecimiento" class="textos-sesion">
             <img src="<?php echo constant('URL');?>public/IMG/empresa.png"  height="30px" width="30px"/> 
                 <span>ESTABLECIMIENTOS</span>
            </a></li>
</ul>
    </div>
</div>
<br><br><br><br>
<br><br>

        <!--CONTENEDOR IMAGEN PROMOCIONAL-->            
           <div class="contenedor">
                <img class="imagen-publi" src="<?php echo constant('URL');?>public/IMG/publicidad.jpg" />
                        <div class="centrado"><h1>ENCUENTRA TU COMIDA FAVORITA EN EL LUGAR MAS CERCANO</h1></div>
                        <div class="cuerpo-centrado"><h4>Estamos comprometidos con la satisfaccion de los clientes y
                            los establecimientos, en la busqueda de lugares interesantes, disponibilidad, ofertas
                            y descuentos, asi como una administracio eficaz desde dispositivos moviles y de escritorio.
                        </h4></div>

            </div>
        <!--TARJETAS PROMOCIONALES-->
            <div class="contenedor-cards">
      <div class="row"><br><br><br>
          <!--TARJETA 1 COMENSAL-->
        <div class="col">
          <div class="card">
            <div class="titulo-card">
              <h1 class="text-cards">CLIENTES EN GENERAL</h1>
            </div>
            <div class="card-body">
            <small>Con envio a domicilio</small>
              <h3 class="card-title">¿BUSCAS UN LUGAR PARA COMER?</h3>
              <p>Ya sea que busques tu comida favorita o un lugar tranquilo para ir con amigos, puedes 
                  registrarte y acceder a los establecimientos cercanos, verificar su puntuacion, comentarios,
                  mesas disponibles, ofertas, descuentos usando redes sociales entre mucho mas.
              </p>
              <a href="<?php echo constant('URL');?>inicio_cliente" >
              <button type="button" class="btn btn-cards">INICIAR SESION</button></a><br>
            </div>
          </div>
        </div> <br><br><br>
        <!--TARJETA 2 EXPLORAR-->
        <div class="col">
          <div class="card">
            <div class="titulo-card">
              <h1 class="text-cards">EXPLORAR</h1>
            </div>
            <div class="card-body">
            <small>Con envio a domicilio</small>
              <h3 class="card-title">¿Buscas un lugar para comer?</h3>
              <p>Ya sea que busques tu comida favorita o un lugar tranquilo para ir con amigos, puedes 
                  registrarte y acceder a los establecimientos cercanos, verificar su puntuacion, comentarios,
                  mesas disponibles, ofertas, descuentos usando redes sociales entre mucho mas.
              </p>
              <button type="button" class="btn btn-cards">VISITAR</button><br>
            </div>
          </div>
        </div><br><br><br>
        <!--TARJETA 3 ESTABLECIMIENTO-->
        <div class="col">
          <div class="card">
            <div class="titulo-card">
              <h1 class="text-cards">ESTABLECIMIENTOS</h1>
            </div>
            <div class="card-body">
            <small>Afiliate</small>
              <h3 class="card-title">FORMA PARTE DE FOOD.EXE</h3>
              <p>  Asociate con Food.exe para atraer mas clientes y llevar tu negocio 
                  a las nuevas generaciones. Administra la informacion de tu establecimiento,
                  los pedidos, añade ofertas atractivas para clientes y mas herramientas.
              </p>
              <a href="<?php echo constant('URL');?>inicio_establecimiento" >
              <button type="button" class="btn btn-cards">INICIAR SESION</button></a><br>
            </div>
          </div>
        </div>
        
    </div>
    <br><br><br>
    <?php require 'views/footer.php';?>

   </body>

</html>
