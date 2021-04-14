<?php

$verdadero = true;

$falso = false;

// el operador & (and) necesita que ambos booleanos sean true

if ($verdadero & $verdadero){
    echo "<b>OPERADOR AND</b><br>";
    echo "true & true == true";
    echo "<br>";
    echo "(true & false == false) & (false & true == false)";
    
}


echo "<br>";

// el operador || (or) necesita que al menos uno de los booleanos sea true
if ($verdadero || $falso & ($verdadero || $verdadero)) {
    echo "<b>OPERADOR OR</b><br>";
    echo "(true || false == true) & (true || true == true)";
    echo "<br>";
    echo "false || false == false";
}
echo "<br>";

// el operador ! (not) retorna la negación del booleano

if (!($verdadero & $falso)){
    echo "<b>OPERADOR NOT</b><br>";
    echo "!true == false & !false == true";
}
echo "<br>";


// el operador xor necesita que sólo uno de los operadores sea true

if ($verdadero xor $falso){
    echo "<b>OPERADOR XOR</b><br>";
    echo "(true xor false == true) & (false xor true == true)";
    echo "<br>";
    echo "(false xor false == false) & (true xor true == false)";
}

?>