<?php

ini_set('display_errors', 1);
/*Edite el script PHP anterior para agregar una función que permita validar el campo de
correo electrónico, limpiando la cadena de espacio en blancos y verificando que se encuentre el
símbolo arroba en la cadena.*/


foreach ($_POST as $dato => $valor){
    echo $dato.": ".$valor."<br>";
}

function validarCorreo($correo){
    if (str_contains($correo, "@")){
        return trim($correo);
    }
    throw new Exception("Correo inválido");
}

echo validarCorreo($_POST['correo']);

?>

