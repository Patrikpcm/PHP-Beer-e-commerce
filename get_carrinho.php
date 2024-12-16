<?php
    session_start();
    
    if(!isset($_SESSION['carrinho'])){
        echo (' <div style="text-align: center;">
                    <h2>Você não adicionou nenhum item ao carrinho!</h2>
                </div>');
    }
    else{
        echo (' <table id="tabela-carrinho">
                    <tr>
                        <th></th>
                        <th class="titulo-carrinho" width="900">PRODUTO</th>
                        <th class="titulo-carrinho" width="150">PREÇO</th>
                        <th class="titulo-carrinho" width="150">QUANTIDADE</th>
                        <th class="titulo-carrinho" width="150">TOTAL</th>
                    </tr>');

        foreach ($_SESSION['carrinho'] as $item){
            echo ('<tr class="tabela-linha">
                            <td> <button class="botao-remover-item" value="'.$item['id_produto'].'" onClick = onClickRemove(this)>X</button></td>
                            <td class="produto-carrinho"><img class="foto-carrinho" src="'.$item['foto'].'" alt="'.$item['titulo'].'">' .$item['titulo'].'</td>
                            <td class="produto-carrinho" id="preco" value="'.$item['preco'].'">'.$item['preco'].'</td>
                            <td class="produto-carrinho align-self-center justify-content-center">
                                <input style="width: 4em; text-align: center;" id="quantidade" value="'.$item['quantidade'].'" type="number" id="quantidade-item" min="1">
                            </td>
                            <td class="produto-carrinho" id="produto-total">'.$item['preco'].'</td>
                        </tr>');
        }

        echo ('     <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="produto-carrinho-total" id="tabela-total">R$1000.00</td>
                    </tr>
                </table>');
    }
?>