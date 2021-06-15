<?php
/*4) – Crear otro script para establecer nuevos valores a los siguientes atributos de la
conexión a la base de datos:
• PDO::ATTR_ERRMODE (pasa del valor 0 a 1, recuerde utilizar constantes)
• PDO::ATTR_CASE (pasa del valor 0 a 2, recuerde utilizar constantes) */

ini_set('display_errors', 1);

$dsn = 'mysql:dbname=curso_php;host=127.0.0.1;port=3306';

$db = new PDO($dsn, 'root');
$db -> setAttribute(PDO::ATTR_ERRMODE, 1);
$db -> setAttribute(PDO::ATTR_CASE, 2);
?>