<?php
    session_start();
    
    if(!isset($_SESSION['email'])){ //verificar se o usuário esta logado
        header('Location: index.php?erro=1');
    }

    require_once('bd.class.php');
    $objDb = new bd(); //criando um novo objeto
    $link = $objDb->conecta_mysql();

    $id_usuario = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM pedidos_usuarios WHERE id_usuario = $id_usuario ORDER BY data_pedido";
    $resultado_id = mysqli_query($link, $sql);

    function produtosPedidos($id_produto){
        $objDb2 = new bd();
        $link2 = $objDb2->conecta_mysql();
        $sql2 = "SELECT p.titulo AS produto, p.foto AS foto, pp.preco, pp.quantidade FROM pedidos_produtos pp INNER JOIN produtos p ON pp.id_produto = p.id_produto WHERE pp.id_pedido = $id_produto";
        $resultado_id2 = mysqli_query($link2, $sql2);
        $row = $resultado_id2->fetch_assoc();
        $produto = ['produto'=>$row['produto'], 'foto'=>$row['foto'], 'quantidade'=>0];
        $qtd = 0;
        
        while($registro2 = mysqli_fetch_array($resultado_id2, MYSQLI_ASSOC)){
            $qtd += $registro2['quantidade'];
        } 
        
        $produto['quantidade'] = $qtd;
        
        return $produto;
    }

    if($resultado_id){
        //verificando se existe algum resultado com esses filtros
        if(mysqli_num_rows($resultado_id) == 0){
            echo (' <div style="text-align: center;">
                        <h2>Você não adicionou nenhum item ao carrinho!</h2>
                    </div>');
        }
        else{
            echo('  <table id="tabela-pedidos">
                        <thead>
                            <tr>
                                <th class="titulo-carrinho" width="100">CÓD PEDIDO</th>
                                <th class="titulo-carrinho" width="800">PRODUTO(S)</th>
                                <th class="titulo-carrinho" width="250">DATA</th>
                                <th class="titulo-carrinho" width="150">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>'
                );
           
            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){ //navegando por todos os resultados
                //<a href="descricao_produto.php?'.$item['id_produto'].'"><img class="foto-carrinho" src="'.$item['foto'].'" alt="'.$item['titulo'].'">' .$item['titulo'].'</a>
                echo('      <tr class="tabela-linha">
                                <td class="produto-carrinho" >'.$registro['id_pedido'].'</td>');
                                $produto = produtosPedidos($registro['id_pedido']);
                                if($produto['quantidade'] <= 1){
                                    echo '<td class="produto-carrinho"><a class="descricao-pedido">1 x - <img class="foto-carrinho" src="'.$produto['foto'].'" alt="'.$produto['produto'].'"><b>' .$produto['produto'].'</b>.</a><a href="pedido_detalhe.php?'.$registro['id_pedido'].'" class="btn btn-search descricao-botao">Mais detalhes do pedido</a></td>';
                                }
                                else{
                                    echo '<td class="produto-carrinho"><a class="descricao-pedido">1 x - <img class="foto-carrinho" src="'.$produto['foto'].'" alt="'.$produto['produto'].'"><b>'.$produto['produto'].'</b> e mais outros '.($produto['quantidade'] - 1).' items.</a><a href="pedido_detalhe.php?'.$registro['id_pedido'].'" class="btn btn-search descricao-botao">Mais detalhes do pedido</a></td>';
                                }
                echo('          <td class="produto-carrinho">DATA: '.$registro['data_pedido'].'</td>
                                <td class="produto-carrinho">R$ '.$registro['preco_total'].'</td>
                            </tr>'
                    );
            }
                echo('     </tbody>
                        </table>'
                    );
        }//fim while
    }
    else{
        echo 'Erro na consulta SQL'.$resultado_id->error;
    }
?>