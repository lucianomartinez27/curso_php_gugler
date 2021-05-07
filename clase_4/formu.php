<?php

ini_set('display_errors', 1);

/*– Crear otro script PHP que contenga la función de verificación del punto anterior. Luego
deberá incluir (include) la misma en el script PHP del punto 1.*/

include('validar_correo.php');


foreach ($_POST as $dato => $valor){
    echo $dato.": ".$valor."<br>";
}


echo validarCorreo($_POST['correo']);

?>

