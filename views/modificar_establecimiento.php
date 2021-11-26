

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
<?php    
    include_once 'models/establecimiento.php';
    foreach ($this->establecimiento as $row){
        $establecimiento=new establecimiento();
        $establecimiento=$row;
        
        ?>
        <!--Encabezado-->
        <div class="header-main">
          <div class="main-content">
            <ul class="elementos-header">
            <!--ICONO PRINCIPAL ESQUINA SUPERIOR-->
            <a href="#"> 
              <img src="<?php echo constant('URL');?>public/IMG/logo.png" class="logo"></a>

            <!--SESION CON NOMBRE ESTABLECIMIENTO--> <li>    
                 <span>  <?php echo  $establecimiento->nombre;?></span>
                 <img src="<?php echo constant('URL');?>public/IMG/negocio.png" height="30px" width="30px"/> 
                </li>
            </ul>
    </div>
</div> <br><br>

<article id="inicio">
    
   <form action="<?php echo constant('URL');?>consulta/actualizarEstablecimiento" method="post" id="login" class="login">
    <span id="food">Edicion de  <?php echo  $establecimiento->nombre;?></span>
    <div class="form-group">
			<span>Nombre:</span> 
			<input type="text" name="nombre" id="nombre" class="form-control"  value="<?php echo $establecimiento->nombre; ?>" required>
		</div> <br>
    <div class="form-group">
			<span>Establecimiento:</span> <!--RECORDAR: Redonly para tener id pero que no se pueda modificar-->
			<input type="text" name="id_establecimiento" id="id_establecimiento" class="form-control" readonly value="<?php echo $establecimiento->id_establecimiento; ?>" required>
		</div> <br>
        <div class="form-group">
            <img  id="loguito" src="<?php echo constant('URL');?>public/IMG/calendario.png" alt="empresa" />
            <span>Horario:</span>
            <input type="text" name="horario" id="horario" class="form-control" value="<?php echo $establecimiento->horario; ?>" required>
    </div> <br>
    <div class="form-group">
            <img  id="loguito" src="<?php echo constant('URL');?>public/IMG/restaurante.png" alt="empresa" />
            <span>Ubicacion:</span>
            <input type="text" name="ubicacion" id="ubicacion" class="form-control" value="<?php echo $establecimiento->ubicacion; ?>" required>
    </div> <br>
    <div class="form-group">
            <img  id="loguito" src="<?php echo constant('URL');?>public/IMG/telefono.png" alt="empresa" />
            <span>Telefono:</span>
            <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $establecimiento->telefono; ?>" required>
    </div> <br>
    <div class="form-group">
            <img  id="loguito" src="<?php echo constant('URL');?>public/IMG/contra.png" alt="empresa" />
            <span>Contraseña:</span>
            <input type="text" name="contra" id="contra" class="form-control" value="<?php echo $establecimiento->contra; ?>" required>
    </div> <br>			
    
    <input type="submit" id="establecimiento" class="btn btn-primary btn-block"  value="ACTUALIZAR ESTABLECIMIENTO" ></input>
    <?php }?>

</form>
</article>
    <script src="<?php echo constant('URL');?>public/css/barra.js"></script>
  
</body>
<?php require 'views/footer.php';?>

</html>
