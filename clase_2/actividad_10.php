<?php

/*Escriba un script PHP que utilice la función date('Y-m-d') para obtener la fecha actual
y utilizando la función explode() cambie el formato de la fecha a dd/mm/yyyy, muestre la fecha con
formato por pantalla.*/

$fecha = explode('-', date('Y-m-d'));
$fecha_formateada = $fecha[2]."/".$fecha[1]."/".$fecha[0];
echo $fecha_formateada


?>