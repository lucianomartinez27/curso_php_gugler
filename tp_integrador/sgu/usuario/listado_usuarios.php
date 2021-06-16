<?php
include_once('./includes/php/generadorHTMLUsuarios.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../css/styles.css">
    <!-- Aquí importo un framework de css muy sencillo -->
    <link rel="stylesheet" href="https://unpkg.com/chota">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar usuario</title>
</head>

<body>
    <?php
    include_once("../includes/header.php");
    include_once("../includes/cabecera_usuario.php");

    echo new H([new Texto('Listado de Usuarios')], 2);
    echo new Fila([
        new ColumnaExpandida([
            new Fila([
                new Columna([
                    new Negrita([new Texto('Nombre de usuario')])
                ]),
                new Columna([
                    new Negrita([new Texto('Tipo de usuario')])
                ]),
                new Columna([
                    new Negrita([new Texto('Habilitado')])
                ]),
            ])
        ], 10),
        // Columna utilizada para el margen
        new Columna([])
    ]);

    $generadorHTMLUsuarios->generarListaDeUsuarios();

    echo new Fila([
        new Boton('../aplicaciones/administrador.php', 'Volver'),
        new Boton('./acciones/agregar_usuario.php', 'Agregar usuario')
    ]);
 
    include_once("../includes/footer.php")
    ?>
</body>

</html>