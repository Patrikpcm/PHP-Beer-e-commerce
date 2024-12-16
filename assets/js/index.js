$(window).on('load', function(){ //load para quando a pagina esta carregada
    
    //busca informações sobre os lançamentos, promoções e acessórios no BD
    $.ajax({ 
        url: 'get_lancamentos.php',        
        success: function(data){
            $('#lista-lancamentos').html(data);
        }
    });

    $.ajax({ 
        url: 'get_promocoes.php',        
        success: function(data){
            $('#lista-promocoes').html(data);
        }
    });

    $.ajax({ 
        url: 'get_acessorios.php',        
        success: function(data){
            $('#lista-acessorios').html(data);
        }
    });
             
});

$('[exibir-texto]').on('click', function(){
    $(this).removeClass("text-hide");
    //$(this).toggleClass("text-hide");
});

$(document).ready(function() {
    $('.adicionar-ao-carrinho').click(function() {
        var produtoId = $(this).data('produto_id');
        $.ajax({
            url: 'add_carrinho.php',
            method: 'POST',
            data: { produtoId: produtoId }
        });
    });
});