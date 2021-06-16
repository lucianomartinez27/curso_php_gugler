<?php
include_once 'GeneradorHTML.php';

$footer = new Footer([new Parrafo([new Texto('Todos los derechos reservados')])]);
$footer -> agregar_clases(array('is-center', 'bg-light'));
$footer;

class MiFooter extends Footer {
    public function __construct()
    {
        parent::__construct();
        $this -> agregar_hijo(new Parrafo([new Texto('Todos los derechos reservados')]));
        $this -> agregar_clases(['is-center', 'bg-light']);
    }
}