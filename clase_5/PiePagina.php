<?php
/*
4) – Confeccionar una clase PiePagina (PiePagina.php) que permite mostrar el/los años, el
autor y datos de contacto (dirección Web y correo electrónico). Indicarle si queremos que
aparezca centrado, a derecha o izquierda. Utilizar un constructor para inicializar los dos atributos.
*/
ini_set("display_errors", 1);

class PiePagina {
    private $_anioDesde;
    private $_anioHasta;
    private $_autor;
    private $_web;
    private $_email;
    private $_alineacion;

    public function __construct($anioDesde, $anioHasta, $autor, $web, $email, $alinacion)
    {
        $this -> _anioDesde = $anioDesde;
        $this -> _anioHasta = $anioHasta;
        $this -> _autor = $autor;
        $this -> _web = $web;
        $this -> _email = $email;
        $this -> _alineacion = $alinacion;
    }

    public function mostrarPieDePagina(){
        return "<footer><p align='".$this->_alineacion."'>".$this->_anioDesde.
        " - ".$this->_anioHasta." ".$this->_autor."<br/>".$this->_web." / ".$this->_email."</p></footer>";
    }

    public function __toString()
    {
        return $this -> _autor." - ".$this -> _email;
    }

}

?>

