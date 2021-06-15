<?php
include_once('Mascota.php');

class Persona {

    private $_nombre;
    private $_mascota;
    private $_hermanos = array();


    public function tocar(Mascota $mascota, $lugar){
        $mascota -> tocar($lugar);
    }

    public function agregarHermano($hermano){
        $this -> _hermanos[] = $hermano;
    }

    public function __toString()
    {
        return "Alumno: ".$this -> _nombre;
    }
}