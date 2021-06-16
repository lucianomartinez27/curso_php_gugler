<?php
include_once('../includes/php/generadorHTMLUsuarios.php');
include_once('../../includes/mensaje_abm.php');

include_once('../../includes/footer.php');

// redirigimos en caso de que no se especifique un id
if (!isset($_GET['id'])){
    header('Location: ./listado_usuarios.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/chota">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Ver usuario</title>
</head>

<body>
    <?php
    include_once('../../includes/header.php');
    include_once('../../includes/cabecera_usuario.php');
    $tarjeta = $generadorHTMLUsuarios -> generarTarjetaDeIdentificacionDeUsuario($_GET['id']);
    echo new MensajeAbm(new Division($tarjeta), "../listado_usuarios.php");
    echo new MiFooter;

    ?>
    </div>
</body>

</html>