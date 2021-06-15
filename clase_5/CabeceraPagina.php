<?php

/*
Confeccionar una clase CabeceraPagina (CabeceraPagina.php) que permita mostrar
un título, indicarle si queremos que aparezca centrada, a derecha o izquierda. Utilizar un
constructor para inicializar los dos atributos.
*/
ini_set("display_errors", 1);

class CabeceraPagina {

    private $_titulo;
    private $_alineacion;

    public function __construct($titulo, $alineacion){
        $this -> _titulo = $titulo;
        $this -> _alineacion = $alineacion;
        
    }

    public function mostrarCabecera(){
         return  "<h1 align='".$this->_alineacion."'>".$this->_titulo."</h1>";
    }

    public function __toString()
    {
        return $this -> _titulo;
    }
    }

    

?>