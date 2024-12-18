$(window).on('load', function(){ //load para quando a pagina esta carregada
    var id_pedido = location.search.slice(1).split('&');
    console.log(id_pedido[0]);
    $.ajax({ 
        url: 'get_pedido_detalhe.php',    
        method: 'POST',
        data: {id_pedido : id_pedido[0]},
        success: function(data){
            $('#pedido').html(data);
           // observer.classesFound();
        }
    });
});       