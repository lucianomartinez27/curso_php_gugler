<?php

include_once('../../../../includes/php/conexion.php');
include_once('../../../../includes/mensaje_abm.php');

$asistenteDB;
if (!isset($_GET['id'])) {
    header('Location: ../../../listado_personas.php');
} else {
    $idPersona = $_GET['id'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <!-- Aquí importo un framework de css muy sencillo -->
    <link rel="stylesheet" href="https://unpkg.com/chota">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Borrar usuario</title>
</head>

<body>
    <?php
    include_once('../../../../includes/header.php');
    include_once('../../../../includes/cabecera_usuario.php');

    $mensaje = $asistenteDB->borrarPersona($idPersona) ?
        new Texto('Usuario eliminado correctamente.')
        : new Centrado([
            new Texto('Hubo un error al eliminar la persona.'),
            new SaltoLinea(), new Texto('Posiblemente haya usuarios que dependan de ésta persona'),
            new SaltoLinea(), new Texto('Soluciónelo e inténtelo nuevamente.')
        ]);
    echo new MensajeAbm($mensaje, "../../../listado_personas.php")


    ?>

</body>

</html>

<?php
$asistenteDB->desconectarDB();
?>