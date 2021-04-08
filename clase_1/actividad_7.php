<?php

$primer_numero = 100;

$segundo_numero = 25;


// SUMA

$resultado_suma = $primer_numero+$segundo_numero;
echo '<ul>';
echo "<li>Suma de $primer_numero + $segundo_numero es igual a: $resultado_suma</li>";

// RESTA

$resultado_resta = $primer_numero-$segundo_numero;

echo "<li>Resta de $primer_numero - $segundo_numero es igual a: $resultado_resta</li>";

// MULTIPLICACION

$resultado_multiplicar = $primer_numero*$segundo_numero;

echo "<li>Multiplicación de $primer_numero * $segundo_numero es igual a: $resultado_multiplicar</li>";

// DIVISION

$resultado_dividir = $primer_numero/$segundo_numero;

echo "<li>División de $primer_numero / $segundo_numero es igual a: $resultado_dividir</li>";

// RESTO DE LA DIVISION

$resultado_resto = $primer_numero%$segundo_numero;

echo "<li>Resto de la división de $primer_numero % $segundo_numero es igual a: $resultado_resto</li>";

echo '</ul>'

?>