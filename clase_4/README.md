# Utilizar los conceptos de programación Web
1. - Realice una página Web que contenga un formulario para cargar comentarios de una
página Web, los campos a utilizar son los siguientes:
Nombre
Correo electrónico
Página Web
Comentario
Luego cree un script PHP que permita obtener los datos del formulario por método POST y
muestre los mismos por pantalla.
2. - Edite el script PHP anterior para agregar una función que permita validar el campo de
correo electrónico, limpiando la cadena de espacio en blancos y verificando que se encuentre el
símbolo arroba en la cadena.
3. – Crear otro script PHP que contenga la función de verificación del punto anterior. Luego
deberá incluir (include) la misma en el script PHP del punto 1.
4. – Editar el script del punto 1 para incluir el archivo pero con la sentencia require(). Luego
pruebe indicar un nombre de archivo inexistente en la función require() para ver los resultados en
pantalla.
Utilizar los conceptos uploads
5. – Escriba un nuevo script PHP para subir un archivo al servidor y dentro del mismo
script mostrar la información del mismo después de subirlo.
Utilizar los conceptos de sesiones en PHP
6. – Escriba un nuevo script PHP que ermita crear una sesión PHP y guarde en ella la
siguiente información en el arreglo $_SESSION:
color_fondo
color_fuente
titulo_pagina
titulo_cuerpo_pagina
texto_pagina
Generar dos enlaces uno que permita abrir otra página que reanude la sesión y otro que
destruya la misma. La primer página deberá utilizar los valores de las variables para generar el
HTML.