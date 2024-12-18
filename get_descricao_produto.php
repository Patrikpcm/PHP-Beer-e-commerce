<?php
    
    require_once('bd.class.php');

    $objDb = new bd(); //criando um novo objeto
    $link = $objDb->conecta_mysql();

    $data = $_POST['data'];
    //$data = json_decode(stripslashes($_POST['data']));
    //var_dump($data);
    //echo $data[0]->name;
    //echo $data[0]->value;

    $sql = "SELECT * FROM produtos WHERE id_produto = '$data[0]->value'";

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        //verificando se existe algum resultado com esses filtros
        if(mysqli_num_rows($resultado_id) == 0){
            
            echo ('<div class="row" style="height: 50%;">');
            echo (  '<div class="d-flex align-items-center justify-content-center">');
            echo (      '<img src="assets/img/sad_dwarf.png" height="70%" alt="Anão triste">');
            echo (  '</div>');
            echo (  '<div class="row">');
            echo (      '<h4 class="d-flex justify-content-center align-items-center texto-desculpa">');
            echo (            'Infelizmente nós não comercializamos mais esse produto.');
            echo (      '</h4>');
            echo (  '</div>');
            echo ('</div>');
            
        }
        else{
            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){ //navegando por todos os resultados
                if($registro['desconto'] == 0){
                    echo ('<div class="col-md-6">');
                    echo ('    <div class="d-flex justify-content-center">');
                    echo ('        <img src="'.$registro['foto'].'" class="box-produto" width="auto" height="500em" alt="'.$registro['titulo'].'">');
                    echo ('    </div>');
                    echo ('</div>');
                    echo ('<div class="col-md-6">');
                    echo ('    <div><h1>'.$registro['titulo'].'</h1></div>');
                    echo ('    <div><hr class="custom-hr"></div>');
                    echo ('    <div><h4 class="">'.$registro['descricao'].'</h4></div>');
                    echo ('   <div><hr class="custom-hr"></div>');
                    echo ('    <div><h4 class="">'.$registro['estilo'].'</h4></div>');
                    if($registro['ibu'] != null){
                        echo ('    <div><h4 class="">IBU: '.$registro['ibu'].'</h4></div>');
                    }
                    if($registro['abv'] != null){
                        echo ('    <div><h4 class="">ABV: '.$registro['abv'].'%</h4></div>');
                        echo ('   <div><hr class="custom-hr"></div>');
                    }
                    
                    echo ('    <div><h2 class="preco-descricao"> R$ 22,35</h2></div>');
                    echo ('    <div class="card-body mt-3">');
                    echo (              '<button class="btn btn-search adicionar-ao-carrinho" id_produto="'.$registro['id_produto'].'">Adicionar à geladeira</button>');
                    echo ('    </div>');
                    echo ('</div>'); 
                }
                else{ //se o produto tiver desconto, imprime com a tag na foto
                    echo ('<div class="col-md-6">');
                    echo ('    <div class="d-flex justify-content-center">');
                    echo ('        <img src="'.$registro['foto'].'" class="box-produto" width="auto" height="500em" alt="'.$registro['titulo'].'">');
                    echo('          <div class="texto-promo-descricao"> PROMOCAO </div>');
                    echo ('    </div>');
                    echo ('</div>');
                    echo ('<div class="col-md-6">');
                    echo ('    <div><h1>'.$registro['titulo'].'</h1></div>');
                    echo ('    <div><hr class="custom-hr"></div>');
                    echo ('    <div><h4 class="">'.$registro['descricao'].'</h4></div>');
                    echo ('   <div><hr class="custom-hr"></div>');
                    echo ('    <div><h4 class="">'.$registro['estilo'].'</h4></div>');
                    if($registro['ibu'] != null){
                        echo ('    <div><h4 class="">IBU: '.$registro['ibu'].'</h4></div>');
                    }
                    if($registro['abv'] != null){
                        echo ('    <div><h4 class="">ABV: '.$registro['abv'].'%</h4></div>');
                        echo ('   <div><hr class="custom-hr"></div>');
                    }
                    $preco = $registro['preco'];
                    $desconto = $registro['desconto'];
                    $precoFinal = $preco - ($preco*($desconto/100.0));
                    $precoFinal = number_format($precoFinal, 2,);
                    echo ('   <div class="d-flex"><h2 class="preco-descricao card-preco-promo">R$ '.$preco.' <h2 class="card-preco"> R$ '.$precoFinal.'</h2></h2> </div>');
                    echo ('    <div class="card-body mt-3">');
                    echo (              '<button class="btn btn-search" adicionar-ao-carrinho value="'.$registro['id_produto'].'">Adicionar à geladeira</button>');
                    echo ('    </div>');
                    echo ('</div>'); 
                }
            }
        }
    }
    else{
        echo 'Erro na consulta de produtos no banco de dados.';
    }
?>  
