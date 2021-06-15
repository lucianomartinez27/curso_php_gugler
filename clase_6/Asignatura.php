<?php

class Asignatura {
    private $_codigo;
    private $_nombre;
    private $_observaciones;
    private $_comisiones = array();

    public function __construct($codigo, $nombre, $observaciones)
    {
        $this -> _codigo = $codigo;
        $this -> _nombre = $nombre;
        $this -> _observaciones = $observaciones;
    }

    public function setCodigo($nuevoCodigo){
        $this -> _codigo = $nuevoCodigo;
    }

    public function getCodigo() {
        return $this -> _codigo;
    }

    public function setNombre($nuevoNombre){
        $this -> _nombre = $nuevoNombre;
    }

    public function getNombre() {
        return $this -> _nombre;
    }

    public function setObservaciones($nuevasObservacioes){
        $this -> _observaciones = $nuevasObservacioes;
    }
    public function getObservaciones(){
        return $this -> _observaciones;
    }
    public function setComisiones($nuevasComisiones){
        $this -> _comisiones = $nuevasComisiones;
    }
    public function getComisiones(){
        return $this -> _comisiones;
    }

    public function __toString()
    {
        return 'Asignatura: '.$this -> _nombre;
    }
}

?>