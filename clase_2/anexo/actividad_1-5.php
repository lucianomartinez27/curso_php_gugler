<?php 

/*Utilizar y manejar cadenas en PHP
1) – Escriba un script PHP que almacene en la variable $subcadena1 el siguiente texto:
Php es un lenguaje de script embebido basado en el motor de Zend, en una segunda variable de
nombre $subcadena2 el siguiente texto: Se utiliza principalmente para desarrollar contenido Html
dinámico, aunque puede usarse para generar documentos Xml (entre otros) también. Luego
concatene las dos subcadenas en una variable de nombre $cadena y muestre por pantalla la
misma.*/
$subcadena1 = "Php es un lenguaje de script embebido basado en el motor de Zend. ";

$subcadena2 = "Se utiliza principalmente para desarrollar contenido Html dinámico, aunque puede usarse para generar documentos Xml (entre otros)";

$cadena = $subcadena1.$subcadena2;

echo $cadena;

/*
2) – Edite el script del ejercicio anterior para buscar y reemplazar la cadena “Php” por la
nueva cadena “PHP”.
*/
$cadena = str_replace("Php", "PHP", $cadena);

echo "<br>".$cadena;
/*
3) – Edite el script del ejercicio anterior p/ara buscar y reemplazar la cadena “Html” por la
nueva cadena “HTML”.*/

$cadena = str_replace("Html", "HTML", $cadena);

echo "<br>".$cadena;


/*4) – Edite el script del ejercicio anterior para buscar y reemplazar la cadena “Xml” por la
nueva cadena “XML”.*/

$cadena = str_replace("Xml", "XML", $cadena);

echo "<br>".$cadena."<br>";

/*5) – Edite el script del ejercicio anterior para mostrar el largo de las subcadenas iniciales
($subcadenas1 y $subcadenas2) y de la cadena que resultante de concatenar las anteriores
($cadena).*/

echo "largo sub-cadena 1: ";
echo strlen($subcadena1);
echo "<br>largo sub-cadena 2: ";
echo strlen($subcadena2);
echo "<br>largo de cadena: " ;
echo strlen($cadena);

?>