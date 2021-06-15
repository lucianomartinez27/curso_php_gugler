<?php

/*Escriba un nuevo script PHP que permita crear una sesión PHP y guarde en ella la
siguiente información en el arreglo $_SESSION:
color_fondo
color_fuente
titulo_pagina
titulo_cuerpo_pagina
texto_pagina
Generar dos enlaces uno que permita abrir otra página que reanude la sesión y otro que
destruya la misma. La primer página deberá utilizar los valores de las variables para generar el
HTML.*/

session_start();


$_SESSION['color_fondo'] = 'orange';
$_SESSION['color_fuente'] = 'blue';
$_SESSION['titulo_pagina'] = 'Sesiones';
$_SESSION['titulo_cuerpo_pagina'] = 'Práctica de Sesiones';
$_SESSION['texto_pagina'] = 'En esta clase estamos practicando con las sesiones de php.';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['titulo_pagina']; ?></title>

</head>

<body bgcolor=<?php echo $_SESSION['color_fondo'] ?>>
    <h1 style="color:<?php echo $_SESSION['color_fuente'] ?>"> <?php echo $_SESSION['titulo_cuerpo_pagina'] ?></h1>
    <p style="color:<?php echo $_SESSION['color_fuente'] ?>"><?php echo $_SESSION['texto_pagina'] ?></p>


    <a href="continuar_sesion.php">Continuar sesión</a>
    <a href="destruir_sesion.php">Destruir sesión</a>

</body>

</html>