<?php
include_once('./includes/php/generadorHTMLPersonas.php');
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

    echo new H([new Texto('Listado de Personas:')], 2);
    
    echo new Fila([
        new ColumnaExpandida([
            new Fila([
                new Columna([new Negrita([new Texto("Nombre")])]),
                new Columna([new Negrita([new Texto("Apellido")])]),
                new Columna([new Negrita([new Texto("Sexo")])]),
                new Columna([new Negrita([new Texto("Documento")])]),
                new Columna([new Negrita([new Texto("Email")])]),
            ])], 10),
            //Esta columna es usada para ajustar el margen
        new Columna([])]);
         $generadorHTMLPersonas -> generarListaDePersonas();

         echo new Fila([new Boton('../aplicaciones/administrador.php', 'Volver'),
                        new Boton('../persona/acciones/agregar_persona.php', 'Agregar persona'),]);


    include_once("../includes/footer.php");
    echo new MiFooter; 
    ?>
</body>

</html>