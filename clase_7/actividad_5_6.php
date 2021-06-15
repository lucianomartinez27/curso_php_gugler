<?php
/*
5) – Crear una base de datos nueva con el nombre phpn1_db_clase7. Utilice la sentencia
CREATE TABLE en la declaración de la consulta que se ejecutará desde el método exec() de la
clase PDO.

6) – Crear una taba nueva en la base de datos phpn1_db_clase7 con el nombre
tipo_documento con los siguientes campos:
• id_tipo_documento INT NOT NULL AUTO_INCREMENT PRIMARY KEY
• descripcion VARCHAR(30) NOT NULL
observacion VARCHAR(50) NOT NULL
7) – Crear otra taba nueva en la base de datos phpn1_db_clase7 con el nombre persona
que posea los siguientes campos:
• id_persona int NOT NULL AUTO_INCREMENT PRIMARY KEY
• id_tipo_documento int NOT NULL
• apellidos varchar(30) NOT NULL
• nombres varchar(50) NOT NULL
• correo_electronico varchar(150) NOT NULL
 */
ini_set('display_errors', 1);

$dsn = 'mysql:host=127.0.0.1;port=3306';

$db = new PDO($dsn, 'root');

$db -> exec('CREATE DATABASE phpn1_db_clase7;');
$db ->exec('USE phpn1_db_clase7;');
$stmt = $db -> exec('CREATE TABLE tipo_documento (id_tipo_documento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
descripcion VARCHAR(30) NOT NULL, observaciones VARCHAR(50) NOT NULL);');




if ($db -> errorCode()) {
    echo "Error al intentar conectar con la base de datos.";
    echo "<br/>C&oacute;digo: ". $db->errorCode();
    echo "<br/>Mensaje del error: ". $db->errorInfo()[2];
}
?>