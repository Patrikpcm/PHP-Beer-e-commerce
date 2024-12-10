<?php
    
    require_once('bd.class.php');

    $objDb = new bd(); //criando um novo objeto
    $link = $objDb->conecta_mysql();

    $data = $_POST['data'];
    //$data = json_decode(stripslashes($_POST['data']));
    //var_dump($data);
    //echo $data[0]->name;
    //echo $data[0]->value;

    $sql = "SELECT u.nome AS usuario,
            a.avaliacao_text AS texto
            FROM avaliacoes_produtos a INNER JOIN usuarios u 
            ON a.id_usuario = u.id_usuario
            WHERE a.id_produto = '$data[0]->value'";

    //$sql = "SELECT id_usuario, avaliacao_text FROM avaliacao_produtos WHERE id_produto = '$data[0]->value'";

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        //verificando se existe algum resultado com esses filtros
        if(mysqli_num_rows($resultado_id) == 0){
            echo ('<div class="col-md-12 mt-3">');
            echo ('    <h5> Ainda não há nenhuma avaliação desse produto. Seja o primeiro a deixar sua opinião!</h5>');
            echo ('</div>');
        }
        else{
            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){ //navegando por todos os resultados
                echo (' <div class="col-md-12 avaliacao">');
                echo ('     <span class="usuario-texto">'.$registro['usuario'].'</span>');
                echo ('     <h5>'.$registro['texto'].'</h5>');
                echo (' </div>');
            }
        }
    }
    else{
        echo 'Erro na consulta de produtos no banco de dados.';
    }
?>  
