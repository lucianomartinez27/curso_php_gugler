<?php

class DataBase {
    private $_dataBase;

    public function connectTo($dataBaseName){
        $this -> _dataBase= new PDO("mysql:dbname=".$dataBaseName.";host=127.0.0.1;port=3306");
    }


    public function addTable($tableName) {
        $this -> _dataBase -> exec("CREATE TABLE ".$tableName.";" );
    }
}

?>