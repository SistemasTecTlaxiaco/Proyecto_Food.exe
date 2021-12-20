<?php
$boton1="";
$boton2="";
$boton3="";
$boton4="";
$boton5="";
$boton6="";
$boton7="";
$boton8="";
$boton9="";
$boton10="";
$boton11="";
$boton12="";
$boton13="";
function onclick(){ }
if(isset($_POST['boton1']))$boton1=$_POST['boton1'];
if(isset($_POST['boton2']))$boton2=$_POST['boton2'];
if(isset($_POST['boton3']))$boton3=$_POST['boton3'];
if(isset($_POST['boton4']))$boton4=$_POST['boton4'];
if(isset($_POST['boton5']))$boton5=$_POST['boton5'];
if(isset($_POST['boton6']))$boton6=$_POST['boton6'];
if(isset($_POST['boton7']))$boton7=$_POST['boton7'];
if(isset($_POST['boton8']))$boton8=$_POST['boton8'];
if(isset($_POST['boton9']))$boton9=$_POST['boton9'];
if(isset($_POST['boton10']))$boton10=$_POST['boton10'];
if(isset($_POST['boton11']))$boton11=$_POST['boton11'];
if(isset($_POST['boton12']))$boton12=$_POST['boton12'];
if(isset($_POST['boton13']))$boton12=$_POST['boton13'];

if($boton1 == onclick())
{
    echo "Mesa 1 ocupado";
}else {echo "Mesa 1 desocupado";}

if($boton2 == onclick())
{
    echo "<br>Mesa 2 ocupado";
}else{echo  "<br> Mesa 2 desocupado";}

if($boton3 == onclick())
{
    echo "<br>Mesa 3 ocupado";
}else{echo "<br> Mesa 3 desocupado";}

if($boton4 == onclick())
{
    echo "<br>Mesa 4 ocupado";
}else{echo "<br> Mesa 4 desocupado";}

if($boton5 == onclick())
{
    echo "<br>Mesa 5 ocupado";
}else {echo "<br> Mesa 5 desocupado";}

if($boton6 == onclick())
{
    echo "<br>Mesa 6 ocupado";
}else {echo "<br> Mesa 6 desocupado";}

if($boton7 == onclick())
{
    echo "<br>Mesa 7 ocupado";
}else {echo "<br> Mesa 7 desocupado";}

if($boton8 == onclick())
{
    echo "<br>Mesa 8 ocupado";
}else {echo "<br> Mesa 8 desocupado";}

if($boton9 == onclick())
{
    echo "<br>Mesa 9 ocupado";
}else {echo "<br> Mesa 9 desocupado";}

if($boton10 == onclick())
{
    echo "<br>Mesa 10 ocupado";
}else {echo "<br> Mesa 10 desocupado";}

if($boton11 == onclick())
{
    echo "<br>Mesa 11 ocupado";
}else {echo "<br> Mesa 11 desocupado";}

if($boton12 == onclick())
{
    echo "<br>Mesa 12 ocupado";
}else {echo "<br> Mesa 12 desocupado";}
?>
