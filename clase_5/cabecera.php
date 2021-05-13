<?php

/*
Confeccionar una clase CabeceraPagina (CabeceraPagina.php) que permita mostrar
un título, indicarle si queremos que aparezca centrada, a derecha o izquierda. Utilizar un
constructor para inicializar los dos atributos.
*/

class CabeceraPagina {

    private $titulo;
    private $alineacion;

    private function __construct($nuevoTitulo, $nuevaAlineacion){
        $titulo = $nuevoTitulo;
        $alineacion = $nuevaAlineacion;
        
    }
}

?>