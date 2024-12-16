<?php
    session_start();
    require_once('bd.class.php');
    $objDb = new bd(); //criando um novo objeto
    $link = $objDb->conecta_mysql();

    $id_produto = $_POST['id_produto'];

    $sql = "SELECT * FROM produtos WHERE id_produto = $id_produto";

    $resultado_id = mysqli_query($link, $sql);
    if($resultado_id){
        $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
        
        $produto = ['id_produto'=>$registro['id_produto'], 'titulo'=>$registro['titulo'], 'preco'=>$registro['preco'], 'foto'=>$registro['foto'], 'quantidade'=>1];

        if($registro['desconto'] > 0){ //lógica para calcular o desconto, SE o produto tiver
            $preco = $registro['preco'];
            $desconto = $registro['desconto'];
            $precoFinal = $preco - ($preco*($desconto/100.0));
            $precoFinal = number_format($precoFinal, 2,);
            $produto['preco'] = $precoFinal;
        }

        //se o carrinho não existir, criamos e adicionamos o produto
        if(!isset($_SESSION['carrinho'])){ 
            $_SESSION['carrinho'] = [];
            $_SESSION['carrinho'][] = $produto;
        }
        //se já existir, verificamos se o produto já consta no carrinho: Se constar aumentamos a quantidade, se não constar adicionamos.
        else{
            $existe = false;
            for($i = 0; $i< count($_SESSION['carrinho']); $i++){
                if($_SESSION['carrinho'][$i]['id_produto'] == $produto['id_produto']){
                    $_SESSION['carrinho'][$i]['quantidade']++;
                    $existe = true;
                }
            }
            if(!$existe){
                $_SESSION['carrinho'][] = $produto;
            }
        }
    }
    else{
        echo ('Erro na consulta ao BD.');
    }

    
    
    
?>