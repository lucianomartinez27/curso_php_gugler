<?php
include_once('Alumno.php');
include_once('Asignatura.php');
include_once('Comision.php');

class Index {

    public function ejecutar() {
        $alumno = new Alumno('0', 'Martinez', 'Luciano', '38262759', 'DNI', 'regular');
        $alumnos = array();

        $alumnos[] = $alumno;

        $comision = new Comision('0', 'Oro Verde', 'jueves', '8hs', '12hs', 2,  $alumnos);
        $asignatura = new Asignatura('0', 'Programación Objetos', 'sin observaciones', 'A');
        
        $comision -> setCupo(10);
        var_dump($asignatura);
        echo $asignatura;

    }
}


$index = new Index();
$index -> ejecutar();
?>