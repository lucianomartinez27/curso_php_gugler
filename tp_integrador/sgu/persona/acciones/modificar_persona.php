<?php
include_once('../includes/php/generadorHTMLPersonas.php');
include_once('../../includes/mensaje_abm.php');

// verificamos que se haya pasado un id por GET, sino redirigimos
if (!isset($_GET['id'])) {
    header('Location: ./listado_personas.php');
}
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Modificar usuario</title>
</head>

<body>
    <?php
    include_once("../../includes/header.php");
    $form = [new Label('type_doc', 'Tipo documento'),
    new Select('type_doc', [new Opcion('1', 'DNI'), new Opcion('2', 'LIBRETA CIVICA'), new Opcion('3', 'LIBRETA ENROLAMIENTO')]),
    new Label('document_number', 'Numero de documento'), new InputText('document_number'),
    new Label('lastname', 'Apellido:'), new InputText('lastname'),
    new Label('firstname', 'Nombre:'), new InputText('firstname'),
    new Label('firstname', 'Nombre:'), new InputText('firstname'),
    new Label('birth_date', 'Fecha de nacimiento:'), new InputFecha('birth_date'),
    new Label('gender', 'Sexo:'), new Texto('Masculino:'), new InputRadio('M', 'gender'),
     new Texto('Femenino:'), new InputRadio('F', 'gender'), new SaltoLinea(),
    new Label('phone', 'Telefono:'), new InputText('phone'),
    new Label('movil', 'Telefono móvil:'), new InputText('movil'),
    new Label('email', 'Correo electrónico:'), new InputText('email'),
    new Label('address', 'Domicilio:'), new InputText('address'),
    new Label('city', 'Localidad:'), new InputText('city'),
    new Label('province', 'Provincia:'), new InputText('province'),
    new Label('country', 'Pais:'), new InputText('country'),
    new Input('','', 'reset', 'Limpiar'),
    new Input('', '', 'submit','Modificar')];

    $tarjeta = new Columna([
        new Fila([
            new Negrita([new Texto('Estado Actual:')])]),
            new Fila($generadorHTMLPersonas->generarTarjetaDeIdentificacionDePersona($_GET['id']))
        ]);

    echo new Division([
        new Fila([
            new Columna([
                new MensajeAbm($tarjeta, "../listado_personas.php")]),
                new Columna([new Fieldset([new Legend('Modificar persona'),
                 new Form($form, "../includes/php/abm/modificacion_persona.php?id=".$_GET['id'])])])])]);
    $boton = new Boton('../listado_personas.php', 'Volver');
    echo $boton -> agregar_clase('is-center');
    ?>

    </div>
    <div class="bottom">
    <?php
include_once("../../includes/footer.php");
    $footer = new MiFooter;
    $footer -> agregar_atributo('style', 'position: static;');
    echo $footer;    ?>
    </div>
   
</body>

</html>