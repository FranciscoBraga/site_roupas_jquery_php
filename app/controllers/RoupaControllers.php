<?php

require '../models/RoupaModels.php';
require '../services/RoupaServices.php';
require '../connection/Connection.php';

$roupa = new RoupaModels();
$conn = new Connection();
$services = new RoupaServices($conn, $roupa);

echo json_encode($_POST);

if($_POST != null){

 $roupa->__set('numero',$_POST['numero']);
 $roupa->__set('tipo',$_POST['tipo']);
 $roupa->__set('cor',$_POST['cor']);
 $roupa->__set('vestimenta',$_POST['vestimenta']);
 $roupa->__set('moda',$_POST['moda']);
 $roupa->__set('marca',$_POST['marca']);
 $roupa->__set('imagem',$_FILES['imagem']['name']);

  $retorno = $services->insert();

  if(!$retorno == null){
    $services->pathImage($_FILES['imagem']['tmp_name']);
  }

  print_r($retorno);
}



 

