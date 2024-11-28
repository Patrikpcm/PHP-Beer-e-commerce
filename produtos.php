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
                <a class="navbar-brand me-5" href="index.html">BARÛK ALKH</a>
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
                                <li><a class="dropdown-item" href="produtos.html">Sesion</a></li>
                                <li><a class="dropdown-item" href="produtos.html">IPA</a></li>
                                <li><a class="dropdown-item" href="produtos.html">Imperial IPA</a></li>
                                <li><a class="dropdown-item" href="produtos.html">American Blonde Ale</a></li>
                                <li><a class="dropdown-item" href="produtos.html">American IPA</a></li>
                                <li><a class="dropdown-item" href="produtos.html">Belgian</a></li>
                                <li><a class="dropdown-item" href="produtos.html">Imperial Stout</a></li>
                                <li><a class="dropdown-item" href="produtos.html">Session IPA</a></li>
                                <li><a class="dropdown-item" href="produtos.html">Weizer Bier</a></li>
                                <li><a class="dropdown-item" href="produtos.html">Pilsen</a></li>
                                <li><a class="dropdown-item" href="produtos.html">Double IPA</a></li>
                                <li><a class="dropdown-item" href="produtos.html">Weiss</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="O que procura?" aria-label="Search">
                        <button class="btn btn-search" type="submit">Escavar</button>
                    </form>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"> <i class="fa-solid fa-right-to-bracket fa-xs me-1"></i> Conta </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ms-2" href="#"><i class="fa-solid fa-cart-shopping fa-xs me-1"></i> Geladeira </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="informacoes">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="index.php" class="nav-link mt-3"><i class="fa-solid fa-arrow-left fa-lg me-2"></i> Voltar</a>
                </div>
            </div>
        </div>
    </section>

    <section id="descricao_produto">
        <div class="container mt-4" >
            <div class="row">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-filtros">
                                <h2>Filtros</h2>
                                <h5 class="mt-4"><strong> Por estilo: </strong></h5>
                                <div class="box-padding-filtros">
                                    <div class="form-check">
                                        <input class="form-check-input custom-checkbox" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label custom-checkbox" for="flexCheckDefault"> Sesion </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> IPA </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> Imperial IPA </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> American IPA </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> American Blonde Ale </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> Belgian </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> Imperial Stout </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> Session IPA </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> Weizen Bier </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> Pilsen </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> Double IPA </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> Weiss </label>
                                    </div>
                                    <!--filtros
                                    por estilo:
                                        sesion
                                        ipa
                                        imperial ipa
                                        american india pale ale
                                        belgian strong golden ale
                                        american blonde ale
                                        imperial stout
                                        imperial ipa
                                        session ipa
                                        weizen bier
                                        pilsen
                                        double ipa
                                        weiss -->
                                </div> <!--Fim da div por estilo-->
                                <br>
                                <h5><strong> Por IBU: </strong></h5>
                                <div class="box-padding-filtros">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> 10 a 30 IBU </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> 30 a 60 IBU </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> 30 a 90 IBU </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> + 90 IBU </label>
                                    </div>
                                    <!--por IBU
                                        10 a 30 IBU
                                        30 a 60 IBU
                                        60 a 90 IBU
                                        + 90 IBU-->
                                </div> <!--Fim div por IBU-->

                                <br>
                                <h5><strong> Por ABV:</strong></h5>
                                <div class="box-padding-filtros">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> 1 a 7 % </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> 7 a 10 % </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> + 10 %</label>
                                    </div>
                                    <!--por ABV
                                        4 a 7 %
                                        7 a 10 %
                                        + 10 %-->
                                </div> <!--Fim div por ABV-->

                                <br>
                                
                                <h5><strong> Por preço: </strong></h5>
                                <div class="box-padding-filtros">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> de R$1 a R$14,99 </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> de R$15 a R$30,99 </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> de R$31 a R$50,99 </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> de R$51 a R$99,99 </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> a partir de R$100 </label>
                                    </div>
                                    <!-- por preço:
                                        de 1 até 14,99
                                        de 15 até 30,99
                                        de 31 até 50,99
                                        de 51 até 100,99
                                        a partir de 101-->
                                </div><!--Fim div Por preço-->
                            </div> <!--Fim da div que contem todos os checkbox-->
                        </div> <!--Fim da div col-md-12-->
                    </div> <!--fim da row-->
                    
                </div>
                   
                <!--Area de exibição dos produtos-->
                <div class="col-md-9">
                    <div class="row row-cols-1 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/bottle.png" class="card-img-top w-25 align-self-center" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div> <!--Fim do card-->
                        </div> <!--Fim da coluna-->
        
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/bottle.png" class="card-img-top w-25 align-self-center" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div> <!--Fim do card-->
                        </div> <!--Fim da coluna-->
        
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/bottle.png" class="card-img-top w-25 align-self-center" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div> <!--Fim do card-->
                        </div> <!--Fim da coluna-->
        
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/bottle.png" class="card-img-top w-25 align-self-center" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div> <!--Fim do card-->
                        </div> <!--Fim da coluna-->
        
                    </div> <!--Fim da row dos cards-->
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

    <!--Google icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=login" />

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