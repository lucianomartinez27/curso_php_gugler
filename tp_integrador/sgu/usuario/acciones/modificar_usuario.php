<?php
include_once('../includes/php/generadorHTMLUsuarios.php');
include_once('../../includes/mensaje_abm.php');

// verificamos que se haya pasado un id por GET, sino redirigimos
if (!isset($_GET['id'])) {
    header('Location: ./listado_usuarios.php' . $idUsuario);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../../css/styles.css">
    <!-- Aquí importo un framework de css muy sencillo -->
    <link rel="stylesheet" href="https://unpkg.com/chota">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar usuario</title>
</head>

<body>
    <?php
    include_once("../../includes/header.php");
    $tarjeta = new Columna([
        new Fila([
            new Negrita([new Texto('Estado Actual:')])
        ]),
        new Fila($generadorHTMLUsuarios->generarTarjetaDeIdentificacionDeUsuario($_GET['id']))
    ]);

    $form =
        [
            new Label('person', 'Identificación de persona'), new Select('person', $generadorHTMLUsuarios->generarOpcionesDeSeleccionDePersonas()),
            new Label('type_user', 'Tipo usuario'), new Select('type_user', $generadorHTMLUsuarios->generarOpcionesDeTipoDeUsuario()),
            new Texto('HABILITADO: '), new Texto('SI: '), new InputRadio('S', 'enabled'), new Texto('NO: '), new InputRadio('N', 'enabled'), new SaltoLinea,
            new Input('', '', 'reset', 'Limpiar'),
            new Input('', '', 'submit', 'Agregar')
        ];

    echo new Division([
        new Fila([
            new Columna([
                new MensajeAbm($tarjeta, "../listado_usuarios.php")
            ]),
            new Columna([new Fieldset([
                new Legend('Modificar persona'),
                new Form($form, "../includes/php/abm/modificacion_usuario.php?id=" . $_GET['id'])
            ])])
        ])
    ]);

    ?>

    <?php
    include_once("../../includes/footer.php");
    echo new MiFooter;
    ?>
</body>

</html>