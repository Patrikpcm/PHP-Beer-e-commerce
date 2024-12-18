<?php
    session_start();

    if(!isset($_SESSION['email'])){ //verificar se o usuário esta logado
        header('Location: index.php?erro=1');
    }

    if(!isset($_SESSION['carrinho'])){ //verificar se há itens no carrinho
        header('Location: produtos.php');
    }
    
    require_once('bd.class.php');

    $objDb = new bd(); //criando um novo objeto
    $link = $objDb->conecta_mysql();

    $id_usuario = $_SESSION['id_usuario'];
    $total = 0;
    foreach ($_SESSION['carrinho'] as $item){
        $total += $item['quantidade'] * $item['preco'];
    }

    $sql = "INSERT INTO pedidos_usuarios(id_usuario, preco_total) VALUES($id_usuario, $total)";
    $resultado_id = mysqli_query($link, $sql);
    if($resultado_id){
        $last_id = mysqli_insert_id($link);
        foreach ($_SESSION['carrinho'] as $item){
            $id_produto = $item['id_produto'];
            $preco = $item['preco'];
            $quantidade = $item['quantidade'];
            $sql = "INSERT INTO pedidos_produtos VALUES($last_id, $id_produto, $preco, $quantidade)";
            $insercao = mysqli_query($link, $sql);
            if(!$insercao){
                echo ('Erro na inserção de um pedido!'.$insercao->error);
            }
        }
        unset($_SESSION['carrinho']);
        echo 'Pedido finalizado com sucesso!';
    }
    else{
        echo 'Erro na finalização do pedido.'.$resultado_id->error;
    }

    
?>