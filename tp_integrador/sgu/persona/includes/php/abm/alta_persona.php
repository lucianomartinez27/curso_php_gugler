<?php

include_once('../../../../includes/php/conexion.php');

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
    <br>
    <div class="col">
        <div class="row is-center">
            <div class="card">
                <div class="col is-center">
                    <p class="material-icons" style="font-size: 150px;">person</p>
                </div>
                <?php
                if ($asistenteDB->agregarPersona(
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
                )){
                echo "<p>Persona agregada correctamente</p>";
                }else{
                    echo "<p>Hubo un problema al agregar la persona, por favor inténtelo de nuevo.</p>";
                }

                ?>
            </div>
        </div>
        <br>
        <div class="row is-center">
            <a class="is-center button" href="../../../acciones/agregar_persona.php">Volver</a>
        </div>
    </div>
    <?php
    include_once("../../../../includes/footer.php")
    ?>
</body>

</html>

<?php

$asistenteDB -> desconectarDB();
?>