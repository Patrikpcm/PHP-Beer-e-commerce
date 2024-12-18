$(window).on('load', function(){ //load para quando a pagina esta carregada
    $.ajax({ 
        url: 'get_pedidos.php',    
        //data: {data : dados},
        success: function(data){
            $('#pedidos').html(data);
        }
    });   
});