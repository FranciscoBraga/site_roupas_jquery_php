<?php

class Connection 
{
    private $host = 'localhost';
    private $dbname= 'moda_maluca';
    private $user = 'root';
    private $pass = '';

    public function conectar(){
      try{
        $conn = new PDO(
            "mysql:host=$this->host; dbname=$this->dbname",
            "$this->user",
            "$this->pass"
        );
      
      return $conn;

      }catch(PDOException $ex){
        echo $ex->getMessage();
        
      }
    }
}
