<?php
/*
7) – Crear otra taba nueva en la base de datos phpn1_db_clase7 con el nombre persona
que posea los siguientes campos:
• id_persona int NOT NULL AUTO_INCREMENT PRIMARY KEY
• id_tipo_documento int NOT NULL
• apellidos varchar(30) NOT NULL
• nombres varchar(50) NOT NULL
• correo_electronico varchar(150) NOT NULL
8) – Crear un índice para el campo id_tipo_documento de la tabla persona de la base de
datos phpn1_db_clase7 con el nombre idx_personas_1.
9) – Alterar la estructura de la tabla persona de la base de datos phpn1_db_clase7 con la
siguiente sentencia SQL:
ALTER TABLE persona ADD CONSTRAINT fk_id_tipo_documento FOREIGN KEY
(id_tipo_documento) REFERENCES tipo_documento (id_tipo_documento);*/

ini_set('display_errors', 1);

$dsn = 'mysql:dbname=phpn1_db_clase7;host=127.0.0.1;port=3306';

$db = new PDO($dsn, 'root');
$stmt =  $db -> exec('CREATE TABLE persona (id_persona INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_tipo_documento int NOT NULL, apellidos VARCHAR(30) NOT NULL,
nombres VARCHAR(50) NOT NULL, correo_electronico VARCHAR(150) NOT NULL);');

$db -> exec('CREATE INDEX idx_personas_1 ON persona (id_tipo_documento);');

$stmt = $db -> exec('ALTER TABLE persona ADD CONSTRAINT fk_id_tipo_documento FOREIGN KEY
(id_tipo_documento) REFERENCES tipo_documento (id_tipo_documento)');

if (!$stmt) {
    echo "Error al intentar conectar con la base de datos.";
    echo "<br/>C&oacute;digo: ". $db->errorCode();
    echo "<br/>Mensaje del error: ". $db->errorInfo()[2];
}

?>