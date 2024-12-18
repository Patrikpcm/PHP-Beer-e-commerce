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
         
    observer = new Observador();
    observer.observar();
});


$(document).ready(function() {
    
});

class Observador{
    observer;

    observar(){ 
        this.observer = new MutationObserver(function(){
            /*Função para exibir restante do texto de descrição da cerveja*/
            $('[exibir-texto]').on('click', function(){
                $(this).toggleClass("text-hide");
            });
        
            /* Função para adicionar produtos ao carrinho de compras (geladeira)*/
            $('[adicionar-ao-carrinho]').on('click', function(){
                //console.log($(this).val());
                $.ajax({
                    url: 'add_carrinho.php',
                    method: 'POST',
                    data: { id_produto: $(this).val()},
                    success: function(response) {
                        // Atualizar o carrinho na página
                        //alert ("Produto adicionado ao carrinho com sucesso!");
                    }
                });
            });
        });
        var divArray = document.getElementById('descricao_produto');
        this.observer.observe(divArray, { attributes: false, childList: true, subtree: true });
    }

    classesFound(){
        this.observer.disconnect();
    };
}