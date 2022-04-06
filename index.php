<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelos 3D</title>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script> 
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
    <script src="https://raw.githack.com/fcor/arjs-gestures/master/dist/gestures.js"></script>

<style>
    .button{
    background-color: #FFA75A;
    border: none;
    color: white;
    padding: 7px;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 12px;
    border: 2px solid rgba(255, 129, 12, 0.967);
    }
    .wrap{
    border: solid 1px #ccc;
    padding: 10px;
    text-align: center;
    }
    #output{
    display: inline-block;
    top: 40px;
    position: relative;
    border: dotted 1px #ccc;
    padding: 2p}

    .titulo{
     text-align: left;
     color: red;       
    }
</style> 
</head>
    <div style="position: fixed; top: 10px; width: 100%; text-align: center; z-index: 1;">
        <h1 class ="titulo">PRODUCTOS</h1>
        <button class="button" id="btn1"> Pizza </button>
        <button class="button" id="btn2"> Hamburguesa </button>
        <button class="button" id="btn3"> Sandwich </button>
        <button class="button" id="btn4"> Helado </button>
        <button class="button" id="btn5"> Gelatina </button>
        <button class="button" id="btn6"> Pastel </button>
        <button class="button" id="btn7"> Refresco </button>
        <button class="button" id="btn8"> Café </button>
        <button class="button" id="btn9"> Jugo </button>
        <a href="eje.html">  <button class="button" id=""> Mesero </button></a>
    </div>
<body  id="camara"  style="margin: 0px; overflow: hidden;"> 
    <a-scene embedded arjs="degubUIEnabled: false" vr-mode-ui="enabled: false"> <!--Scene embedded será el lanzador de la realidad aumentada-->
        <a-marker present="hiro">
            <a-entity id="entityID1" gltf-model="pizzara.glb" scale=".30 .30 .30">
        </a-marker>
        <a-entity camera></a-entity>
    </a-scene>
<script>
document.getElementById("btn1").addEventListener("click", (e)=>{
var el = document.querySelector('#entityID1');
el.setAttribute("gltf-model", 'gltf:url(pizzara.glb)');
el.setAttribute("scale",'.50 .50 .50'); })

document.getElementById("btn2").addEventListener("click", (e)=>{
var el = document.querySelector('#entityID1');
el.setAttribute("gltf-model", 'gltf:url(Hamburguesin.glb)');
el.setAttribute("scale",'.50 .50 .50'); })

document.getElementById("btn3").addEventListener("click", (e)=>{
var el = document.querySelector('#entityID1');
el.setAttribute("gltf-model", 'gltf:url(sanwichito.glb)');
el.setAttribute("scale",'.50 .50 .50'); })

document.getElementById("btn4").addEventListener("click", (e)=>{
var el = document.querySelector('#entityID1');
el.setAttribute("gltf-model", 'gltf:url(Helado.glb)');
el.setAttribute("scale",'.50 .50 .50'); })

document.getElementById("btn5").addEventListener("click", (e)=>{
var el = document.querySelector('#entityID1');
el.setAttribute("gltf-model", 'gltf:url(gelatina.glb)');
el.setAttribute("scale",'.50 .50 .50'); })

document.getElementById("btn6").addEventListener("click", (e)=>{
var el = document.querySelector('#entityID1');
el.setAttribute("gltf-model", 'gltf:url(pastel.glb)');
el.setAttribute("scale",'.50 .50 .50'); })

document.getElementById("btn7").addEventListener("click", (e)=>{
var el = document.querySelector('#entityID1');
el.setAttribute("gltf-model", 'gltf:url(refresco.glb)');
el.setAttribute("scale",'.50 .50 .50'); })

document.getElementById("btn8").addEventListener("click", (e)=>{
var el = document.querySelector('#entityID1');
el.setAttribute("gltf-model", 'gltf:url(cafe.glb)');
el.setAttribute("scale",'.50 .50 .50'); })

document.getElementById("btn9").addEventListener("click", (e)=>{
var el = document.querySelector('#entityID1');
el.setAttribute("gltf-model", 'gltf:url(juguito.glb)');
el.setAttribute("scale",'.50 .50 .50'); })

</script>
</body>
</html>
