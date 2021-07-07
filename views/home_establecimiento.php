<?php
include_once("./libs/database.php");
include_once("./models/nuevomodel.php");
include_once("./libs/model.php");
$this->db=new Database();
$db = $this->db->connect();
$idusuario=$_SESSION['id_establecimiento'];
//echo $idusuario;
$query= $db->prepare("SELECT * FROM establecimiento WHERE id_establecimiento='$idusuario'");
$query->execute();

$row=$query->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/login.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/cabecera.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/barra.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/barra.js" type="text/css">
   

    <title>HOME ESTABLECIMIENTO</title>
</head>
<body id="pawegrap" >
<div id="header2">
    <ul class="clearfix" >
        <li><a href="<?php echo constant('URL');?>main"> &#x1F37D Food.exe</a></li>
        
    </ul>
   </div>  
<div id="sidebar">
      <div class="toggle-btn">
        <span>&#8803</span>
      </div>
      <ul>
        <li ><a href="<?php echo constant('URL');?>menu_Establecimiento" id="barra">Menu</a></li>
        <li></li>
        <li><a href="#" id="barra">Ofertas</a></li>
        <li></li>
        <li><a href="#" id="barra">Redes sociales</a></li>
        <li></li>
        <li><a href="#" id="barra">Mesas disponibles</a></li>
        <li></li>
        <li><a href="#" id="barra">Lista de pedidos</a></li>
        <li></li>
        <li><a href="#" id="barra">Mapa de establecimientos</a></li>
        <li></li>
        <li><a href="<?php echo constant('URL');?>cerrar" id="barra">Cerrar sesion</a></li>
     
      </ul>
 </div>
 <img style="float:left;" src="<?php echo constant('URL');?>public/IMG/icono.png" alt="descripción" />

      <article class="cuadro-inicial">
    <h1 style="color: #fd9c28; text-align: left;">DATOS DEL ESTABLECIMIENTO</h1>
    <h2 style=" text-align: left;">            
    <strong> Nombre </strong> : <?php echo utf8_decode($row['nombre']);?><br><br><br>
    <strong> Telefono </strong> : <?php echo utf8_decode($row['telefono']);?><br><br><br>
    <strong> Contraseña </strong> : <?php echo utf8_decode($row['contra']);?><br><br><br>
    <strong> Horario </strong> : <?php echo utf8_decode($row['horario']);?><br><br> <br></h2>
   <h2  style=" text-align: left;"><strong> Comentarios </strong> <a href="#" id="barra"> Ver mas... </a><br><br><br></h2>

   <h2 id="x"  style=" text-align: center;">&#x270F Editar<h2>

   
    </article>

    <script src="<?php echo constant('URL');?>public/css/barra.js"></script>

</body>
</html>
