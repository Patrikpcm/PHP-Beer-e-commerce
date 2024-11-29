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
                <a class="navbar-brand me-5" href="#">BARÛK ALKH</a>
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

    <section id="descricao_produto">
        <div class="container mt-5" >
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            tipo
                        </div>
                    </div>
                    
                </div>
                   
                <div class="col-md-8">
                    descrição do produto
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
     <script type="text/Javascript" src="assets/js/scripts.js"></script>
    
     <!--Estilo CSS-->
     <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</body>
</html>