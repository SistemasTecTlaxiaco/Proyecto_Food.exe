<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/estilos.css" type="text/css">
</head>
<body class="mapa">
<?php require 'views/header.php';?>
        
<div id="content"> 
   <div>
        <h1 style="text-align:center; color:red;">MAPA<H1>
   </div> 
    <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7619.965992977022!2d-97.6788013673236!3d17.26805754886675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1620633961611!5m2!1ses-419!2smx"  width="800" height="450" style="border: 10px;;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>


        <?php require 'views/footer.php';?>
        
</body>
</html>
