<?php
// Archivo encargado de crear la base de datos para poder utilizar la página.
class SGUDataBase{
    private $_dataBase;

    public function __construct(){
        $this -> _dataBase =  new PDO("mysql:host=127.0.0.1;port=3306", 'root');
        $this -> _dataBase -> exec('CREATE DATABASE IF NOT EXISTS sgu; USE sgu;');
        

    }

    public function crearTablas(){
        $this -> _dataBase -> exec('CREATE TABLE Personas (idPersona INT NOT NULL PRIMARY KEY
        AUTO_INCREMENT, idTipoDocumento INT NOT NULL, numeroDocumento INT NOT NULL,
        apellido VARCHAR(30), nombres VARCHAR(30), fechaNacimiento DATE, sexo CHAR(1),
        telefonoMovil VARCHAR(20), telefono VARCHAR(20), email VARCHAR(70), domicilio VARCHAR(100),
        provincia VARCHAR(50), localidad VARCHAR(100), pais VARCHAR(50));');

        $this -> _dataBase -> exec('CREATE TABLE TiposDocumentos (idTipoDocumento INT NOT NULL AUTO_INCREMENT
        PRIMARY KEY, descripcion VARCHAR(75), observacion VARCHAR(75));');

        $this -> _dataBase -> exec('CREATE TABLE TiposUsuarios (idTipoUsuario INT NOT NULL AUTO_INCREMENT
        PRIMARY KEY, descripcion VARCHAR(75), observacion VARCHAR(75));');


        $this -> _dataBase -> exec('CREATE TABLE Usuarios (idUsuario INT NOT NULL AUTO_INCREMENT
        PRIMARY KEY, idPersona INT NOT NULL, idTipoUsuario INT NOT NULL, username VARCHAR(75),
        password VARCHAR(75), habilitado VARCHAR(1));');
    }

    public function crearForeginKeys(){
        $this -> _dataBase -> exec('ALTER TABLE Personas ADD CONSTRAINT fk_idTipoDocumento FOREIGN KEY
        (idTipoDocumento) REFERENCES TiposDocumentos (idTipoDocumento)');

        $this -> _dataBase -> exec('ALTER TABLE Usuarios ADD CONSTRAINT fk_idTipoUsuario FOREIGN KEY
        (idTipoUsuario) REFERENCES TiposUsuarios (idTipoUsuario)');

        $this -> _dataBase -> exec('ALTER TABLE Usuarios ADD CONSTRAINT fk_idPersona FOREIGN KEY
        (idPersona) REFERENCES Personas (idPersona)');
    }

    public function crearIndices(){
        $this -> _dataBase -> exec('CREATE INDEX idx_persona ON Usuarios (idPersona);');
        $this -> _dataBase -> exec('CREATE INDEX idx_tipoUsuario ON Usuarios (idTipoUsuario);');
    }
    

    public function agregarTipoDeUsuario($descripcion, $observacion) {
        $stmt = $this -> _dataBase -> prepare("INSERT INTO TiposUsuarios (descripcion, observacion) 
        VALUES (:descripcion, :observacion)");
        $stmt -> bindValue(':observacion', $observacion, PDO::PARAM_STR);
        $stmt -> bindValue(':descripcion', $descripcion, PDO::PARAM_STR);

        return $stmt -> execute();

    }

    public function agregarTipoDeDocumento($descripcion, $observacion) {
    
        $stmt = $this -> _dataBase -> prepare("INSERT INTO TiposDocumentos (descripcion, observacion) 
        VALUES (:descripcion, :observacion)");
        $stmt -> bindValue(':observacion', $observacion, PDO::PARAM_STR);
        $stmt -> bindValue(':descripcion', $descripcion, PDO::PARAM_STR);

        return $stmt -> execute();
    }
    
    public function database(){
        return $this -> _dataBase;
    }

    

}



$db = new SGUDataBase();

$db -> crearTablas();
$db -> crearIndices();
$db -> crearForeginKeys();
$db -> agregarTipoDeUsuario('admin', 'administrador de la web');
$db -> agregarTipoDeUsuario('usuario', 'usuario normal');
$db -> agregarTipoDeDocumento('DNI', 'DOCUMENTO NACIONAL DE IDENTIDAD');
$db -> agregarTipoDeDocumento('LE', 'LIBRETA ENROLAMIENTO');
$db -> agregarTipoDeDocumento('LC', 'LIBRETA CÍVICA');

?>