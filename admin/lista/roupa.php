<?php

  require "../controllers/AdminRoupaControllers.php";

  
  $roupas = $services->getAll();

?>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Imagem</th>
      <th>Número</th>
      <th>Tipo</th>
      <th>Cor</th>
      <th>Vestimenta</th>
      <th>Moda</th>
      <th>Marca</th>  
      <th></th>
      <th></th>
    </tr>
  </thead>
    <tbody>
        <?php foreach($roupas as $key => $value) { ?>
        <tr>
        <td><img src="../wwwroot/img/<?=$value->imagem?>" alt="" width="80px"/></td>
        <td><?=$value->numero?></td>
        <td><?=$value->tipo?></td>
        <td><?=$value->cor?></td>
        <td><?=$value->vestimenta?></td>
        <td><?=$value->moda?></td>
        <td><?=$value->marca?></td>
        <td>
          <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
        </td>
        <td>
         <form action="controllers/AdminRoupaControllers.php" method="get" >
            <input type="hidden" name="id" value="<?= $value->id?>">
            <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"  ><i class="fas fa-trash"></i></button>
         </form>
        </td>
      </tr>
      <?php }?> 
    </tbody>          
</table>
<?
    if(!$retorno == null){
     print_r($retorno);
  }
  ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Remover Peça</button>
      </div>
    </div>
  </div>
</div>