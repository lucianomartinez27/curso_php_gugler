<?php
include_once('../includes/php/generadorHTMLUsuarios.php');
include_once('../../includes/mensaje_abm.php');
include_once('../../includes/footer.php');

$idUsuario = $_GET['id'];
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
    <title>Borrar Usuario</title>
</head>

<body>
    <?php
    include_once("../../includes/header.php");
    include_once("../../includes/cabecera_usuario.php");
    echo  new Centrado([
        new Fila([
            new Columna([new MensajeAbm(
                new Columna([
                    new Fila([
                        new Negrita([new Texto('Estado Actual:')])
                    ]),
                    new Fila($generadorHTMLUsuarios->generarTarjetaDeIdentificacionDeUsuario($_GET['id']))
                ]),
                '../listado_usuarios.php'
            )]),
            new Centrado([new Columna([new Texto('¿Está seguro de que desea borrar el usuario?'),
            new Centrado([new Fila([new Boton("../includes/php/abm/baja_usuario.php?id=". $idUsuario, 'Borrar')])])])])
        ])
    ]);
    echo new MiFooter;
    ?>
   
</body>

</html>