
$(window).on('load', function(){ //load para quando a pagina esta carregada
    $.ajax({ //capturando o nome da pessoa para pesquisar com ajax
        url: 'get_produtos.php',
        
        success: function(data){
            $('#lista_produtos').html(data);
        }
    });            
});