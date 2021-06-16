
<?php
include_once('../includes/php/generadorHTMLUsuarios.php');
include_once("../../includes/footer.php")

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../../css/styles.css">
    <!-- Aquí importo un framework de css muy sencillo -->
    <link rel="stylesheet" href="https://unpkg.com/chota">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar usuario</title>
</head>

<body>
    <?php
    include_once("../../includes/header.php");

    echo new Division([
        new Fieldset([
            new Legend('Agregar usuario'),
            new Form([
                new Label('person', 'Identificación de persona'),new Select('person', $generadorHTMLUsuarios -> generarOpcionesDeSeleccionDePersonas()),
                new Label('type_user', 'Tipo usuario'), new Select('type_user',$generadorHTMLUsuarios -> generarOpcionesDeTipoDeUsuario() ),
                new Label('user', 'Nombre de usuario'), new InputText('user'),
                new Label('password', 'Clave'), new InputPassword('password', 'password'),
                new Label('enabled', 'Habilitado:'), new SaltoLinea,
                new Texto('SI: '),new InputRadio('S', 'enabled'),new Texto('NO: '), new InputRadio('N', 'enabled'), new SaltoLinea,
                new Input('', '', 'reset', 'Limpiar'),
                new Input('','', 'submit', 'Agregar')   ],
                
                '../includes/php/abm/alta_usuario.php' )])]);
    echo new Centrado([new Boton("../../aplicaciones/administrador.php", 'Volver')])
    ?>

    <?php
    ?>
</body>

</html>

