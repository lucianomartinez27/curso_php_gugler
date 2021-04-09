<?php

// Disclaimer: este script no tiene en cuenta que hay meses que comparten estación.
$mes = 1;

// recorremos todos los meses posibles (de 1 al 12)
for ($mes; $mes <=12; $mes++){
    echo "Mes del año: $mes: <br>";
    if ($mes >=1 & $mes < 4){ // el mes debe estar entre enero y marzo (1 a 3)
        echo "La estación es verano";
        echo "<br>";
    }
    
    else if ($mes >=4 & $mes < 7){ // el mes debe estar entre abril y junio (4 a 6)
        echo "La estación es otoño";
        echo "<br>";
    }
    
    else if ($mes >=7 & $mes < 10){ // el mes debe estar entre julio y septiembre (de 7 a 9)
        echo "La estación es invierno";
        echo "<br>";
    }
    
    // aquí podría tomar cualquier numero mayor a 12 también, pero al bucle solo recorrer de 1 a 12 no sucederá
    
    else{ // el mes debe estar entre octubre y diciembre (10 a 12)
        echo "La estación es primavera";
        echo "<br>";
    }
    echo "<br>";
    
    
}





?>