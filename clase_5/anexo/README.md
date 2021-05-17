## Definir y utilizar clases en PHP
1. - Modelar y codificar una clase Mate que describa el funcionamiento de la conocida
bebida tradicional argentina. La clase debe contener los siguientes atributos:
• Un atributo para la cantidad de cebadas restantes hasta que se lava el mate (representada
por un número entero).
• Un atributo para el estado (representado por una cadena de texto: lleno o vacío).
El constructor (__construct()) debe recibir como parámetro $cebadas, la cantidad máxima
de cebadas en base a la cantidad de yerba vertida en el recipiente.
Guardar el archivo con el nombre Mate.php.
2. - Escribir un nuevo método denominado cebar (que llena el mate con agua) en el script
Mate.php. Si se intenta cebar con el mate lleno, se debe emitir un aviso por pantalla con el
mensaje: Mate lleno. ¡Cuidado! ¡Te quemaste!.
3. - Modificar el script Mate.php del primer ejercicio para agregar un nuevo método beber,
que vacía el mate y le resta una cebada disponible. Si se intenta beber un mate vacío, se debe
emitir un aviso por pantalla que el mate está vacío.
4. - Agregar a la clase Mate un método especial, llamado __toString() que debe devolver
una cadena de caracteres con un mensaje que indique si el mate se encuentra en funcionamiento
(con cebadas disponibles) o fuera de servicio (cebadas disponibles en cero).
5. - Escribir el código necesario para contemplar la siguiente situación: Es posible seguir
cebando y bebiendo el mate aunque no haya cebadas disponibles. En ese caso la cantidad de
cebadas restantes se mantendrá en 0, y cada vez que se intente beber se debe imprimir un
mensaje de aviso por pantalla de advertencia que el mate está lavado.
6. - Hacer un nuevo método denominado arreglar en el script Mate.php, que permitirá
arreglar el mate cambiando la yerba y que debe recibir por parámetro la cantidad de cebadas
adicionales según la cantidad de yerba reemplazada en el arreglo.
7. - Finalmente, se le solicita que haga uso y pruebas de la clase Mate. Por lo tanto,
deberá crear un nuevo script de nombre index.php que requiera el archivo Mate.php.