<?php
class Facultad
{
    private $_nombre;
    private $_alumnos;
    public function __construct($nombre)
    {
    $this->_nombre = $nombre;
    }
    
    public function agregarAlumno(Persona $persona)
    {
    $this->_alumnos[] = $persona;
    }
}
