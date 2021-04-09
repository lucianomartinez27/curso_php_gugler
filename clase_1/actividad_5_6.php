<?php
$numero = 0; //  variable int

$numeroDecimal = 1.5; // variable float

$texto = 'Hola Mundo!'; // variable string

$verdadero = true; // variable boolean


// usamos echo para mostrar el valor de las variables
echo '<b>PARTE 1:</b><br>'.$numero.'<br>', $numeroDecimal.'<br>', $texto.'<br>';
echo $verdadero ? 'true' : 'false';
echo '<br>';


echo '<b>PARTE 2:</b><br>';
// aquí comprobamos que cada variable sea del tipo que declara en su nombre
if(is_int($numero)){
    echo $numero.'<br>';
}

if(is_float($numeroDecimal)){
    echo $numeroDecimal.'<br>';
}

if(is_string($texto)){
    echo $texto.'<br>';
}

if(is_bool($verdadero)){
    echo $verdadero ? 'true' : 'false', '<br>';
}

?>