<?php
    session_start();

    if(!isset($_SESSION['email'])){ //verificar se o usuário esta logado
        header('Location: index.php?erro=1');
    }

    require_once('bd.class.php');

    $objDb = new bd(); //criando um novo objeto
    $link = $objDb->conecta_mysql();

    $data = json_decode(stripslashes($_POST['data']));
    $id_produto = $_POST['id_produto'];
    var_dump($data);
    var_dump($id_produto);
    //echo $data[0]->name;
    //echo $data[0]->value;

    if(!$data){
        //não há filtro aplicado, mostra todas as cervejas
        //$sql = "INSERT INTO tweet(id_usuario, tweet) VALUES ($id_usuario, '$texto_tweet')";
        $sql = "SELECT * FROM produtos WHERE categoria = 'cerveja'"; 
    }
    else{
        echo "TEM DADOS";
    }

    $resultado_id = mysqli_query($link, $sql);
    header('Location: descricao_produto.php?9');
    
?>