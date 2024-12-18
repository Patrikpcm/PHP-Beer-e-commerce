<?php
    session_start();
    
    if(!isset($_SESSION['carrinho'])){
        echo (' <div style="text-align: center;">
                    <h2>Você não adicionou nenhum item ao carrinho!</h2>
                </div>');
    }
    else{
        echo('  <table id="tabela-carrinho">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="titulo-carrinho" width="900">PRODUTO</th>
                            <th class="titulo-carrinho" width="150">PREÇO</th>
                            <th class="titulo-carrinho" width="150">QUANTIDADE</th>
                            <th class="titulo-carrinho" width="150">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>'
            );
        foreach ($_SESSION['carrinho'] as $item){
            echo ('     <tr class="tabela-linha">
                            <td> <button class="botao-remover-item" value="'.$item['id_produto'].'" onClick = onClickRemove(this)>X</button></td>
                            <td class="produto-carrinho"><a href="descricao_produto.php?'.$item['id_produto'].'"><img class="foto-carrinho" src="'.$item['foto'].'" alt="'.$item['titulo'].'">' .$item['titulo'].'</a></td>
                            <td class="produto-carrinho preco" id="preco" value="'.$item['preco'].'">R$ '.$item['preco'].'</td>
                            <td class="produto-carrinho align-self-center justify-content-center">
                                <input style="width: 4em; text-align: center;" class="quantidade" id="quantidade" value="'.$item['quantidade'].'" type="number" id="quantidade-item" min="1">
                            </td>
                            <td class="produto-carrinho total-produto" id="total-produto"></td>
                        </tr>');
        }

        echo ('     </tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="produto-carrinho-total total-pedido" id="total-pedido"> </td>
                    </tr>
                </table>');
    }
?>