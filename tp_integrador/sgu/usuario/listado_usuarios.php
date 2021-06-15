<?php
include_once('./includes/php/generadorHTMLUsuarios.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../css/styles.css">
    <!-- Aquí importo un framework de css muy sencillo -->
    <link rel="stylesheet" href="https://unpkg.com/chota">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar usuario</title>
</head>

<body>
    <?php
    include_once("../includes/header.php");
    include_once("../includes/cabecera_usuario.php")
    ?>
    <h1>Listado de Usuarios:</h1>
    <div class="row is-full-width">
        <div class="col-10">
            <div class="row">
                <div class="col"><b>Nombre de usuario</b></div>
                <div class="col"><b>Tipo de usuario</b></div>
                <div class="col"><b>Habilitado</b></div>
            </div>
        </div>
        <div class="col"></div>
    </div>
        <?php
         $generadorHTMLUsuarios -> generarListaDeUsuarios();
        ?>
    <div class="row">
        <a class=" is-center button" href="../aplicaciones/administrador.php">Volver</a>
        <a class=" is-center button" href="../usuario/acciones/agregar_usuario.php">Agregar usuario</a>
    </div>

    <?php
    include_once("../includes/footer.php")
    ?>
</body>

</html>