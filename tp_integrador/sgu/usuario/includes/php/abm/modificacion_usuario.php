<?php
include_once('../../../../includes/php/conexion.php');
include_once('../../../../includes/mensaje_abm.php');


$idPersona = $_POST['person'];
$idTipoDeUsuario = $_POST['type_user'];
$habilitado = $_POST['enabled'];
$idUsuario = $_GET['id'];

if (!isset($_GET['id'])) {
    header('Location: ../../../listar_usuarios.php' . $idUsuario);
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

    <title>Modificar usuario</title>
</head>

<body>
    <?php
    include_once('../../../../includes/header.php');
    include_once('../../../../includes/cabecera_usuario.php');
    $mensaje = $asistenteDB->actualizarUsuario($idUsuario, $idPersona, $idTipoDeUsuario, $habilitado) ?
        new Texto("Usuario modificado correctamente") :
        new Texto("Hubo un problema al modificar el usuario. Por favor, intentelo nuevamente.");
    echo new MensajeAbm($mensaje, '../../../listado_usuarios.php');
    $asistenteDB->desconectarDB();

    ?>
</body>