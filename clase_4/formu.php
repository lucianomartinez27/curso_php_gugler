<?php

/*Realice una página Web que contenga un formulario para cargar comentarios de una
página Web, los campos a utilizar son los siguientes:
Nombre
Correo electrónico
Página Web
Comentario
Luego cree un script PHP que permita obtener los datos del formulario por método POST y
muestre los mismos por pantalla.*/


foreach ($_POST as $dato => $valor){
    echo $dato.": ".$valor."<br>";
}

?>

