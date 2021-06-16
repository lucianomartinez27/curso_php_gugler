<?php

include_once('../../../../includes/php/conexion.php');
include_once '../../../../includes/mensaje_abm.php';
include_once("../../../../includes/footer.php");


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



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/chota">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Persona agregada</title>
</head>

<body>
    <?php
    include_once("../../../../includes/header.php");
    include_once("../../../../includes/cabecera_usuario.php")
    ?>
    <?php
    $mensaje = new Texto($asistenteDB->agregarPersona(
        $tipoDocumento,
        $numeroDocumento,
        $apellido,
        $nombres,
        $fechaNacimiento,
        $sexo,
        $movil,
        $telefono,
        $email,
        $domicilio,
        $provincia,
        $localidad,
        $pais
    ) ? "Persona agregada correctamente" : "Hubo un problema al agregar la persona, por favor inténtelo de nuevo.");

    echo new MensajeAbm($mensaje,'../../../acciones/agregar_persona.php');
    echo new MiFooter;
    ?>
</body>

</html>

<?php

$asistenteDB->desconectarDB();
?>