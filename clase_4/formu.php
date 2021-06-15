<?php

ini_set('display_errors', 1);

/*– Editar el script del punto 1 para incluir el archivo pero con la sentencia require(). Luego
pruebe indicar un nombre de archivo inexistente en la función require() para ver los resultados en
pantalla..*/

require('validar_correa.php');


foreach ($_POST as $dato => $valor){
    echo $dato.": ".$valor."<br>";
}


echo validarCorreo($_POST['correo']);

?>

