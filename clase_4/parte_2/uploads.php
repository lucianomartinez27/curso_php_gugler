<?php

ini_set("display_errors", 1);
/*– Escriba un nuevo script PHP para subir un archivo al servidor y dentro del mismo
script mostrar la información del mismo después de subirlo.*/

if (isset($_POST['bt_enviar'])){

foreach ($_FILES['archivo'] as $dato => $valor){
    echo $dato.": ".$valor."<br>";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 4 - Parte 2</title>
</head>
<body>
    <form action="uploads.php"  enctype="multipart/form-data" method="post">
        Añade el archivo<br>
        <input type="file" name="archivo" id="">
        <input type="submit" name="bt_enviar" value="Enviar">
    </form>
</body>
</html>