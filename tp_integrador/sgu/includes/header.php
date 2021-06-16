

<?php
include_once 'GeneradorHTML.php';
$tarjeta = new Tarjeta();
$tarjeta -> agregar_clase('bg-light');
$tarjeta -> agregar_hijo(new Header([new H([new Texto("Sistema de Gestión de Usuarios")], 2)]));
echo $tarjeta;
