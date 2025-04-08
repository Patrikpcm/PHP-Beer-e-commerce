<?php
    //incluindo a classe db para ser usado no registro
    session_start();
    
    if(!isset($_SESSION['email'])){ //verificar se o usuário esta logado
        header('Location: index.php?erro=1');
    }

    require_once('bd.class.php');
    $objDb = new bd(); //criando um novo objeto
    $link = $objDb->conecta_mysql();

    $email = $_SESSION['email'];
    $id_usuario = $_SESSION['id_usuario'];
    
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND id_usuario = $id_usuario"; //query de pesquisa
    if ($resultado_id = mysqli_query($link, $sql)){ //pesquisando e retornando o valor da pesquisa para a variável
        $usuario = mysqli_fetch_array($resultado_id);
        
        echo('  <div class="row mt-4">
                    <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" name="nome" value="'.$usuario['nome'].'" placeholder="" required="required" disabled>
                    </div>
                </div>

                <div class="row mt-3">
                    <label for="email" class="col-sm-2 col-form-label">email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="'.$usuario['email'].'" placeholder="email@exemplo.com" required="required" disabled>
                    </div>
                </div>
                        
                <div class="row mt-3">
                    <label for="endereco" class="col-sm-2 col-form-label">Endereço</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="endereco" name="endereco" value="'.$usuario['endereco'].'" placeholder="" required="required" disabled>
                    </div>
                </div>

                <div class="row mt-3">
                    <label for="telefone" class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="telefone" name="telefone" value="'.$usuario['telefone'].'" placeholder="(ddd)telefone" pattern="[0-9]{11}" required="required" disabled>
                    </div>
                </div>

                <div class="row mt-3">
                    <label for="senha" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="senha" name="senha" value="'.$usuario['senha'].'" placeholder="Senha" required="required" disabled>
                    </div>
                </div>
            ');
    }
    else{
        echo 'Erro na consulta ao BD';
    }

?>