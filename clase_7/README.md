# Preparar y verificar nuestro entorno de desarrollo PHP
Antes de comenzar con la práctica, asegúrese de tener instalada la extensión PDO para
PHP.
1. Verifique y realice la instalación/activación de ser necesario de la extensión PDO en el
servidor Web (configuración PHP).
2. Verifique e Instale de ser necesario el conector PDO de MySQL en el sistema.
Obtener y establecer valores en atributos de la conexión a la base de datos

---
#### Obtener y establecer valores en atributos de la conexión a la base de datos

3. Crear un script que realice una conexión a la base de datos y obtenga los valores de
los siguientes atributos de la conexión:
  
- PDO::ATTR_AUTOCOMMIT
- PDO::ATTR_CONNECTION_STATUS
- PDO::ATTR_DRIVER_NAME
- PDO::ATTR_ERRMODE
- PDO::ATTR_SERVER_INFO
- PDO::ATTR_SERVER_VERSION
  
4. Crear otro script para establecer nuevos valores a los siguientes atributos de la
conexión a la base de datos:
- PDO::ATTR_ERRMODE (pasa del valor 0 a 1, recuerde utilizar constantes)
- PDO::ATTR_CASE (pasa del valor 0 a 2, recuerde utilizar constantes)
#### Crear base de datos y tablas en MySQL utilizando PDO
5. Crear una base de datos nueva con el nombre phpn1_db_clase7. Utilice la sentencia
CREATE TABLE en la declaración de la consulta que se ejecutará desde el método exec() de la
clase PDO.
6. Crear una taba nueva en la base de datos phpn1_db_clase7 con el nombre
tipo_documento con los siguientes campos:
- id_tipo_documento INT NOT NULL AUTO_INCREMENT PRIMARY KEY
- descripcion VARCHAR(30) NOT NULL
Laboratorio de Investigación Gugler
Página 2 de 4•
observacion VARCHAR(50) NOT NULL
7. Crear otra taba nueva en la base de datos phpn1_db_clase7 con el nombre persona
que posea los siguientes campos:
- id_persona int NOT NULL AUTO_INCREMENT PRIMARY KEY
- id_tipo_documento int NOT NULL
- apellidos varchar(30) NOT NULL
- nombres varchar(50) NOT NULL
- correo_electronico varchar(150) NOT NULL
8. Crear un índice para el campo id_tipo_documento de la tabla persona de la base de
datos phpn1_db_clase7 con el nombre idx_personas_1.
9. Alterar la estructura de la tabla persona de la base de datos phpn1_db_clase7 con la
siguiente sentencia SQL:
ALTER TABLE persona ADD CONSTRAINT fk_id_tipo_documento FOREIGN KEY
(id_tipo_documento) REFERENCES tipo_documento (id_tipo_documento);
#### Insertar datos en las tablas utilizando la capa de abstracción PDO
10. Realice un script que permita insertar datos en la tabla tipo_documento de la base
de datos phpn1_db_clase7. Las filas a insertar definen los tipos de documentos de una persona
como por ejemplo: DNI, LC, LE y Pasaporte.
11. Modifique el script del punto anterior para insertar sus datos personales en la tabla
persona de la base de datos phpn1_db_clase7.
#### POO y la capa de abstracción PDO
12. Realice un script (DataBase.php) que contenga la Clase DataBase para realizar el
manejo de base de datos utilizando la capa de abstracción PDO. Dentro de la clase declare y
desarrolle un método para conectarse a la base de datos creada en esta guía.
Realice un script (index.php) para probar la conexión con la clase DataBase.