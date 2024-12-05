/*
    Função para exibir restante do texto de descrição da cerveja
*/
$('[exibir-texto]').on('click', function(){
    $(this).toggleClass("text-hide");
});

/*
    Função que lança via AJAX a consula ao banco com os filtros selecionados.
*/
function filtrar(){
        /*var query = $('#form-filtros').serializeArray();
        var dados=Array();
        query.forEach(function(query){
            dados.push(query.value);
        });
        console.log(dados);
        console.log(query);
        
        var jsonString = JSON.stringify(query);
        console.log(jsonString);
        */
        $.ajax({ 
            url: 'get_produtos.php',    
            method: 'POST',
            datatype: 'JSON',
            data: {data : JSON.stringify($('#form-filtros').serializeArray())},
            //data: {data : dados},
            success: function(data){
                $('#lista_produtos').html(data);
            }
        });
        

}

/*  
    EventListener que analisa mudanças no formulário e o envia para consulta
*/
const objform = document.getElementsByName('form-filtros');
objform[0].addEventListener('change',filtrar);


/*  
    Função change para não permitir selecionar mais de um tipo de ABV, IBU ou Preço
    pois multiplos desses filtros não fazem sentido.
*/
$('input[name="ibu"').on('change', function() {
    $('input[name="ibu"]').not(this).prop('checked', false);
});

$('input[name="abv"').on('change', function() {
    $('input[name="abv"]').not(this).prop('checked', false);
});

$('input[name="preco"').on('change', function() {
    $('input[name="preco"]').not(this).prop('checked', false);
});
