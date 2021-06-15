# Utilizar los conceptos de programación Web y de base de datos
1. - Escriba un script PHP para definir una clase de nombre HolaMundo que implemente
un método de nombre saludar() para devuelva un string (Hola Mundo!) de saludo.
2. - Realice un script de nombre Persona.php que defina y use una clase (Persona) con
los siguientes atributos y métodos:
Atributos
(privado) tipoDocumento
(privado) numeroDocumento
(privado) apellidos
(privado) nombres
(privado) domicilio
(privado) telefono
(privado) telefonoTrabajo
(privado) telefonoMovil
(privado) correoElectronico
Métodos
(público) __construct()
(público) cambiarDomicilio()
(público) cambiarNumeroTelefono()
(público) cambiarNumeroTelefonoMovil()
(público) cambiarNumeroTelefonoTrabajo()
(público) cambiarCorreoElectronico()
Dentro del mismo script cree un objeto que use todos los métodos que se definieron.
3. - Confeccionar una clase CabeceraPagina (CabeceraPagina.php) que permita mostrar
un título, indicarle si queremos que aparezca centrada, a derecha o izquierda. Utilizar un
constructor para inicializar los dos atributos.
4. - Confeccionar una clase PiePagina (PiePagina.php) que permite mostrar el/los años, el
autor y datos de contacto (dirección Web y correo electrónico). Indicarle si queremos que
aparezca centrado, a derecha o izquierda. Utilizar un constructor para inicializar los dos atributos.
5. - Crear otro script PHP (index.php) que use las clases definidas en los puntos 3 y 4 de
la presente guía práctica.
6. - Editar la clase Persona del punto 2 para agregar el atributo privado $_hermanos de
tipo array() y un método que permita agregarlos. Pruebe dentro del mismo scirpt agregar
hermanos a un objeto persona.
7. - Para los puntos 2, 3 y 4 agregar el método __toString().