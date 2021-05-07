<?php


/*- Edite el script PHP anterior pero recibiendo los datos por método POST y muestre los
mismos por pantalla.*/


foreach($_POST as $clave => $dato){
    echo $clave.": ".$dato."<br>";
}

?>