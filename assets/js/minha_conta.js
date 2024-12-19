$(window).on('load', function(){ //load para quando a pagina esta carregada
    $.ajax({ 
        url: 'get_usuario.php',    
        //data: {data : dados},
        success: function(data){
            $('#form_cadastrese').html(data);
        }
    });   
});

$('#botao-atualizar').on('click', function(){
    console.log("clicado");
    $('#endereco').prop('disabled', false);
    $('#telefone').prop('disabled', false);
    $('#senha').prop('disabled', false);
    $('#botao-atualizar').remove();
    $('#botao-enviar').html('<button form="form_cadastrese" type="submit" class="btn btn-search col-6 mt-4">Atualizar</button>');
});