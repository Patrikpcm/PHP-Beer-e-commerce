<?php
    session_start(); //iniciando as variáveis de sessão para podermos ter acesso

    !isset($_SESSION['email']) ? $logado = 0 : $logado=1; //Define qual dropdown será exibido para o usuário
    
    //area para recuperar o erro de falha de login
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!--Título-->
    <title>Barûk Alkh - O Pub de Khazad-dûm!</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg nav-bg"><!--data-bs-theme="dark"-->
            <div class="container">
                <a class="navbar-brand me-5" href="index.php">BARÛK ALKH</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lançamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Promoções</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Acessórios</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cervejas por estilo
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="O que procura?" aria-label="Search">
                        <button class="btn btn-search" type="submit">Escavar</button>
                    </form>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Minha conta </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Geladeira </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="descricao">
        <div class="container mt-5" >
            <div class="row" id="descricao_produto">
                
                <!--AQUI SERA INCLUÍDA FOTO E DESCRIÇÂO COMPLETA DO PRODUTO-->

            </div> <!--Fim da row 1-->

            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center" id="avaliacao_estrelas">
                        
                    <!--<i class="fa-solid fa-star estrela"></i>
                        <i class="fa-solid fa-star-half-stroke estrela"></i>
                        <i class="fa-regular fa-star estrela"></i>
                        <i class="fa-regular fa-star estrela"></i>
                        <i class="fa-regular fa-star estrela"></i> -->
                        
                    </div>
                </div>
            </div> <!--Fim da row 2-->

            <hr class="custom-hr mt-4">

            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        <h2 style="border-bottom: 3px solid rgb(207, 187, 0);">Avaliações</h2>
                    </div>                   
                </div>

                <div class="box-avaliacoes" id="box_comentarios">
                    <!-- AQUI SÃO INSERIDAS OS COMENTARIOS-->
                </div>
                
            </div> <!--Fim da row 2-->

            <hr class="custom-hr mt-4">

            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        <h2 style="border-bottom: 3px solid rgb(207, 187, 0)">Faça sua avaliação</h2>
                    </div>                   
                </div>
            </div>

            <div class="row">
            
                <form id="form-comentario" class="col-md-12 mt-4 d-flex">
                    <div class="col-md-8">
                        <label for="texto-comentario"><h5>Comentário</h5></label>
                        <input class="area-comentario" type="text" id="texto-comentario" name="texto-comentario" placeholder="Deixe um comentário" maxlength="200">   
                    </div>
                    <div class="col-md-2 rating">
                        <input type="radio" name="star" id="star1" value="1"><label for="star1"></label>
                        <input type="radio" name="star" id="star2" value="2"><label for="star2"></label>
                        <input type="radio" name="star" id="star3" value="3"><label for="star3"></label>
                        <input type="radio" name="star" id="star4" value="4"><label for="star4"></label>
                        <input type="radio" name="star" id="star5" value="5"><label for="star5"></label>
                    </div>
                    <div class="col-md-2">
                        <button type="button" id="btn-comentario" class="btn btn-comentario" <?=$logado == 0 ? disabled : enabled ?>>Enviar</button>
                        <?=$logado == 0 ? '<p style="color:#FF0000">Você precisa estar logado para deixar uma avaliação</p>' : '' ?> 
                    </div>
                </form>
                        
                <div id="cavalo"> 
                       
                </div>

            </div> <!--Fim da row-->
        </div><!--Fim do container-->
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
     <script type="text/Javascript" src="assets/js/descricao_produto.js"></script>
    
     <!--Estilo CSS-->
     <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</body>
</html>