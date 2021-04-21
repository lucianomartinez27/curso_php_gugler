<?php
/*Realice un nuevo script que defina un arreglo asociativo de nombre $persona y al cual
debemos asignar los siguiente valores y mostrarlos en pantalla:
Clave: tipo_documento, Valor: DNI
Clave: numero_documento, Valor: 30.122.122
Clave: apellidos, Valor: Garcia
Clave: nombres, Valor: Juan
Clave: domicilio, Valor: San Martín 123
Clave: telefono, Valor: 4222324
Clave: edad, Valor: 25 */

$persona  = array('tipo_documento' => 'DNI', 'numero_documento' => '30.122.122', 'apellidos' => 'García',
'nombres' => 'Juan', 'domicilio' => 'San Martín 123', 'teléfono' => 4222324, 'edad' => '25');
print_r($persona);

?>