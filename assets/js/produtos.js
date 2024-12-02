$(window).on('load', function(){ //load para quando a pagina esta carregada
    
    /*if(location.search.slice(1)){
        var query = location.search.slice(1);
        var partes = query.split('&');
        var data={};
        partes.forEach(function(parte){
            var chaveValor = parte.split('=');
            var chave = chaveValor[0];
            var valor = chaveValor[1];
            data[chave] = valor;
        });
        console.log(data);
    }
    else{
        console.log("Nenhum valor");
    }

    if (location.search.slice(1) != ''){
        var query = location.search.slice(1);
        var partes = query.split('&');
        var tipo = partes[0].split('=');
        console.log(tipo[1]);
    }*/

    if (location.search.slice(1) == ''){
        $.ajax({ //capturando o nome da pessoa para pesquisar com ajax
            url: 'get_produtos.php',        
            success: function(data){
                $('#lista_produtos').html(data);
            }
        });
    }
    else{
        var tipo = location.search.slice(1).split('&');
        console.log(tipo[0]);
        $.ajax({ //capturando o nome da pessoa para pesquisar com ajax
            url: 'get_produtos.php?'+tipo[0],    
            success: function(data){
                $('#lista_produtos').html(data);
            }
        });
        
    }
             
});
