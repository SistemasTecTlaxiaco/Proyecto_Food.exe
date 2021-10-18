<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="mapa">
<?php require 'views/header.php';?>
        
<div id="content"> 
   <div>
  int ledPin = 13; 		// LED que se encuentra en el pin 13
   void setup(){ 
   pinMode(ledPin, OUTPUT);	// El p1n 13 será una salida digital 
} 
void loop(){ 
   digitalWrite(ledPin, HIGH);	// Enciende el LED
   delay(1000); 				// Pausa de 1 segundo 
   digitalWrite(ledPin, LOW); 	// Apaga el LED 
   delay(1000);				// Pausa de 1 segundo 
} 
 
</div>


        <?php require 'views/footer.php';?>
        
</body>
</html>
