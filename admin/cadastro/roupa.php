
<!--../app/controllers/RoupaControllers.php-->
<form action=" " method="post" enctype="multipart/form-data" id="form_roupa">
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
  <button type="submit" id="form_cadastro_roupa" class="btn btn-primary">Cadastrar</button>
  
  </fieldset>

  
</form>

<script>
   //formulário de cadastro de roupas
   $("#form_cadastro_roupa").on('click', (e)=>{
        e.preventDefault();
     
        var form = $("#form_roupa").serialize();

        // Create an FormData object 
        var dados = new FormData(document.getElementById('form_roupa'));
        
        $.ajax({
                type:"POST",
                url:"../app/controllers/RoupaControllers.php",
                enctype: 'multipart/form-data',
                data: dados,
                processData: false,
                 contentType: false,
                success: dados => { alert('cadastro realizado')},
                error: dados => { alert('Erro ao cadastrar'+ erro)}

        });
    })
</script>
