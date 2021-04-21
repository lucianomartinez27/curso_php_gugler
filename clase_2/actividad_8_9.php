<?php

/*8) - Escriba un script PHP que defina cuatro funciones que realicen las operaciones
matemáticas de suma, resta, multiplicación y división. Las funciones deberán esperar dos
parámetros pasados por valor y devolver el resultado de la operación. Dentro del mismo script
deberán utilizar cada una de las funciones y mostrar el resultado por pantalla.*/

function suma($un_numero, $otro_numero){
    return $un_numero + $otro_numero;
}

function resta($minuendo, $sustraendo){
    return $minuendo - $sustraendo;
}

function multiplicacion($multiplicando, $multiiplicador){
    return $multiplicando * $multiiplicador;
}

function division($dividendo, $divisor){
    return $dividendo / $divisor;
}

echo "2 + 2 = ".suma(2, 2);
echo '<br>';
echo "10 - 3 = ".resta(10, 3);
echo '<br>';
echo "5 * 12 = ".multiplicacion(5, 12);
echo '<br>';
echo "100 / 3 = ".division(100, 3);



/*9) - Editar el script PHP del punto anterior y agregue una función que permita incrementar
el valor de una variable pasada como parámetro por referencia. Dentro del mismo script deberá 
utilizar la función y mostrar el resultado por pantalla.*/


$valor= 10;
echo "<br>'Valor' antes de incrementarlo: ".$valor;

function incrementar_valor(&$valor_a_incrementar){
    $valor_a_incrementar++;
}

incrementar_valor($valor);
echo "<br>'Valor' después de incrementarlo: ".$valor;



?>