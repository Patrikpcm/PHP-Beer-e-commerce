<?php
    
    require_once('bd.class.php');

    $objDb = new bd(); //criando um novo objeto
    $link = $objDb->conecta_mysql();

    $data = json_decode(stripslashes($_POST['data']));
    //var_dump($data);
    //echo $data[0]->name;
    //echo $data[0]->value;

    if(!$data){
        //não há filtro aplicado, mostra todas as cervejas
        $sql = "SELECT * FROM produtos WHERE categoria = 'cerveja'"; 
    }
    else{
        //há filtros, vamos aplica-los
        $sql_tipo = '';
        $min_ibu=0; $max_ibu=200;
        $min_abv=0; $max_abv=100;       
        $min_preco=1.00; $max_preco=10000.00;

        foreach($data as $d){
            if($d->name == 'estilo'){
                $sql_tipo = $sql_tipo.'\''.$d->value.'\', ';
                //echo $d->name;
                //echo($sql_tipo);
            }

            if($d->name == 'ibu'){
                $values = explode('-', $d->value);
                //echo($values[0]);
                //echo($values[1]);
                $min_ibu = (int)$values[0];
                $values[1] != 'mais' ? $max_ibu = (int)$values[1] : $max_ibu = 200;
            }

            if($d->name == 'abv'){
                $values = explode('-', $d->value);
                $min_abv = (int)$values[0];
                $values[1] != 'mais' ? $max_abv = (int)$values[1] : $max_abv = 100;
            }
            if($d->name == 'preco'){
                $values = explode('-', $d->value);
                $min_preco = (double)$values[0];
                $values[1] != 'mais' ? $max_preco = (double)$values[1] : $max_preco = 10000.00;
            }
        }
        $sql_tipo = substr_replace($sql_tipo, '', -2); //removendo a última vírgula
        //echo ($sql_tipo);

        //criando a query
        $sql =  'SELECT * FROM produtos WHERE estilo IN ('.$sql_tipo.')'.
                ' AND ibu BETWEEN '.$min_ibu.' AND '.$max_ibu.
                ' AND abv BETWEEN '.$min_abv.' AND '.$max_abv.
                ' AND preco BETWEEN '.$min_preco.' AND '.$max_preco;
    }

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        //verificando se existe algum resultado com esses filtros
        if(mysqli_num_rows($resultado_id) == 0){
            
            echo ('<div class="row" style="height: 50%;">');
            echo (  '<div class="d-flex align-items-center justify-content-center">');
            echo (      '<img src="assets/img/sad_dwarf.png" height="70%" alt="Anão chateado">');
            echo (  '</div>');
            echo (  '<div class="row">');
            echo (      '<h4 class="d-flex justify-content-center align-items-center texto-desculpa">');
            echo (            'Apesar disso ser muito difícil para nós anões, gostaríamos 
                               de se desculpar pois ainda não temos nenhum produto
                               com essas características.');
            echo (      '</h4>');
            echo (  '</div>');
            echo ('</div>');
            
        }
        else{
            echo ('<div class="row row-cols-1 row-cols-md-3 g-3">');
            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){ //navegando por todos os resultados
                if($registro['desconto'] == 0){
                    echo (  '<div class="col">');
                    echo (      '<div class="card">');
                    echo (         '<a href="descricao_produto.php?'.$registro['id_produto'].'" class="align-self-center mt-2"><img src="'.$registro['foto'].'"width="auto" height="180" alt="'.$registro['titulo'].'"></a>');
                    echo (          '<div class="card-body">');
                    echo (              '<h5 class="card-title">'.$registro['titulo'].'</h5>');
                    echo (              '<p exibir-texto class="card-text text-hide">'.$registro['descricao'].'</p>');
                    echo (          '</div>');
                    echo (          '<ul>');
                    echo (              '<li class="list-group-item">'.$registro['estilo'].'</li>');
                    echo (              '<li class="list-group-item">IBU: '.$registro['ibu'].'</li>');
                    echo (              '<li class="list-group-item">ABV: '.$registro['abv'].'</li>');
                    echo (              '<li class="list-group-item"><strong class="card-preco">R$'.$registro['preco'].'</strong></li>');
                    echo (          '</ul>');
                    echo (          '<div class="card-body align-self-center">');
                    echo (              '<a href="#" type="button" class="btn btn-search">Adicionar à geladeira</a>');
                    echo (          '</div>');
                    echo (      '</div>');
                    echo (  '</div>');
                }
                else{ //se o produto tiver desconto, imprime com a tag na foto
                    echo(' <div class="col">');
                    echo('    <div class="card">');
                    echo('        <a href="descricao_produto.php?'.$registro['id_produto'].'" class="align-self-center mt-2"><img src="'.$registro['foto'].'" "width="auto" height="180" class="container-imagem-promo" alt="'.$registro['titulo'].'"></a>');
                    echo('          <div class="texto-promo"> PROMOCAO </div>');
                    echo('          <div class="card-body">');
                    echo('              <h5 class="card-title">'.$registro['titulo'].'</h5>');
                    echo('              <p exibir-texto class="card-text text-hide">'.$registro['descricao'].'</p>');
                    echo('          </div>');
                    echo('          <ul>');
                    echo('              <li class="list-group-item">'.$registro['estilo'].'</li>');
                    echo('              <li class="list-group-item">IBU: '.$registro['ibu'].'</li>');
                    echo('              <li class="list-group-item">ABV: '.$registro['abv'].'</li>');
                    $preco = $registro['preco'];
                    $desconto = $registro['desconto'];
                    $precoFinal = $preco - ($preco*($desconto/100.0));
                    $precoFinal = number_format($precoFinal, 2,);
                    echo('              <li class="list-group-item"><strong class="card-preco-promo">R$'.$registro['preco'].'</strong> <strong class="card-preco">R$'.$precoFinal.'</strong></li>');
                    echo('          </ul>');
                    echo('          <div class="card-body align-self-center">');
                    echo('              <a href="#" type="button" class="btn btn-search">Adicionar à geladeira</a>');
                    echo('          </div>');
                    echo('      </div>');
                    echo('  </div>');
                }
            }
            echo ('</div>');
        }
    }
    else{
        echo 'Erro na consulta de produtos no banco de dados.';
    }
?>