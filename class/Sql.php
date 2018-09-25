<?php
class Sql extends PDO {
    private $conn;
    
    public function __construct() {
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
    }
    
    private function setParams($statment, $parameters = array()){
        foreach ($parameters as $key => $value) {
            $this->setParam($statment, $key, $value);
        }
    }
    
    private function setParam($statment, $key, $value){
        $statment->bindParam($key, $value);
    }
    
    public function query($rawQuery, $parameters = array()){
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $parameters);
        $stmt->execute();
        return $stmt;
    }
    
    public function select($rawQuery, $parameters = array()):array{
        $stmt = $this->query($rawQuery, $parameters);
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

