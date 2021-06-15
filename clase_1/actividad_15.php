<?php


$valor = 0;

// en el ciclo do-while se ejecuta el código una vez, más allá de si se cumple la condición

do {
    $valor++; // si no se hiciese el bucle sería infinito
    echo "El doble de $valor es: ";
    echo $valor * 2; // mostramos en pantalla el doble del valor de la variable
    echo "<br>";
    // usamos el operador de incremento para sumar uno a la variable
    
}
while ($valor >= 1 & $valor < 100) // se comprueba si se cumple la condición

?>