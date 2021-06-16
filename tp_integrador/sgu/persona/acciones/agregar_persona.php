
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/chota">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar persona</title>
</head>

<body>
    <?php
    include_once("../../includes/footer.php");

    include_once("../../includes/header.php");
    $form = [new Label('type_doc', 'Tipo documento'),
    new Select('type_doc', [new Opcion('1', 'DNI'), new Opcion('2', 'LIBRETA CIVICA'), new Opcion('3', 'LIBRETA ENROLAMIENTO')]),
    new Label('document_number', 'Numero de documento'), new InputText('document_number'),
    new Label('lastname', 'Apellido:'), new InputText('lastname'),
    new Label('firstname', 'Nombre:'), new InputText('firstname'),
    new Label('firstname', 'Nombre:'), new InputText('firstname'),
    new Label('birth_date', 'Fecha de nacimiento:'), new InputFecha('birth_date'),
    new Label('gender', 'Sexo: '), new Texto('Masculino:'), new InputRadio('M', 'gender'),
     new Texto('Femenino:'), new InputRadio('F', 'gender'), new SaltoLinea(),
    new Label('phone', 'Telefono:'), new InputText('phone'),
    new Label('movil', 'Telefono móvil:'), new InputText('movil'),
    new Label('email', 'Correo electrónico:'), new InputText('email'),
    new Label('address', 'Domicilio:'), new InputText('address'),
    new Label('city', 'Localidad:'), new InputText('city'),
    new Label('province', 'Provincia:'), new InputText('province'),
    new Label('country', 'Pais:'), new InputText('country'),
    new Input('','', 'reset', 'Limpiar'),
    new Input('', '', 'submit','Agregar')];


    echo new Division([
        new Fila([
                new Columna([new Fieldset([new Legend('Agregar persona'),
                 new Form($form, "../includes/php/abm/alta_persona.php?id=")])])])]);
    $boton = new Boton('../listado_personas.php', 'Volver');
    echo $boton -> agregar_clase('is-center');
    echo new MiFooter;
    ?>



</body>


</html>