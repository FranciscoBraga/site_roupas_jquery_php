<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moda Maluca</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="wwwroot/js/script.js"></script>
   
</head>
<body>

<form action="../app/controllers/RoupaControllers.php" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Cadastro Roupas</legend>
    <!--numero,tipo,cor,vestimenta,moda,marca,imagem-->
  <div class="form-group">
    <label for="numero">Número:</label>
    <input type="text" class="form-control" id="numero" placeholder="Digite o número da roupa" name="numero" />
  </div>   
  <div class="form-group">
    <label for="cor">Cor:</label>
    <input type="text" class="form-control" id="cor" placeholder="Digite cor..." name="cor" />
  </div>
  <div class="form-group">
    <label for="vestimenta">Vestimenta:</label>
    <input type="text" class="form-control" id="vestimenta" placeholder="Digite vestimenta..." name="vestimenta" />
  </div>
  <div class="form-group">
    <label for="moda">Moda:</label>
    <input type="text" class="form-control" id="moda" placeholder="Digite moda..." name="moda" />
  </div>
  <div class="form-group">
    <label for="marca">Marca:</label>
    <input type="text" class="form-control" id="marca" placeholder="Digite marca..." name="marca" />
  </div>
  <div class="form-group">
    <label for="imagem">Imagem:</label>
    <input type="file" class="form-control-file btn btn-success" id="imagem" placeholder="Digite..." name="imagem" />
  </div>
  <div class="form-group">
  <label for="tipo">Tipo:</label>
     <select name="tipo" id="tipo" class="form-control" >
        <option>Selecione um item...</option>
       <option value="M">Masculino</option>
       <option value="F">Feminino</option>
       <option value="I">Infantil</option>
     </select>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  
  </fieldset>
</form>