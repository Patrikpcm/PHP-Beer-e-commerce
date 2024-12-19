<?php
    session_start();
   
    $id_produto = $_POST['id_produto'];

    for($i = 0; $i<=count($_SESSION['carrinho']); $i++){
        if($_SESSION['carrinho'][$i]['id_produto'] == $id_produto){
            unset($_SESSION['carrinho'][$i]);
            break;
        }
    }    
    if(sizeof($_SESSION['carrinho']) <=0 ){ //se o carrinho estiver vazio eu libero a variável da session
        unset($_SESSION['carrinho']);
    }
    
?>