$(window).on('load', function(){ //load para quando a pagina esta carregada
    observer = new Observador();
    observer.observar();
    $.ajax({ 
        url: 'get_all-acessorios.php',    
        success: function(data){
            $('#all-acessorios').html(data);
        }
    });                    
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
                        alert("Produto adicionado ao carrinho!");
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

//$('p[exibir-texto]').on('click', function(){
  //  $('p[exibir-texto]').toggleClass(this)('text-hide');
//});
