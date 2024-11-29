<?php
	/*
	O if ternário serve para que, caso a página seja acessada sem os dados de erro
	no link, não seja gerado código de erro mesmo assim.
	*/
	$erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Título-->
    <title>Barûk Alkh - O Pub de Khazad-Dûm!</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg nav-bg"><!--data-bs-theme="dark"-->
            <div class="container">
                <a class="navbar-brand me-5" href="index.php">BARÛK ALKH</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="index.php" class="nav-link" > Voltar</a>
            </div>
        </nav>
    </header>

    <section id="home">
        <div class=""></div>
            <div class="home-content">
                <div class="container">
                    <div class="row d-flex align-items-center" style="margin-top: 1%;">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center">
                                <h1> <strong class="home-text">Faça parte da família dos anões!</strong></h1>             
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 1%;">
                        <div class="col-md-6 d-flex">
                            <div class="col-md-12 align-self-center">
                                
                                <form id="form_cadastrese" action="registra_usuario.php" method="post">
                                    
                                    <div class="row mt-4">
                                        <label for="nome" class="col-sm-1 col-form-label">Nome</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nome" name="nome" placeholder="" required="required">
                                        </div>
                                    </div>
                
                                    <div class="row mt-3">
                                        <label for="email" class="col-sm-1 col-form-label">email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required="required">
                                        </div>
                                        <?php
                                            if($erro_email)
                                                echo '<p class="mt-2 text-center" style="color:#FF0000">O email informado já esta cadastrado.</p>';
                                        ?>
                                    </div>
                                    
                                    <div class="row mt-3">
                                        <label for="endereco" class="col-sm-1 col-form-label">Endereço</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="" required="required">
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <label for="telefone" class="col-sm-1 col-form-label">Telefone</label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(ddd)telefone" pattern="[0-9]{11}" required="required">
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <label for="senha" class="col-sm-1 col-form-label">Senha</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="required">
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <button type="submit" class="btn btn-search col-6 mt-4">Cadastre-se</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 mt-1 d-none d-md-flex justify-content-center">
                            <img class="align-self-center" src="assets/img/ba_dwarve.png" width="70%" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section id="informacoes">
        <div class="container">
            <div class="row mt-5 mb-3">
                <div class="col-md-12 d-flex justify-content-around">
                    <div class="">
                        <img src="assets/img/deliver.svg" class="me-1" height="35px" alt="">
                        Entrega para toda Khazad-Dûm
                    </div>
                    <div class="">
                        <i class="me-2 fa-solid fa-money-check-dollar fa-2x"></i>
                        Frete grátis <br><span style="font-size: smaller;">*Confira as regras</span>
                    </div>
                    <div class="">
                        <i class="me-2 fa-solid fa-credit-card fa-2x"></i>
                        Parcelamento em até 3x na Promissória dos Anões
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <footer id="rodape">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            INFORMAÇÕES 
                        </div>
                    </div>
                    <div class="row">                  
                        <div class="col-md-12 d-flex justify-content-center ms-1 mt-2">
                            <ul class="rodape-list">
                                <li><a href="" class="rodape-link">Quem somos</a></li>
                                <li><a href="" class="rodape-link">Política de privacidade</a></li>
                                <li><a href="" class="rodape-link">Trocas e Devoluções</a></li>
                                <li><a href="" class="rodape-link">Disque Choppe</a></li>
                                <li><a href="" class="rodape-link">Dúvidas frequentes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            CONTATO
                        </div>
                    </div>
                    <div class="row">                  
                        <div class="col-md-12 d-flex justify-content-center ms-1 mt-2">
                            <ul class="rodape-list">
                                <li>(41) 99999-9999</li>
                                <li>(41) 8888-8888</li>
                                <li>barukalkh@cervejaria.com.br</li>
                                <li>R. Mina de Mithril, n.2, Piso -26, Khazad-Dûm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            MÍDIAS SOCIAIS
                        </div>
                    </div>
                    <div class="row">                  
                        <div class="col-md-12 d-flex justify-content-center ms-1 mt-2">
                            <ul class="rodape-list">
                                <li><a href="" class="rodape-link"><i class="fa-brands fa-instagram fa-lg"></i></a> @barukalkh</li>
                                <li><a href="" class="rodape-link"><i class="fa-brands fa-facebook fa-lg"></i></a> /barukalkh</li>
                                <li><a href="" class="rodape-link "><i class="fa-brands fa-youtube fa-lg"></i></a> @barukalkh</li>
                                <li><a href="" class="rodape-link"><i class="fa-brands fa-tiktok fa-lg"></i></a> /barukalkh</li>
                                <li><a href="" class="rodape-link"><i class="fa-brands fa-linkedin fa-lg"></i></a> /barukalkh</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!--Fim da row de informações-->
            
            <div class="row mt-3 pt-2" style="border-top: 3px solid black;">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        &copy; 2024 - Patrik Luiz Gogola - Todos os direitos reservados
                    </div>
                </div>
            </div>
        </div> <!--Fim do container-->
    </footer>


     <!--Font Awesome-->
     <script src="https://kit.fontawesome.com/96d124ffc8.js" crossorigin="anonymous"></script>
    
     <!--Javascript-->
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <script type="text/Javascript" src="assets/js/scripts.js"></script>
    
     <!--Estilo CSS-->
     <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</body>
</html>