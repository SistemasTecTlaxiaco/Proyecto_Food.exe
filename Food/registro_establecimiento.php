<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
   <link rel="shortcut icon" href="css/IMG/icono.png"> 
    <link rel="stylesheet" href="css/login4.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <script type="text/javascript" src="funciones.js"></script>

</head>
<body class="inicial"  id="pawegrap">
    <div id="content"> 
    <img style="float:left;" src="css/IMG/icono.png" alt="descripción" />

    <article class="cuadro-inicial">
    <!--Los datos del formulario son enviados a ingresar.php ahi se usan para almacenarlos en la base de datos-->
    <form action="ingresar.php" method="post" id="cuadro" class="cuadro">
    <h1>REGISTRO ESTABLECIMIENTO</h1>
    <p>Nombre del establecimiento:<input type="text" placeholder="Ingrese nombre" name="usuario" id="usuario"></p>    
    <p>Contraseña:<input type="password" placeholder="Contraseña" name="contraseña" id="contraseña"></p>
    <p>Telefono:<input type="tel" placeholder="+529531712545" name="telefono" id="telefono"></p>   
   <br> <p>Archivo comprobatorio:<input type="file" placeholder="Seleccione archivo" name="archivo"></p>   
   <br><label>Ubicacion:</label><button type="button" name="ubicacion" onclick="geoloc()" >ubicar</button>
    <label id="demo"></label>
    </p>       <br>
    <!--Al presionar el boton, se validan datos desde javascript y luego si son validos se almacenan en la base de datos-->
    <input type="submit" value="Registrar" id="registro" class="registro_establecimiento" onclick="registro_es()"></input>
</form>
    </article>
</div>

</body>

<footer >
<ul class="clearfix" id="footer">
			<li> Siguenos:</a> </li>
            <li></li>
			<li>Food.exe</a></li>
            <li ><a href="https://api.whatsapp.com/send?phone=+5219531712545">
<img src="css/IMG/whatsapp.png"  height="30px" width="30px"/></a></li>
            <li ><img src="css/IMG/facebook.png"  height="30px" width="30px"/></li>
            <li ><img src="css/IMG/instagram.png"  height="30px" width="30px"/></li>
            <li><a href="#inicio">Politicas de privacidad</a></li><li></li>
            <li><a href="#inicio">Soporte</a></li><li></li>
            <li><a href="#inicio">Ayuda</a></li>
		</ul>
</footer>

</html>