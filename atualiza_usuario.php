<?php
    session_start();

    if(!isset($_SESSION['email'])){ //verificar se o usuário esta logado
        header('Location: index.php?erro=1');
    }

    require_once('bd.class.php');

    $id_usuario = $_SESSION['id_usuario'];
    $email = $_SESSION['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $senha = md5($_POST['senha']); //criptografia da senha utilizando o método de mão única md5 que gera um hash de 32 posições
    
    $id_usuario = $_SESSION['id_usuario'];

    $objDb = new bd(); //criando um novo objeto
    $link = $objDb->conecta_mysql(); //conectando ao bd

    $sql = "UPDATE usuarios SET endereco = '$endereco', telefone = '$telefone', senha = '$senha' WHERE email = '$email' AND id_usuario = $id_usuario";
    
    //executar a query criada
    if (mysqli_query($link, $sql)){
        echo "Usuário atualizado com sucesso!";
        header('Location: minha_conta.php?atualizado=1');
    }
    else{
        echo "Erro ao atualizar o usuário";
    }
?>