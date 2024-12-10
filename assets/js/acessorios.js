$(window).on('load', function(){ //load para quando a pagina esta carregada
    $.ajax({ 
        url: 'get_all-acessorios.php',    
        success: function(data){
            $('#all-acessorios').html(data);
        }
    });                    
});

$('#exibir').on('click', function(){
    $('#exibir').toggleClass('text-hide');
});

//$('p[exibir-texto]').on('click', function(){
  //  $('p[exibir-texto]').toggleClass(this)('text-hide');
//});
