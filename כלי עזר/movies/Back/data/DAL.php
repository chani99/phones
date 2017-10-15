<?php
    require_once '../models/DirectorModel.php';
    
class DAL {

    private $my_Data_Base;

            private $host = '127.0.0.1';
            private $db   = 'movies';
            private $user = 'root';
            private $pass = '';
            private $charset = 'utf8';
            private $dsn;
            private $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
            ];


    function __construct() {
        $this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $this->my_Data_Base = new PDO($this->dsn, $this->user, $this->pass, $this->opt);


    }

function getDB() {
    $my_Data_Base = $this->my_Data_Base;
    return $my_Data_Base;
}

// returns a table from DB as array
function GetAllTable($query, $classname) {
    $DB = $this->getDB();
    $table = $DB->prepare($query);
    $table->execute();
    return $mytable = $table->fetchAll();
    //  return $mytable = $table->fetchAll(PDO::FETCH_CLASS, $classname);
    
}

// searches for a id in a table and returns the count of the result
function CheckId($query) {
    $DB = $this->getDB();
    $table = $DB->prepare($query);
    $table->execute();
    return $table->rowCount();
}

function updateSQL($query) {
    $DB = $this->getDB();
    $table = $DB->prepare($query);
    $table->execute();

    return true;
}


function insertSQL($query, $exicute) {
    $DB = $this->getDB();
    $table = $DB->prepare($query);
    $table->execute($exicute);

    return true;
}

function deleteSQL($query) {
    $DB = $this->getDB();
    $table = $DB->prepare($query);
    $table->execute();

    return true;
}

function innerJoion($query) {
    $DB = $this->getDB();
    $table = $DB->prepare($query);
    $table->execute();
    
    return $mytable = $table->fetchAll();;
}



}


