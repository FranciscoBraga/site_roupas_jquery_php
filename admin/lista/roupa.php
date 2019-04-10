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
            <button class="btn btn-danger" type="button"  data-toggle="modal" data-target="#exampleModal"  onclick="GetId(<?= $value->id?>)" value="<?= $value->id?>"><i class="fas fa-trash"></i></button>
         
        </td>
      </tr>
      <?php }?> 
    </tbody>          
</table>


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
          <h3 class='float-left d-inline' id="vestimenta">?</h3>
          <div>
            <img id="imagem" src="" alt="" class="img-fluid">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="deletar">Remover Peça</button>
      </div>
    </div>
  </div>
</div>
<script>
   //formulário de cadastro de roupas
  function GetId(id){
    $.ajax({
                    type:'GET',
                    url:'../app/controllers/RoupaControllers.php',
                    data: `id=${id}&valor=busca`,
                    dataType:'json',
                    success: dados => {
                      $('#vestimenta').html(dados.vestimenta+' '+dados.cor+''+dados.marca),
                      $('#imagem').attr('src','../wwwroot/img/'+dados.imagem),
                      $('#deletar').val(dados.id),
                      console.log(dados)
                    },
                    error: erro => { alert('Erro ao cadastrar'+ erro)}

            })

  }

 $('#deletar').on('click', e =>{

   let id = $(e.target).val()
        $.ajax({
                    type:'GET',
                    url:'../app/controllers/RoupaControllers.php',
                    data: `id=${id}&valor=deletar`,
                    dataType:'json',
                    success: dados => {
                     if(dados == false){
                      /* $("#pagina").load("lista/roupa.php")
                      alert('Peça Removida') */
                     }
                      
                    },
                    error: erro => { alert('Erro ao cadastrar'+ erro)}

            })
 })
    

  


  
</script>


