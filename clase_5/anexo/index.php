<?php

require 'Mate.php';


$miMate = new Mate(3);
echo $miMate;
echo "<br>";


echo "* Bebo el mate sin cebar antes: <br>";

$miMate -> beber();
echo "<br>";

$miMate -> cebar();
echo "* Bebo el mate despues de cebarlo.<br>";
$miMate -> beber();
echo "<br>";
$miMate -> cebar();
echo "* Cebo un mate ya lleno: <br>";
$miMate -> cebar();
echo "<br>";
echo "* Sigo tomando <br>";
$miMate -> beber();
$miMate -> cebar();
$miMate -> beber();
$miMate -> cebar();
echo "<br>";

echo "* Tomo de un mate ya lavado: <br>";
$miMate -> beber();
echo $miMate;
echo "<br>";
echo "*Arreglo el mate y sigo tomando: ";
$miMate -> arreglar(3);
$miMate -> cebar();
$miMate -> beber();
$miMate -> cebar();
$miMate -> beber();
$miMate -> cebar();



?>