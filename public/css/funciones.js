function geoloc() {
        d=document.getElementById("demo");
        if (navigator.geolocation){
          d.innerHTML="<p>Tu dispositivo soporta la geolocalización.</p>";
          navigator.geolocation.getCurrentPosition(showPosition);
        }
      else {
          d.innerHTML="<p>Lo sentimos, tu dispositivo no admite la geolocaización.</p>";
        }
      }
      function showPosition(position){
        latitud=position.coords.latitude;
        longitud=position.coords.longitude;
        d.innerHTML="";
        d.innerHTML+="<p>Latitud: "+latitud+"</p>";
        d.innerHTML+="<p>Longitud: "+longitud+"</p>";
        alert("se ha encontrado su posición");
      }
      function showError(error){
        switch(error.code) {
          case error.PERMISSION_DENIED:
            d.innerHTML+="<p>El usuario ha denegado el permiso a la localización.</p>"
            break;
          case error.POSITION_UNAVAILABLE:
            d.innerHTML+="<p>La información de la localización no está disponible.</p>"
            break;
          case error.TIMEOUT:
            d.innerHTML+="<p>El tiempo de espera para buscar la localización ha expirado.</p>"
            break;
          case error.UNKNOWN_ERROR:
            d.innerHTML+="<p>Ha ocurrido un error desconocido.</p>"
            break;
          }
        }
function registro_es(){
    var val=validar();
    if(val==true){
/*AQUI VA CODIGO PARA AGREGAR LOS VALORES DE LOS CAMPOS EN LA BASE DE DATOS*/
        alert("SUS DATOS SON VALIDOS :)");
         

    }else{
        alert("INGRESE BIEN SUS DATOS O NO PODRA CONTINUAR :(");

    }

}

function validar(){
            if(!(/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+)+[\s]*([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*?$/.test(document.getElementById("usuario").value)))
{
        alert('Hay un error en el nombre');
        document.getElementById("usuario").style.backgroundColor='red';
        document.getElementById("usuario").focus();
        return false;
}else{
    /*VALIDA CONTRASEÑA
        La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula.
NO puede tener otros símbolos.*/
       if(!( /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/.test(document.getElementById("contraseña").value)))
       {
alert('Hay un error en la contraseña');
        document.getElementById("contraseña").style.backgroundColor='red';
        document.getElementById("contraseña").focus();
        return false;

        }else if(!(/(\+52|0052|52)?[ -]*([0-9][ -]*){10}$/.test(document.getElementById("telefono").value))){
            /*VALIDA TELEFONO
       Se debe o no incluir el codigo del pais, y de ahi diez digitos del numero*/
            alert('Hay un error en el telefono');
            document.getElementById("telefono").style.backgroundColor='red';
            document.getElementById("telefono").focus();
            return false;
        }
        else{
            return true;
        }

        }
    
    
    }