<?php
session_start();

    require_once('bd.class.php');

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    //criando a query sql que verifica se o usuário esta cadastrado no BD
    $sql = "SELECT id_usuario, email FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $objDb = new bd();
    $link = $objDb->conecta_mysql();

    /*
    Os possível retornos de consultas do mysqli são:
    update = true/false
    insert = true/false
    select = FALSE/RESOURCE (uma referência para uma informação externa ao bd)
    delete = true/false
    */

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        /*
        IMPORTANTE! -   O retorno da função mysqli_query e da funçao mysqli_fetch_array
                        de nada tem a ver com o fato dos dados existirem ou não no BD,
                        eles estão relacionados com erros de sintaxe, conexão e/ou execução
                        da query no bd.
        */
        $dados_usuario = mysqli_fetch_array($resultado_id); //capturando informações de usuário em um array
        //var_dump($dados_usuario);

        //teste simples para verificar se o usuário existe
        if(isset($dados_usuario['email'])){ //isset verifica se uma variável esta ou não definida (tem valor diferente de null)
            //echo 'Usuário existe!';

            //superglobal session recebendo informações de dados_usuário  
            $_SESSION['id_usuario'] = $dados_usuario['id_usuario'];
            $_SESSION['email'] = $dados_usuario['email'];
            //echo $_SESSION['email'];
            //echo $_SESSION['id_usuario'];
            header('Location: index.php');
        }
        else{
            header('Location: index.php?erro=1'); //função header força o redirecionamento para uma página
                                                //além de redirecionar, estamos atribuindo um código de erro ao link
        }
    }
    else{
        echo "Erro na execução da consulta, favor entrar em contato com o admin do site.";
    }
    
?>