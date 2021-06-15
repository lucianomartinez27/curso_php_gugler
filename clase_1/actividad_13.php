<?php

$dia = 0;
for ($dia; $dia <=7; $dia++) {
    echo "Día de la semana $dia es: ";
    // switch lleva como argumento un valor a comparar
    switch($dia){
        case 0: // cada case es el valor con el que se comparará el argumento
            echo "Domingo"; // en caso de coincidir se ejecuta el código de dicho case
            break; // el break se utiliza para que no siga las comparaciones
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        default: // en caso de que el argumento no coincida en nungún "case" se ejecutará la cláusula default
            echo "Día incorrecto";
    }
    echo "<br>";
}
