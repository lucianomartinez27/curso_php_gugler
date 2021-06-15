<?php
include_once('../../../../includes/php/conexion.php');

$idPersona = $_POST['person'];
$idTipoUsuario = $_POST['type_user'];
$nombreUsuario = $_POST['user'];
$password = $_POST['password'];
$habilitado = $_POST['enabled'];

$asistenteDB = new AsistenteSQL('sgu');


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
    <title>Crear usuario</title>
</head>

<body>
    <?php
    include_once('../../../../includes/header.php');
    include_once('../../../../includes/cabecera_usuario.php');
    ?>
    <br>
    <div class="col">
        <div class="row is-center">
            <div class="card">
                <div class="col is-center">
                    <p class="material-icons" style="font-size: 150px;">person</p>
                </div>
                <?php

                if (!$asistenteDB->agregarUsuario($idPersona, $idTipoUsuario, $nombreUsuario, $password, $habilitado)) {
                    echo 'Hubo un error con los datos, por favor inténtalo nuevamente';
                } else {
                    echo 'Todo salió bien. Usuario agregado correctamente.';
                }


                ?>
            </div>
        </div>
        <br>
        <div class="row is-center">
            <a class="is-center button" href="../../../listado_usuarios.php">Volver</a>
        </div>
    </div>
</body>

</html>