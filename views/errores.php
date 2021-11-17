<!DOCTYPE html>
<html  lang="es">
    <head>
        <meta charset="UTF-8">
        <title>ERROR</title>
        <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/estilos.css" type="text/css">
   
    </head>
    <body>
    <?php require 'views/header.php';?>
            <img  id="e" src="<?php echo constant('URL');?>public/IMG/error3.svg" alt="descripción" />
        <div  id="error" class="error">
            <h1 class="error"><?php echo $this->mensaje; ?></h1>
        </div>
        
   </body>

</html>
