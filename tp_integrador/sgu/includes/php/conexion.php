<?php

// Clase que ayuda a obtener y actualizar datos de la base de datos.

class AsistenteSQL {
    static $_dbh;

    function __construct($dbname)
    {
        try {
            if (is_null(self::$_dbh)){
                self:: $_dbh = new PDO("mysql:dbname=" .$dbname. ";host=127.0.0.1;port=3306", 'root');
            }
        }
        catch (PDOException $e){
            echo 'Conexión fallida: '. $e -> getMessage();
        }
        
    }

    public function obtenerTiposDeUsuarios(){
        return  self:: $_dbh -> query('SELECT * FROM TiposUsuarios;') -> fetchAll(PDO::FETCH_OBJ);
    }

    public function obtenerDatosDePersonas(){
        return self:: $_dbh -> query('SELECT * FROM Personas;') -> fetchAll(PDO::FETCH_OBJ);
    }

    public function obtenerDatosDeUsuarioPorId($idUsuario){
        $consulta =  self:: $_dbh -> prepare('SELECT idUsuario, username, descripcion, habilitado, nombres, apellido FROM
        ((Usuarios INNER JOIN TiposUsuarios ON Usuarios.idTipoUsuario = TiposUsuarios.idTipoUsuario)
        INNER JOIN Personas ON Personas.idPersona = Usuarios.idPersona) WHERE Usuarios.idUsuario = :idUsuario');


        $consulta -> bindValue(':idUsuario', $idUsuario, PDO::PARAM_INT);

        $consulta -> execute();

        return $consulta -> fetchAll(PDO::FETCH_OBJ);
    }


    public function obtenerDatosDePersonaPorId($idPersona){
        $consulta =  self:: $_dbh -> prepare('SELECT idPersona, nombres, apellido, sexo, email, numeroDocumento
        numeroDocumento, fechaNacimiento, telefono, telefonoMovil, domicilio, localidad, provincia, pais
        FROM Personas WHERE idPersona = :idUsuario');


        $consulta -> bindValue(':idUsuario', $idPersona, PDO::PARAM_INT);

        $consulta -> execute();

        return $consulta -> fetchAll(PDO::FETCH_OBJ);
    }



    public function obtenerDatosDeUsuarios(){
        $consulta =  self:: $_dbh -> prepare('SELECT idUsuario, username, descripcion, habilitado, nombres, apellido FROM
        ((Usuarios INNER JOIN TiposUsuarios ON Usuarios.idTipoUsuario = TiposUsuarios.idTipoUsuario)
        INNER JOIN Personas ON Personas.idPersona = Usuarios.idPersona)');

        $consulta -> execute();

        return $consulta -> fetchAll(PDO::FETCH_OBJ);
    }


    public function actualizarUsuario($idUsuario, $idPersona, $idTipoDeUsuario, $habilitado){
        $stmt = self:: $_dbh -> prepare("UPDATE Usuarios SET idPersona= :idPersona, idTipoUsuario = :idTipoUsuario,
         habilitado=:habilitado WHERE idUsuario=:idUsuario");
         $stmt -> bindValue(':idPersona', $idPersona, PDO::PARAM_INT);
         $stmt -> bindValue(':idTipoUsuario', $idTipoDeUsuario, PDO::PARAM_INT);
         $stmt -> bindValue(':idUsuario', $idUsuario, PDO::PARAM_INT);
         $stmt -> bindValue(':habilitado', $habilitado, PDO::PARAM_STR);
         
        return $stmt -> execute();
    }

    public function actualizarPersona($idPersona, $nombres, $apellido, $tipoDocumento,
    $numeroDocumento, $fechaNacimiento, $sexo, $telefono, $telefonoMovil, $email, $domicilio,
    $localidad, $provincia, $pais){
        $stmt = self:: $_dbh -> prepare("UPDATE Personas SET idTipoDocumento = :tipoDocumento, numeroDocumento =:numeroDocumento,
        apellido = :apellido, nombres = :nombres, fechaNacimiento = :fechaNacimiento, sexo = :sexo, telefonoMovil = :movil,
        telefono = :telefono, email = :email, domicilio = :domicilio, provincia = :provincia, localidad = :localidad, pais = :pais
        WHERE idPersona = :idPersona");
    
        $stmt -> bindValue(':tipoDocumento', $tipoDocumento, PDO::PARAM_INT);
        $stmt -> bindValue(':numeroDocumento', $numeroDocumento, PDO::PARAM_INT);
        $stmt -> bindValue(':apellido', $apellido, PDO::PARAM_STR);
        $stmt -> bindValue(':nombres', $nombres, PDO::PARAM_STR);
        $stmt -> bindValue(':fechaNacimiento', $fechaNacimiento, PDO::PARAM_STR);
        $stmt -> bindValue(':sexo', $sexo, PDO::PARAM_STR_CHAR);
        $stmt -> bindValue(':movil', $telefonoMovil, PDO::PARAM_STR);
        $stmt -> bindValue(':telefono', $telefono, PDO::PARAM_STR);
        $stmt -> bindValue(':email', $email, PDO::PARAM_STR);
        $stmt -> bindValue(':domicilio', $domicilio, PDO::PARAM_STR);
        $stmt -> bindValue(':provincia', $provincia, PDO::PARAM_STR);
        $stmt -> bindValue(':localidad', $localidad, PDO::PARAM_STR);
        $stmt -> bindValue(':pais', $pais, PDO::PARAM_STR);
        $stmt -> bindValue(':idPersona', $idPersona, PDO::PARAM_INT);
    
        return $stmt -> execute();
    }

    public function agregarUsuario($idPersona, $idTipoUsuario, $nombreUsuario, $password, $habilitado ){

        $stmt = self:: $_dbh -> prepare("INSERT INTO Usuarios (idPersona, idTipoUsuario, username, password, habilitado)
         VALUES (:idPersona, :idTipoUsuario, :nombreUsuario, :password, :habilitado)");
        
        $stmt -> bindValue(':idPersona', $idPersona, PDO::PARAM_INT);
        $stmt -> bindValue(':idTipoUsuario', $idTipoUsuario, PDO::PARAM_INT);
        $stmt -> bindValue(':nombreUsuario', $nombreUsuario, PDO::PARAM_STR);
        $stmt -> bindValue(':password', $password, PDO::PARAM_STR);
        $stmt -> bindValue(':habilitado', $habilitado,PDO::PARAM_STR);

        return $stmt -> execute();
    }


    public function borrarUsuario($idUsuario){
        $stmt = self:: $_dbh -> prepare('DELETE FROM Usuarios WHERE idUsuario = :idUsuario');
        $stmt -> bindValue(':idUsuario', $idUsuario, PDO::PARAM_INT);
        return $stmt-> execute();
    }

    public function borrarPersona($idPersona){
        $stmt = self:: $_dbh -> prepare('DELETE FROM Personas WHERE idPersona = :idPersona');
        $stmt -> bindValue(':idPersona', $idPersona, PDO::PARAM_INT);
        return $stmt-> execute();
    }

    public function agregarPersona($tipoDocumento, $numeroDocumento, $apellido, $nombres, $fechaNacimiento, $sexo,
    $telefonoMovil, $telefono, $email, $domicilio, $provincia, $localidad, $pais ){
    $stmt = self:: $_dbh -> prepare("INSERT INTO Personas (idTipoDocumento, numeroDocumento, apellido, nombres, fechaNacimiento, sexo, telefonoMovil,
    telefono, email, domicilio, provincia, localidad, pais) VALUES (:tipoDocumento, :numeroDocumento, :apellido, :nombres,
    :fechaNacimiento, :sexo, :movil, :telefono, :email, :domicilio, :provincia, :localidad, :pais)");

    $stmt -> bindValue(':tipoDocumento', $tipoDocumento, PDO::PARAM_INT);
    $stmt -> bindValue(':numeroDocumento', $numeroDocumento, PDO::PARAM_INT);
    $stmt -> bindValue(':apellido', $apellido, PDO::PARAM_STR);
    $stmt -> bindValue(':nombres', $nombres, PDO::PARAM_STR);
    $stmt -> bindValue(':fechaNacimiento', $fechaNacimiento, PDO::PARAM_STR);
    $stmt -> bindValue(':sexo', $sexo, PDO::PARAM_STR_CHAR);
    $stmt -> bindValue(':movil', $telefonoMovil, PDO::PARAM_STR);
    $stmt -> bindValue(':telefono', $telefono, PDO::PARAM_STR);
    $stmt -> bindValue(':email', $email, PDO::PARAM_STR);
    $stmt -> bindValue(':domicilio', $domicilio, PDO::PARAM_STR);
    $stmt -> bindValue(':provincia', $provincia, PDO::PARAM_STR);
    $stmt -> bindValue(':localidad', $localidad, PDO::PARAM_STR);
    $stmt -> bindValue(':pais', $pais, PDO::PARAM_STR);

    return $stmt -> execute();
    }

    public function conectarDB($dbname){
        try {
            self::$_dbh = new PDO("mysql:dbname=" .$dbname. ";host=127.0.0.1;port=3306", 'root');
        }
        catch (PDOException $e){
            echo 'Conexión fallida: '. $e -> getMessage();
        }
    }
    
    public function desconectarDB(){
        self:: $_dbh = null;
    }


}


$asistenteDB = new AsistenteSQL('sgu');



?>