<?php
    //var_dump($_FILES["files]);
    $directorio = "imagenes/";
    $archivo = $directorio . basename($_FILES["file"]["name"]);
    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    //valida que es imagen
    $checarSiImagen = getimagesize($_FILES["file"]["tmp_name"]);
    //var_dump($size);
    if($checarSiImagen != false) {
        //Validando tamaño del archivo 
        $size = $_FILES["file"]["size"];
        if ($size > 500000) {
            echo "El archivo tiene que ser menor a 500kb";
        } else{
            //validar tipo de imagen
            if ($tipoArchivo == "jpg" || $tipoArchivo == "jpeg") {
                //Se valido el archivo correctamente
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)) {
                    echo "El archivo se subio correctamente";
                } else {
                    echo "Hubo un error en la subida del archivo";
                }
            } else {
                echo "Solo se admited archivos jpg/jpeg";
            }
        } 
    } else { 
        echo "El documento no es una imagen";
    }
?> 