<?php


/*
Crear otro script PHP (index.php) que use las clases definidas en los puntos 3 y 4 de
la presente guía práctica.
*/

require_once('CabeceraPagina.php');
require_once('PiePagina.php');

$cabecera = new CabeceraPagina('Hola Mundo', "center");
$piePagina = new PiePagina("1994", "2021", "Luciano Martínez", "lucianomartinez.com.ar", "lucianomarinez27@gmail.com", "center");

echo $cabecera -> mostrarCabecera();

echo $piePagina -> mostrarPieDePagina();
?>