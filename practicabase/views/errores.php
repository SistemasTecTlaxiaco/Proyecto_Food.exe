<!DOCTYPE html>
<html  lang="es">
    <head>
        <meta charset="UTF-8">
        <title>MENSAJE ERROR</title>
        <link rel="stylesheet" href="public/css/login.css" type="text/css">
   
    </head>
    <body>
    <?php require 'views/header.php';?>
        <div id="main">
            <h1 class="error"><?php echo $this->mensaje; ?></h1>
        </div>
        <?php require 'views/footer.php';?>
        
   </body>

</html>