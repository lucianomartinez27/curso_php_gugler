<?php

$valor = 1;

// el ciclo while se ejecuta mientras la condición sea verdadera
while ($valor <= 100){
    echo "El doble de $valor es: ";
    echo $valor * 2; // mostramos en pantalla el doble del valor de la variable
    echo "<br>";
    // usamos el operador de incremento para sumar uno a la variable
    $valor++; // si no se hiciese el bucle sería infinito
}


?>