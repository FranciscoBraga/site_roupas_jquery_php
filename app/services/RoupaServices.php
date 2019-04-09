<?php

class RoupaServices 
{
    private $conn;
    private $model;
    
    public function __construct(Connection $conn, RoupaModels $model){
        $this->conn = $conn->conectar();
        $this->model = $model;
      
    }
    
    public function insert()
    {
        $query="insert into roupas (numero,tipo,cor,vestimenta,moda,marca, imagem ) 
                        values (:numero,:tipo,:cor,:vestimenta,:moda,:marca,:imagem )";
        $stms= $this->conn->prepare($query);
        $stms->bindValue(':numero',$this->model->__get('numero'));
        $stms->bindValue(':tipo',$this->model->__get('tipo'));
        $stms->bindValue(':cor',$this->model->__get('cor'));
        $stms->bindValue(':vestimenta',$this->model->__get('vestimenta'));
        $stms->bindValue(':moda',$this->model->__get('moda'));
        $stms->bindValue(':imagem',$this->model->__get('imagem'));
        $stms->bindValue(':marca',$this->model->__get('marca'));
        $stms->execute();

        return $this;
    
    }  
    public function update(){
        $query="update set roupas where id = :id";
        $stms= $this->conn->prepare($query);
        $stms->bindValue(':id',$this->model->__get('id'));
        $stms->execute();

        return $this;
    }
    public function delete(){
        $query = "delete from roupas where id = :id";
        $stms= $this->conn->prepare($query);
        $stms->bindValue(':id',$this->model->__get('id'));
        $stms->execute();

        return $this;
    }

    public function getAll(){
        
        $query = "select id,numero,tipo,cor,vestimenta,moda,marca, imagem from roupas";
        $stms= $this->conn->prepare($query);
        $stms->execute();

        return $stms->fetchAll(PDO::FETCH_OBJ);

      
    }
    public function getId(){
        $query = "select id,numero,tipo,cor,vestimenta,moda,marca from roupas where id = :id";
        $stms= $this->conn->prepare($query);
        $stms->bindValue(':id',$this->model->__get('id'));
        $stms->execute();

        return $stms->fetch();
    } 
    
    public function pathImage($name){
    
        $path = "C:/xampp/htdocs/moda_maluca/wwwroot/img/";
        $file = $path.basename( $this->model->__get('imagem'));

        if(move_uploaded_file($name,$file)){
           echo "chamar função ajax";
           
        }else{
             echo "erro";
        }
    }
                        
}
                    