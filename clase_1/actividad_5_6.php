<?php
$numero = 0;

$numeroDecimal = 1.5;

$texto = 'Hola Mundo!';


$verdadero = true ? 'true' : 'false';

echo '<b>PARTE 1:</b><br>'.$numero.'<br>', $numeroDecimal.'<br>', $texto.'<br>', $verdadero.'<br>';


echo '<b>PARTE 2:</b><br>';

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
    echo $verdadero.'<br>';
}
else{
    echo var_dump($verdadero);
}


?>