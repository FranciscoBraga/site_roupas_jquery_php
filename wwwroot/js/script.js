
$(document).ready(()=>{
    //rotas área comercial
    $('#moda_masculina').on('click',()=>{
        $('#pagina').load('moda/masculina.php');
    });

    //rotas área admin
    $("#cadastro_roupas").on('click',()=>{
        $("#pagina").load('cadastro/roupa.php')
    });

    $("#lista_roupas").on('click', ()=>{
        $("#pagina").load("lista/roupa.php")
    });
 
});

