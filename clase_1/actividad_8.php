<?php
$numeroMayor = 100;

$numeroMenor = 50;
// una comparación de igualdad, de desigualdad (distinto

if ($numeroMayor == 100 & $numeroMenor != 400){
    echo "$numeroMayor es igual a 100 y $numeroMenor es distinto de 400";
}
echo "<br>";
// una comparación de menor, una de mayor, 
if ($numeroMayor < $numeroMenor){
    echo "$numeroMayor es menor que $numeroMenor";
}else if($numeroMayor > $numeroMenor){
    echo "$numeroMenor es menor que $numeroMayor";
}else {
    echo "Cosa e' mandinga";
}
echo "<br>";

// una comparación de menor igual y mayor igual

if ($numeroMayor >= 100 && $numeroMenor <= 60){
    echo "$numeroMayor es mayor o igual a 100 y $numeroMenor es menor o igual a 60";
}



?>