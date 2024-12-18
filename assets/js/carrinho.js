$(window).on('load', function(){ //load para quando a pagina esta carregada
    observer = new Observador();
    observer.observar();

    $.ajax({ 
        url: 'get_carrinho.php',    
        //data: {data : dados},
        success: function(data){
            $('#carrinho').html(data);
        }
    });   
});

class Observador{
    observer;

    observar(){ 
        this.observer = new MutationObserver(function(){
        
            $(document).ready(function(){
              
                function calcularTotais() {
                    const linhas = document.querySelectorAll('.tabela-linha');
                    //console.log(linhas);
                    let totalGeral = 0
                    
                    linhas.forEach(linha =>{
                        const quantidade = linha.querySelector('.quantidade').value;
                        const precoUnitario = linha.querySelector('.preco').textContent.replace('R$ ', '');
                        const valorTotal = quantidade * precoUnitario;
                        linha.querySelector('.total-produto').textContent = 'R$ ' + valorTotal.toFixed(2);
                        totalGeral += valorTotal;
                    });
                    document.querySelector('.total-pedido').textContent = 'R$ ' + totalGeral.toFixed(2);
                }
                
                // Adicionando um event listener para todas as células com a classe 'quantidade'
                const quantidadeInputs = document.querySelectorAll('.quantidade');
                //console.log(quantidadeInputs);
                calcularTotais();
                quantidadeInputs.forEach(input => {
                    input.addEventListener('input', calcularTotais);
                });
                     
            });//document ready

        }); //observar
        var divArray = document.getElementById('carrinho');
        this.observer.observe(divArray, { attributes: true, childList: true, subtree: true });
    }

    classesFound(){
        this.observer.disconnect();
    };
}

function onClickRemove(deleteButton) {
    //console.log(deleteButton.value);
    let row = deleteButton.parentElement.parentElement;
    row.parentNode.removeChild(row);
    $.ajax({ 
        url: 'remove_carrinho.php',
        method: 'POST',
        data: {id_produto : deleteButton.value},
        success: function(data){
            alert("produto removido!");
        }
    });   
}

$('#finalizar-pedido').on('click', function(){
    //console.log("clicado");
    $.ajax({
        url: 'finalizar_pedido.php',
        success: function(data) {
            // Atualizar o carrinho na página
            alert (data);
            location.href = "finalizar_pedido_agradecimento.php";

        }
    });
});