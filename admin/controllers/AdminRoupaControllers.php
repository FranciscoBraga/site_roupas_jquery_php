<?php

require "../../app/connection/Connection.php";
require "../../app/models/RoupaModels.php";
require "../../app/services/RoupaServices.php";

$connection = new Connection();
$model = new RoupaModels();
$services = new RoupaServices($connection, $model);


if(isset($_GET['id']) ){
   
    $model->__set('id', $_GET['id']);
    $retorno= $services->getId();
   
    header('Location:../lista/roupa');

}
