<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/chota@latest">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    include_once("../includes/header.php");

    echo new Centrado([
        new Fieldset([
            new Legend('Ingrese sus datos'),
            new Form([
                new Parrafo([
                    new Label('user', 'Usuario')]),
                    new InputText('user', 'user'),
                new Parrafo([
                    new Label('password', 'Contraseña')]),
                    new InputPassword('password', 'password'),
                    new Padding(5),
                new InputBoton('Ingresar')

            ], '', 'POST')
        ], 'Ingrese sus datos')]);

    include_once("../includes/footer.php")
    ?>
</body>

</html>