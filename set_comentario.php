<?php
    session_start();

    if(!isset($_SESSION['email'])){ //verificar se o usuário esta logado
        header('Location: descricao_produto.php?erro=1');
    }

    require_once('bd.class.php');

    $objDb = new bd(); //criando um novo objeto
    $link = $objDb->conecta_mysql();

    $data = json_decode(stripslashes($_POST['data']));
    $id_produto = $_POST['id_produto'];
    $id_usuario = (int)$_SESSION['id_usuario'];
    $texto = (string)$data[0]->value;
    $nota = (int)$data[1]->value;
    $sql = "INSERT INTO avaliacoes_produtos VALUES(NULL, $id_produto, $id_usuario, '$texto', $nota)";

    $resultado_id = mysqli_query($link, $sql);

    if ($resultado_id){ //pesquisando e retornando o valor da pesquisa para a variável
        echo 'Inclusão de comentário efetuada com sucesso!';
    }
    else{
        echo 'Erro na consulta ao BD';
    }
?>