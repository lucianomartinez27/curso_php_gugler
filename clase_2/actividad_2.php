<?php
/*2) - Realice un script que defina un arreglo de nombre $dias_semana y al cual debemos
asignar cada uno de los días de la misma comenzando por el Domingo */

$dias_semana = array('Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado');

 /*3) - Edite el script anterior y agregue una nueva sentencia que muestre el contenido del
arreglo con la construcción foreach. */

foreach ($dias_semana as $dia){
    echo $dia.'<br>';
}


?>
