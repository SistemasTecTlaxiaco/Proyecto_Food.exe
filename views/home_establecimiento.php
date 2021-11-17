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
    
   
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/estilos.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/barra.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/barra.js" type="text/css">
   

    <title>HOME ESTABLECIMIENTO</title>
</head>
<body>
<div id="header2">
    <ul class="clearfix" >
        <li><a href="<?php echo constant('URL');?>home_establecimiento"> &#x1F37D Food.exe</a></li>
        
    </ul>
   </div>  
<div id="lateral">
      <ul class="clearfix">
        <li>
        <!--  <img src="img/logo.jpg" alt="Logo Fazt" class="logo"> -->
        </li>

      </ul>
 </div>
 
<article id="tabla">
      <ul id="menu">
        <li ><a href="<?php echo constant('URL');?>menu_gral" id="barra">
        <button class="redondo" id="uno">
        MENU</button></a></li>
        <li></li>
        <li ><a href="<?php echo constant('URL');?>ofertas_gral" id="barra">
        <button class="redondo" id="dos">
        OFERTAS</button></a></li>
        <li></li>
        <li ><a href="<?php echo constant('URL');?>redes" id="barra">
        <button class="redondo" id="tres">
        REDES SOCIALES</button></a></li>
        <li></li>
        <li ><a href="<?php echo constant('URL');?>mesas" id="barra">
        <button class="redondo" id="cuatro">
        MESAS DISPONIBLES</button></a></li>
        <li></li>
        <li ><a href="<?php echo constant('URL');?>lista_pedidos" id="barra">
        <button class="redondo" id="cinco">
        LISTA DE PEDIDOS</button></a></li>
        <li></li>
        <li ><a href="<?php echo constant('URL');?>mapa" id="barra">
        <button class="redondo" id="seis">
          MAPA</button></a></li>
        <li></li>
        <li ><a href="<?php echo constant('URL');?>cerrar" id="barra">
        <button class="redondo" id="siete">CERRAR SESION</button></a></li>
        
    </ul>
</article>
      <article id="datos">
    <h3 id="food">DATOS DEL ESTABLECIMIENTO</h3>
    <img  id="imglogo" src="<?php echo constant('URL');?>public/IMG/empresa.png" alt="descripción" />

    <h4 style=" text-align: left;">            
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

