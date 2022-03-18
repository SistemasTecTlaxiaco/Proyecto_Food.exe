<!DOCTYPE html>
<html>  
  <head>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script> 
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
  </head>   

  <body >
    <a-scene embedded arjs> 
      <a-entity scale=".2 .2 .2">
        <a-entity gltf-model="pastel.glb" scale="1 1 1" crossOrigin="anonymous">
        </a-entity>
        <a-marker-camera preset='hiro'></a-marker-camera>
        </a-scene>
      </body>
    </html>