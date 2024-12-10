<?php
    
    require_once('bd.class.php');

    $objDb = new bd(); //criando um novo objeto
    $link = $objDb->conecta_mysql();

    $data = $_POST['data'];
    //$data = json_decode(stripslashes($_POST['data']));
    //var_dump($data);
    //echo $data[0]->name;
    //echo $data[0]->value;

    $sql = "SELECT id_produto, AVG(avaliacao_nota) AS media FROM avaliacoes_produtos WHERE id_produto = '$data[0]->value' GROUP BY id_produto";

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        if(mysqli_num_rows($resultado_id) == 0){
            for($i = 0; $i<5; $i++){
                echo ('<i class="fa-regular fa-star estrela"></i>');
            }
        }
        else{
            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                $estrelas_inteiras = $registro['media'] / 1;
                ($registro['media'] % 1) >= 0.5 ? $estrelas_metade = 1 : $estrelas_metade = 0;
                
                for($i = 1; $i <= $estrelas_inteiras; $i++){
                    echo ('<i class="fa-solid fa-star estrela"></i>');
                }
                if($estrelas_metade == 1){
                    echo ('<i class="fa-solid fa-star-half-stroke estrela">');
                }
                $cont = $estrelas_inteiras + $estrelas_metade;
                while($cont < 5){
                    echo ('<i class="fa-regular fa-star estrela"></i>');
                    $cont++;
                }
            }
        }
    }
    else{
        echo 'Erro na consulta de produtos no banco de dados.';
    }
?>