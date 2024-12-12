<?php
    session_start(); //iniciando as variáveis de sessão para podermos ter acesso

    !isset($_SESSION['email']) ? $logado = 0 : $logado=1; //Define qual dropdown será exibido para o usuário
    
    //area para recuperar o erro de falha de login
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
	$registrado = isset($_GET['registrado']) ? $_GET['registrado'] : 0;
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
        <nav class="navbar navbar-expand-lg nav-bg navbar-dark"><!--data-bs-theme="dark"-->
            <div class="container-fluid">
                <a class="navbar-brand me-5" href="index.php">BARÛK ALKH</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#lancamentos">Lançamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#promocoes">Promoções</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acessorios.php">Acessórios</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cervejas por estilo
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="produtos.php?IPA">IPA</a></li>
                                <li><a class="dropdown-item" href="produtos.php?Imperial IPA">Imperial IPA</a></li>
                                <li><a class="dropdown-item" href="produtos.php?American Blonde Ale">American Blonde Ale</a></li>
                                <li><a class="dropdown-item" href="produtos.php?American IPA">American IPA</a></li>
                                <li><a class="dropdown-item" href="produtos.php?Belgian">Belgian</a></li>
                                <li><a class="dropdown-item" href="produtos.php?Imperial Stout">Imperial Stout</a></li>
                                <li><a class="dropdown-item" href="produtos.php?Session IPA">Session IPA</a></li>
                                <li><a class="dropdown-item" href="produtos.php?Weizer Bier">Weizer Bier</a></li>
                                <li><a class="dropdown-item" href="produtos.php?Pilsen">Pilsen</a></li>
                                <li><a class="dropdown-item" href="produtos.php?Double IPA">Double IPA</a></li>
                                <li><a class="dropdown-item" href="produtos.php?Weiss">Weiss</a></li>
                                
                                <!--filtros
                                    por estilo:
                                        session
                                        ipa
                                        imperial ipa
                                        american india pale ale
                                        belgian strong golden ale
                                        american blonde ale
                                        imperial stout
                                        session ipa
                                        weizen bier
                                        pilsen
                                        double ipa
                                        weiss -->



                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="O que procura?" aria-label="Search">
                        <button class="btn btn-search" type="submit">Escavar</button>
                    </form>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                
                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa-solid fa-right-to-bracket fa-xs me-1"></i> Conta </a>
                            <?php
                                if($logado == 1){
                                    echo '  <ul class="dropdown-menu"> 
                                                <li><a class="dropdown-item" href="minha_conta.html">Minha Conta</a></li>
                                                <li><a class="dropdown-item" href="produtos.html">Meus pedidos</a></li>
                                                <form action="logout.php" method="POST">
                                                    <button type="submit" class="btn btn-search mt-2 ms-3">Sair</button>                                        
                                                </form>
                                            </ul>';
                                }
                                else{
                                    echo '<ul class="dropdown-menu '; if($erro==1 || $registrado==1){echo 'show';} echo'">
                                        <div class="col-md-12">
                                            <form id="form_login" action="login.php" method="POST">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="campo_email" name="email" placeholder="Email" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
                                                </div>
                                                <button type="buttom" class="btn btn-search mt-2 ms-1" id="btn_login">Entrar</button>
                                                <a href="cadastrese.php" role="buttom" class="btn btn-light mt-2 ms-1">Cadastrar</a>';
                                                
                                                if($erro == 1){
                                                    echo '<p class="ms-1 mt-3" style="color:#FF0000">Usuário ou senha inválidos</p> ';
                                                }
                                                if($registrado == 1){
                                                    echo '<p class="ms-2 mt-3" style="color:#0000CD">Bem vindo! Efetue login com suas credenciais.</font> ';
                                                }
                                             echo '   
                                            </form>
                                        </div>
                                    </ul>';
                                }
                            ?>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link ms-2" href="#"><i class="fa-solid fa-cart-shopping fa-xs me-1"></i> Geladeira </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="home">
        <div class="home-wrap">

            <img class="home-bg" src="assets/img/bn_dwarfs.jpeg"alt="">
        
            <div class="home-content">
                <div class="container">
                    <div class="row d-flex align-items-center" style="margin-top: 1%;">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center">
                                <h1> <strong class="home-text">Barûk Alkh - O Pub de Khazad-Dûm!</strong></h1>             
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center" style="margin-bottom: 1%;">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center">
                                <img src="assets/img/Baruk-Alkh_logo.png" width="25%" alt="">
                            </div>
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

    <section id="lancamentos">
        <div class="container" >
            <div class="row pt-2 mt-3 mb-2">
                <hr class="custom-hr">
            </div>
            <div class="row d-flex">
                <div class="col-md-3 align-items-center">
                    <div class="col-md-12">
                        <div >
                            <h1 class="mt-3"><strong>Lançamentos</strong></h1>
                            <img class="d-none d-md-block mt-4" src="assets/img/lancamento_dwarf.jpeg" width="100%"  alt="Anão com canecas de chopp">
                        </div>
                    </div>
                </div>

                <div class="col-md-9" >
                    <div class="row row-cols-1 row-cols-md-3 g-3" id="lista-lancamentos">
                        
                            <!--ÁREA ONDE SERÃO INSERIDOS OS LANÇAMENTOS-->
         

                    </div> <!--Fim da lista de lançamentos-->
                
                </div> <!--Fim da col-md-9 de lançamentos-->

            </div> <!--Fim da row Lançamentos-->
            
            <div class="row">
                <div class="col-md-12 d-flex align-self-center">
                    <a href="produtos.php" class="link-mais-produtos">Mais produtos</a>
                </div>
            </div>
        </div>
    </section>
    
    <section id="Promoções">
        <div class="container mt-5" >
            <div class="row pt-2 mt-3 mb-2">
                <hr class="custom-hr">
            </div>
            <div class="row d-flex">
                <div class="col-md-3 align-items-center">
                    <div class="col-md-12">
                        <div >
                            <h1 class="mt-3"><strong>Promoções</strong></h1>
                            <img class="d-none d-md-block mt-4" src="assets/img/grey_beard.jpeg" width="100%"  alt="Anão com canecas de chopp">
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row row-cols-1 row-cols-md-3 g-3" id="lista-promocoes">
                            <!--Area onde é exibido o conteúdo-->
                    </div> 
                </div>
            </div> <!--Fim da row Lançamentos-->
            
            <div class="row">
                <div class="col-md-12 d-flex align-self-center">
                    <a href="produtos.php" class="link-mais-produtos">Mais produtos</a>
                </div>
            </div>
        </div>
    </section>

    <section id="acessorios">
        <div class="container mt-5" >
            <div class="row pt-2 mt-3 mb-2">
                <hr class="custom-hr">
            </div>
            <div class="row d-flex">
                <div class="col-md-3 align-items-center">
                    <div class="col-md-12">
                        <div >
                            <h1 class="mt-3"><strong>Acessórios</strong></h1>
                            <img class="d-none d-md-block mt-4" src="assets/img/axe_shield.jpeg" width="100%"  alt="Anão com canecas de chopp">
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row row-cols-1 row-cols-md-3 g-3" id="lista-acessorios">
                            <!--Área onde é exibido o conteúdo PHP-->
                    </div> 
                
                </div>

                <div class="row">
                    <div class="col-md-12 d-flex align-self-center">
                        <a href="acessorios.php" class="link-mais-produtos">Mais produtos</a>
                    </div>
                </div>

            </div> <!--Fim da row Lançamentos-->
            
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
     <script type="text/Javascript" src="assets/js/index.js"></script>
    
     <!--Estilo CSS-->
     <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</body>
</html>