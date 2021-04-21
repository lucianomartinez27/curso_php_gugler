<?php
/*2) - Realice un script que defina un arreglo de nombre $dias_semana y al cual debemos
asignar cada uno de los días de la misma comenzando por el Domingo */

$dias_semana = array('Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado');

 /*3) - Edite el script anterior y agregue una nueva sentencia que muestre el contenido del
arreglo con la construcción foreach. */

foreach ($dias_semana as $dia){
    echo $dia.'<br>';
}

/*4) - Edite el script del punto 3 y agregue la función print_r() para ver el contenido y la
estructura del arreglo $dias_semana.*/

print_r($dias_semana);

/*- Edite el script del punto 4 y ordene el arreglo de forma ascendente y muestre en
pantalla el contenido del mismo.*/
echo '<br>Dias de la semana ordenados alfabéticamente en forma ascendente: <br>';

sort($dias_semana);
print_r($dias_semana);

?>
