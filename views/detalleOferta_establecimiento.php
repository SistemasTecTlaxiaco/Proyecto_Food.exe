  
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0"> <meta http-equiv="Last-Modified" content="0"> 
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> 
    <meta http-equiv="Pragma" content="no-cache"> 
    <title>DETALLE OFERTAS</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/estilos.css" type="text/css">

</head>
<body id="inicial">

<?php    
    include_once 'models/oferta.php';
    foreach ($this->oferta as $row){
        $oferta=new oferta();
        $oferta=$row;
        
        ?>
    <form action="<?php echo constant('URL');?>ofertas_gral/actualizarPlatillo" method="post" id="login" class="login">
    <h3 id="titulo">MODIFICACION DE <?php echo $oferta->nombre; ?> </h3>
   
    <div class="form-group">
			<label>Platillo:</label> <!--RECORDAR: Redonly para tener id_platillo pero que no se pueda modificar-->
			<input type="text" name="id_oferta" id="id_oferta" class="form-control" readonly value="<?php echo $oferta->id_ofertas; ?>" required>
		</div> <br>
    <div class="form-group">
			<label>Nombre:</label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $oferta->nombre; ?>" required>
		</div> <br>        
        <div class="form-group">
			<label>Especificaciones:</label>
			<textarea class="form-control" name="especificacion" id="especificacion"required> <?php echo $oferta->especificacion; ?> </textarea> </div> <br>
        <div class="form-group">
			<label>Precio anterior:</label>
			<input type="number" class="form-control" name="prec_anterior" id="prec_anterior" value="<?php echo $oferta->prec_anterior; ?>" required>
		</div> <br>
		<div class="form-group">
			<label>Precio actual:</label>
			<input type="number" class="form-control" name="descuento" id="descuento" value="<?php echo $oferta->descuento; ?>" required>
		</div> <br>
    <input type="submit" id="platillos" class="btn btn-primary btn-block"  value="ACTUALIZAR OFERTA" ></input>
    <?php }?>

</form>
    </article>
</div>
<?php require 'views/footer.php';?>   
</body>
</html>
