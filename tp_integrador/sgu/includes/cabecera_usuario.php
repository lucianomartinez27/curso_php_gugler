<!-- Este trozo de html representa las opciones debajo del header, que muestra el
nombre de usuario y las opciones para ir al inicio o desloguearse -->
<?php
include_once 'GeneradorHTML.php';


$columna_inicio = new Columna([
    new Fila([new Link("../login/login.php", 'Inicio')]),
    new Fila([new Link("../login/login.php", 'Salir')])
]);

$columna_inicio->agregar_clase('is-marginless');

echo new Tarjeta([new Fila([
    new Columna([
        new Fila([new Tag([
            new Parrafo([new Texto('Usuario: NombreUsuario')]),
        ])]),
    ]),
    new ColumnaExpandida([], 10), $columna_inicio
])]);
//Ahora

?>


<!--
Antes

<div class="card is-marginless is-paddingless">
<div class="row">
    <div class="col-11">
        <div class="tag">
            Usuario: NombreUsuario
        </div>
    </div>
    <div class="col is-marginless">
        <div class="row">
            <a href="../login/login.php">Inicio </a>
        </div>
        <div class="row">
            <a class="text-error" href="../login/login.php">Salir</a>
        </div>
    </div>
</div>
</div>-->