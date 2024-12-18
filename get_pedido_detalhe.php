<?php
    session_start();
    
    require_once('bd.class.php');

    $objDb = new bd(); //criando um novo objeto
    $link = $objDb->conecta_mysql();

    if(!isset($_SESSION['email'])){ //verificar se o usuário esta logado
        header('Location: index.php?erro=1');
    }
    $id_pedido = $_POST['id_pedido'];
    $id = intval($id_pedido);
    $sql = "SELECT p.titulo AS produto, p.foto AS foto, p.id_produto, pp.preco, pp.quantidade FROM pedidos_produtos pp INNER JOIN produtos p ON pp.id_produto = p.id_produto WHERE pp.id_pedido = $id";
    
    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        //verificando se existe algum resultado com esses filtros
        if(mysqli_num_rows($resultado_id) == 0){
            echo (' <div style="text-align: center;">
                        <h2>Por alguma razão os detalhes desse pedido não puderam ser exibidos. Entre em contato com o SAC.</h2>
                    </div>');
        }
        else{
            echo('  <table id="tabela-pedidos">
                        <thead>
                            <tr>
                                <th class="titulo-carrinho" width="800">PRODUTO</th>
                                <th class="titulo-carrinho" width="150">PREÇO UNITARIO</th>
                                <th class="titulo-carrinho" width="100">QUANTIDADE</th>
                                <th class="titulo-carrinho" width="150">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>'
                );
           
            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){ //navegando por todos os resultados
                //<a href="descricao_produto.php?'.$item['id_produto'].'"><img class="foto-carrinho" src="'.$item['foto'].'" alt="'.$item['titulo'].'">' .$item['titulo'].'</a>
                echo('      <tr class="tabela-linha">
                                <td class="produto-carrinho">
                                    <a href="descricao_produto.php?'.$registro['id_produto'].'"><img class="foto-carrinho" src="'.$registro['foto'].'" alt="'.$registro['produto'].'"></a>'
                                    .$registro['produto'].'
                                </td>');
                echo('          <td class="produto-carrinho">R$ '.$registro['preco'].'</td>
                                <td class="produto-carrinho"> '.$registro['quantidade'].'</td>
                                <td class="produto-carrinho">R$ '.($registro['quantidade'] * $registro['preco']).'</td>
                            </tr>'
                    );
            }
                echo('     </tbody>
                        </table>'
                    );
        }//fim while
    }
    else{
        echo 'Erro na consulta SQL';
    }
?>