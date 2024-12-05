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
