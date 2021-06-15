<?php

/*
8) – Escriba un nuevo script que permita quitar los espacios en blanco y caracteres
especiales de una cadena definida. La cadena debe contener el siguiente texto: “\n\t Cadena a
tratar con la función trim(). \0\n\r”. Antes de quitar los espacios y caracteres especiales obtenga y
muestre el largo de la cadena, luego de quitar los espacios vuelva a obtener y mostrar el largo de
la cadena. */


$cadena = "\n\t Cadena a tratar con la función trim(). \0\n\r";
echo $cadena;
echo "<br>Largo del texto antes de tratar: ".strlen($cadena);

$cadena = trim($cadena);
echo "<br>Largo del texto después de tratar: ".strlen($cadena);


