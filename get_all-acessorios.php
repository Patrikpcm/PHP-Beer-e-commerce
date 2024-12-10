<?php
    
    require_once('bd.class.php');

    $objDb = new bd(); //criando um novo objeto
    $link = $objDb->conecta_mysql();

    $sql = "SELECT * FROM produtos WHERE categoria = 'acessório'"; 

    $resultado_id = mysqli_query($link, $sql);
    if($resultado_id){
    
        while( $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){ //navegando pelos 3 primeiros resultados
            echo(' <div class="col">');
            echo('    <div class="card">');
            echo('        <img href="descricao_produto.php?'.$registro['id_produto'].' src="'.$registro['foto'].'" "width="auto" height="180" class="align-self-center mt-2" alt="'.$registro['titulo'].'">');
            echo (          '<div class="card-body">');
            echo (              '<h5 class="card-title">'.$registro['titulo'].'</h5>');
            echo (              '<p id="exibir" exibir-texto class="card-text text-hide">'.$registro['descricao'].'</p>');
            echo (          '</div>');
            echo (          '<ul>');
            echo (              '<li class="list-group-item">'.$registro['estilo'].'</li>');
            echo (              '<li class="list-group-item"><strong class="card-preco">R$'.$registro['preco'].'</strong></li>');
            echo (          '</ul>');
            echo (          '<div class="card-body align-self-center">');
            echo (              '<a href="#" type="button" class="btn btn-search">Adicionar ao carrinho</a>');
            echo (          '</div>');
            echo (      '</div>');
            echo (  '</div>');

        }
    }
    else{
        echo 'Erro na consulta de produtos no banco de dados.';
    }
?>