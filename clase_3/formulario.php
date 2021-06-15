<?php


/*- 3) - Edite el script PHP del punto 2 y agregue una función que permita validar la fecha de
nacimiento. Comprobar que la cadena de fecha no supere la cantidad de 10 caracteres.
Comprobar que el ingreso de la fecha respete el formato dd/mm/aaaa.*/

function entre($valorMenor, $valorMayor, $valorAComparar){
    return $valorAComparar >= $valorMenor && $valorAComparar <= $valorMayor;
}

function tieneFormatoValido($fecha){
    $diaMesAño = explode('/', trim($fecha));
    if (sizeof($diaMesAño) != 3) {
        return false;
    }
    $dia = $diaMesAño[0];
    $mes = $diaMesAño[1];
    $anio = $diaMesAño[2];
    return entre(1, 31, $dia) && entre(1, 12, $mes) && entre(1900, 2020, $anio);
}
function validarFecha($fecha){
    return strlen($fecha) <= 10 && tieneFormatoValido($fecha);

}

foreach($_POST as $clave => $dato){
    echo $clave.": ".$dato."<br>";
}
?>