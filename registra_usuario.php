<?php
    //incluindo a classe db para ser usado no registro
    require_once('bd.class.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $senha = md5($_POST['senha']); //criptografia da senha utilizando o método de mão única md5 que gera um hash de 32 posições

    $email_existe = false;

    $objDb = new bd(); //criando um novo objeto
    $link = $objDb->conecta_mysql(); //conectando ao bd

    //VERIFICAR SE O EMAIL JÁ EXISTE NO BD
    $sql = "SELECT * FROM usuarios WHERE email = '$email'"; //query de pesquisa
    if ($resultado_id = mysqli_query($link, $sql)){ //pesquisando e retornando o valor da pesquisa para a variável
        $dados_usuario = mysqli_fetch_array($resultado_id);
        if (isset($dados_usuario['email'])){
            //echo 'Email já cadastrado<br>';
            $email_existe = true;
        }//else{
           // echo 'Email não cadastrado, pode ser utilizado<br>';
        //}
    }
    else{
        echo 'Erro na consulta ao BD';
    }

    //Retornando erro caso o email já existe no bd
    if($email_existe){
        
        header('Location: cadastrese.php?erro_email=1&'); //forçando ir para a página inscrevase concatenando com erro
        
        die(); //interrompe o processamento, para não registrar o usuário no banco. Abaixo do die() nada é executado.
    }    

    //criar query de inserção
    $sql = "INSERT INTO usuarios VALUES (NULL, '$nome', '$email', '$endereco', '$telefone', '$senha')";

    //executar a query criada
    if (mysqli_query($link, $sql)){
        echo "Usuário registrado com sucesso!";
        header('Location: index.php?registrado=1');
    }
    else{
        echo "Erro ao registrar o usuário";
    }
?>