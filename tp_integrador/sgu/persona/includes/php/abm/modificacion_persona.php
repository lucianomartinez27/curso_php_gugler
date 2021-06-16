<?php

include_once('../../../../includes/php/conexion.php');
include_once '../../../../includes/mensaje_abm.php';

$tipoDocumento = trim($_POST['type_doc']);
$numeroDocumento = trim($_POST['document_number']);
$apellido = trim($_POST['lastname']);
$nombres = trim($_POST['firstname']);
$fechaNacimiento = trim($_POST['birth_date']);
$sexo = trim($_POST['gender']);
$telefono = trim($_POST['phone']);
$movil = trim($_POST['movil']);
$email = trim($_POST['email']);
$domicilio = trim($_POST['address']);
$localidad = trim($_POST['city']);
$provincia = trim($_POST['province']);
$pais = trim($_POST['country']);


if (!isset($_GET['id'])) {
    header('Location: ../../../listar_usuarios.php');
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

    <title>Modificar usuario</title>
</head>

<body>
    <?php
    include_once('../../../../includes/header.php');
    include_once('../../../../includes/cabecera_usuario.php');
    ?>
    <?php
    $mensaje = new Texto($asistenteDB->actualizarPersona(
        $idPersona,
        $nombres,
        $apellido,
        $tipoDocumento,
        $numeroDocumento,
        $fechaNacimiento,
        $sexo,
        $telefono,
        $movil,
        $email,
        $domicilio,
        $localidad,
        $provincia,
        $pais
    ) ?
        "Usuario modificado correctamente":
        "Hubo un problema al modificar el usuario. Por favor, intentelo nuevamente.");
    echo new MensajeAbm($mensaje, "../../../listado_personas.php")
    ?>


<?php

$asistenteDB->desconectarDB();
?>