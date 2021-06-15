<?php
require_once 'Facultad.php';
require_once 'Mascota.php';
require_once 'Persona.php';
class Index
{
public function ejecutar()
{
$oPersona = new Persona('Garcia', 'Juan', 23);
$oPerro = new Mascota('Kirby', 'blanco, negro y marron');
echo $oPersona->tocar($oPerro, 'cabeza');
}
}
$oIndex = new Index();
$oIndex->ejecutar();

?>