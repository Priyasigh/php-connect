<?php
use MongoDB\Driver\Manager;
class MongoConnection{
    private $dbhost='localhost';
    private $dbport='3306';
    private $conn;

    function __construct(){
        try {
            $this->conn=new Manager('mongodb://'.$this->dbhost.':'.$this->dbport);
        } catch (MongoDBDriverExceptionException $e) {
            echo $e->getMessage();
            echo nl2br('n');
        }
    }

    function getConnection(){
        return $this->conn;
    }
}   
?>