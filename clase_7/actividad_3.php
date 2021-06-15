<?php
/*
3) – Crear un script que realice una conexión a la base de datos y obtenga los valores de
los siguientes atributos de la conexión:
• PDO::ATTR_AUTOCOMMIT
• PDO::ATTR_CONNECTION_STATUS
• PDO::ATTR_DRIVER_NAME
• PDO::ATTR_ERRMODE
• PDO::ATTR_SERVER_INFO
• PDO::ATTR_SERVER_VERSION
*/

ini_set('display_errors', 1);

$dsn = 'mysql:dbname=curso_php;host=127.0.0.1;port=3306';

$db = new PDO($dsn, 'root');

echo $db -> getAttribute(PDO::ATTR_AUTOCOMMIT);
echo '<br>';
echo $db -> getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo '<br>';
echo $db -> getAttribute(PDO::ATTR_DRIVER_NAME);
echo '<br>';
echo $db -> getAttribute(PDO::ATTR_ERRMODE);
echo '<br>';
echo $db -> getAttribute(PDO::ATTR_SERVER_INFO);
echo '<br>';
echo $db -> getAttribute(PDO::ATTR_SERVER_VERSION);

?>