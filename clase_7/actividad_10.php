<?php
/*
10) – Realice un script que permita insertar datos en la tabla tipo_documento de la base
de datos phpn1_db_clase7. Las filas a insertar definen los tipos de documentos de una persona
como por ejemplo: DNI, LC, LE y Pasaporte.
11) – Modifique el script del punto anterior para insertar sus datos personales en la tabla
persona de la base de datos phpn1_db_clase7.
*/

ini_set('display_errors', 1);

$dsn = 'mysql:dbname=phpn1_db_clase7;host=127.0.0.1;port=3306';

$db = new PDO($dsn, 'root');
$stmt = $db -> exec('INSERT INTO tipo_documento (descripcion, observaciones)
                        VALUES ("DNI", "Documento Nacional de Identidad");');
$db -> exec('INSERT INTO tipo_documento (descripcion, observaciones)
 VALUES ("LE", "Libreta de Enrolamiento");');
 $db -> exec('INSERT INTO tipo_documento (descripcion, observaciones)
 VALUES ("LC", "Libreta Cívica");');

$db -> exec("INSERT INTO persona (id_tipo_documento, apellidos, nombres , correo_electronico) VALUES (1, 'Luciano', 'Martinez', 'lucianomartinez27@gmail.com');")
?>