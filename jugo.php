<!DOCTYPE html>
<html>  
  <head>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script> 
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
   <!-- estamos llamando a las dos librerías de Aframe y ARJS-->
  </head>   

  <body >
    <a-scene embedded arjs> <!--Scene embedded será el lanzador de la realidad aumentada-->
      <a-entity scale=".2 .2 .2"> <!--a-entity encapsulará el archivo 3D-->
        <a-entity gltf-model="juguito.glb" scale="1 1 1" crossOrigin="anonymous">
        </a-entity>
        <a-marker-camera preset='hiro'></a-marker-camera><!--marker-camera es el llamado a la cámara-->
        </a-scene>
      </body>
    </html>