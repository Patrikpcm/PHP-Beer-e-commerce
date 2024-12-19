$(window).on('load', function(){ //load para quando a pagina esta carregada
    observer = new Observador();
    observer.observar();
    //caso o usuário acesse diretamente a página de produtos, sem nenhum filtro aplicado.
    if (location.search.slice(1) == ''){
        filtrar();   
    }
    else{
        var tipo = location.search.slice(1).split('&');
        tipo = tipo[0].replace(/%20/g, " ");
        //console.log(tipo);
        //marca o tipo de cerveja clicado na index o qual direcionou até a página.
        $('input[value=\''+tipo+'\']').not(this).prop('checked', true); 
        //console.log(tipo[0]);
        filtrar();     
    }       
});


//###############################################################################
/* Função que lança via AJAX a consula ao banco com os filtros selecionados. */
function filtrar(){
    $.ajax({ 
        url: 'get_produtos.php',    
        method: 'POST',
        datatype: 'JSON',
        data: {data : JSON.stringify($('#form-filtros').serializeArray())},
        //data: {data : dados},
        success: function(data){
            $('#lista_produtos').html(data);
           // observer.classesFound();
        }
    });
}
/*EventListener que analisa mudanças no formulário e o envia para consulta*/
$(document).ready(function(){
    const objform = document.getElementsByName('form-filtros');
    objform[0].addEventListener('change',filtrar);
    
});


//###############################################################################
/* Função change para não permitir selecionar mais de um tipo de ABV, IBU ou Preço
 pois multiplos desses filtros não fazem sentido. */
$('input[name="ibu"').on('change', function() {
    $('input[name="ibu"]').not(this).prop('checked', false);
});

$('input[name="abv"').on('change', function() {
    $('input[name="abv"]').not(this).prop('checked', false);
});

$('input[name="preco"').on('change', function() {
    $('input[name="preco"]').not(this).prop('checked', false);
});


//###############################################################################
/*     LINKS EXPLICATIVOS DO PORQUE USAR MUTATIONOBSERVER PARA ESSAS FUNÇÕES
 *  - https://stackoverflow.com/questions/33680420/html-getelementsbyclassname-returns-htmlcollection-with-length-of-0
 *  - https://stackoverflow.com/questions/2844565/is-there-a-javascript-jquery-dom-change-listener/11546242#11546242
*/
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