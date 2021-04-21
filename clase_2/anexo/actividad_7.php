<?php
/*
7) – Escriba un nuevo script que obtenga la fecha y la hora del servidor (date('Y-m-d
H:i:s')) para luego mostrar en pantalla la siguiente salida:
Información de fecha y hora actual
Fecha actual
Año: 2010
Mes: 04
Día: 09
Hora actual
Hora: 15
Minutos: 00
Segundos: 00
*/

$fecha_y_hora = explode(" ", date('Y-m-d H:i:s'));

$fecha = explode("-",$fecha_y_hora[0]);
$hora = explode(":", $fecha_y_hora[1]);



echo "Fecha actual<br>";
echo "Año: ".$fecha[0]."<br>";
echo "Mes: ".$fecha[1]."<br>";
echo "Día: ".$fecha[2]."<br>";
echo "Hora actual<br>";
echo "Hora: ".$hora[0]."<br>";
echo "Minutos: ".$hora[1]."<br>";
echo "Segundos: ".$hora[2]."<br>";
?>