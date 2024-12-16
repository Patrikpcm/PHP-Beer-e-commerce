$(window).on('load', function(){ //load para quando a pagina esta carregada
    $.ajax({ 
        url: 'get_carrinho.php',    
        //data: {data : dados},
        success: function(data){
            $('#carrinho').html(data);
        }
    });   
});

$(document).ready(function(){
    
        
});

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
