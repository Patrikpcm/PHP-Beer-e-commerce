$(window).on('load', function(){ //load para quando a pagina esta carregada
    observer = new Observador();
    observer.observar();
    
    if (location.search.slice(1) == ''){
        window.location.href = "produtos.php";
    }
    else{
        var id = location.search.slice(1).split('&');
        //marca o tipo de cerveja clicado na index o qual direcionou até a página.
        $.ajax({ 
            url: 'get_descricao_produto.php',    
            method: 'POST',
            datatype: 'JSON',
            data: {data : id},
            //data: {data : dados},
            success: function(data){
                $('#descricao_produto').html(data);
            }
        });

        $.ajax({ 
            url: 'get_descricao_estrelas.php',    
            method: 'POST',
            datatype: 'JSON',
            data: {data : id},
            //data: {data : dados},
            success: function(data){
                $('#avaliacao_estrelas').html(data);
            }
        });
        
        $.ajax({ 
            url: 'get_descricao_comentarios.php',    
            method: 'POST',
            datatype: 'JSON',
            data: {data : id},
            //data: {data : dados},
            success: function(data){
                $('#box_comentarios').html(data);
            }
        });           
    }            
});

$(document).ready(function(){

    $('#btn-comentario').click(function(){
        //console.log(JSON.stringify($('#form-comentario').serializeArray()));
        //console.log(location.search.slice(1));
        //data: {data : dados},)
        if($('#texto-comentario').val().length > 0){
            $.ajax({ 
                url: 'set_comentario.php',    
                method: 'POST',
                datatype: 'JSON',
                data: {data : JSON.stringify($('#form-comentario').serializeArray()), id_produto : location.search.slice(1).split('&')},
                //data: {data : dados},
                success: function(data){
                    $('#texto-comentario').val(''); //removendo o conteúdo do campo após a publicação da avaliação
                    alert('Avaliação inclusa com sucesso, agradecemos sua colaboração!');
                    window.location.href = ("descricao_produto.php?"+location.search.slice(1).split('&'));
                }
            });     
        }
    });

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

class Observador{
    observer;

    observar(){ 
        this.observer = new MutationObserver(function(){        
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