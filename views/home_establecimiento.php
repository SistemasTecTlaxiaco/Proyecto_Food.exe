<?php
include_once("./libs/database.php");
include_once("./models/nuevomodel.php");
include_once("./libs/model.php");
$this->db=new Database();
$db = $this->db->connect();
error_reporting(0);
session_start();
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
        <!--Encabezado-->
        <div class="header-main">
          <div class="main-content">
            <ul class="elementos-header">
            <!--ICONO PRINCIPAL ESQUINA SUPERIOR-->
            <a href="#"> 
              <img src="<?php echo constant('URL');?>public/IMG/logo.png" class="logo"></a>

            <!--SESION CON NOMBRE ESTABLECIMIENTO--> <li>    
                 <span> <?php echo utf8_decode($row['nombre']);?></span>
                 <img src="<?php echo constant('URL');?>public/IMG/negocio.png" height="30px" width="30px"/> 
                </li>
            </ul>
    </div>
</div> <br><br>
<div id="barra-lateral" class="barra-lateral">
      <ul >
        <li ><a href="<?php echo constant('URL').'menu_gral/render/'.$row['id_establecimiento']?>" id="barra">
        <button class="redondo"> MENU</button></a></li>
        <li></li>
        <li ><a href="<?php echo constant('URL');?>ofertas_gral" id="barra">
        <button class="redondo" > OFERTAS</button></a></li>
        <li></li>
        <li ><a href="<?php echo constant('URL');?>redes" id="barra">
        <button class="redondo">REDES SOCIALES</button></a></li>
        <li></li>
        <li ><a href="<?php echo constant('URL');?>mesas" id="barra">
        <button class="redondo"> MESAS DISPONIBLES</button></a></li>
        <li></li>
        <li ><a href="<?php echo constant('URL');?>lista_pedidos" id="barra">
        <button class="redondo"> LISTA DE PEDIDOS</button></a></li>
        <li></li>
        <li ><a href="<?php echo constant('URL');?>mapa" id="barra">
        <button class="redondo"> MAPA</button></a></li>
        <li></li>
        <li ><a href="<?php echo constant('URL');?>cerrar" id="barra">
        <button class="redondo" id="siete">CERRAR SESION</button></a></li>
        
    </ul>
    
      <article id="datos"> <ul>
          <li>
              <img  id="perfil-negocio" src="<?php echo constant('URL');?>public/IMG/negocio.png" alt="empresa" />
               <span id="food"> <?php echo utf8_decode($row['nombre']);?></span>
            </li> <br><br>
          <li>
                <img  id="loguito" src="<?php echo constant('URL');?>public/IMG/restaurante.png" alt="empresa" />
                <span>Ubicacion: <?php  echo utf8_decode($row['ubicacion']);?></span>
          </li>
          <li>
               <img  id="loguito" src="<?php echo constant('URL');?>public/IMG/telefono.png" alt="empresa" />
              <span> Telefono : <?php  echo utf8_decode($row['telefono']);?></span>
          </li>
          <li>
              <img  id="loguito" src="<?php echo constant('URL');?>public/IMG/calendario.png" alt="empresa" />
              <span>Horario : <?php  echo utf8_decode($row['horario']);?></span></h4>
          </li>

    </ul>            
   <h4  style=" text-align: left;">Comentarios : <a href="#" id="barra"> Ver mas... </a><br><br><br></h4>
  
   <h4 id="x"> <a href="<?php echo constant('URL').'consulta/editarEstablecimiento/'.$row['id_establecimiento']?> " id="barra">  &#x270F Editar</a></h4>

    </article>

    <script src="<?php echo constant('URL');?>public/css/barra.js"></script>

</body>
</html>

