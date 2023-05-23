<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Bootstrap link -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Kit icones-->
    <script src="https://kit.fontawesome.com/8e383bc8aa.js" crossorigin="anonymous"></script>

    <!-- Estiolo link-->
    <link rel="stylesheet" href="css/estilo.css">

    <!-- icone -->
    
    <link rel="icon" href="imagens/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
    <title>VS Feshion</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-personalit fixed-top ">
            <div class="container"> <!-- container; cria a grid-->
                <a href="#" class="navbar-brand"><img src="imagens/Vitinho.png" alt="" width="110"></a> <!-- Cria um pading alinhado-->
                <button class="navbar-toggler ml-auto ">
                    <span class="navbar-toggler-icon" data-toggle="collapse" data-target="#nav-principal"> 

                    </span>
                </button>
            </div>
            
            <div class="collapse navbar-collapse" id="nav-principal">
                <ul class="navbar-nav ml-auto bordabotom">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contatos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produtos.html">Produtos</a>
                    </li>
                    <li class="nav-item" >
                        <a id="nav-botão" class="btn btn-outline-light navbotao transicao_color" href="logar.html">Entrar</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a id="nav-botão" class=" btn btn-outline-light navbotao transicao_color dropdown-toggle" href="#" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
                        
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                            <li><a class="dropdown-item" href="conta.html">Conta</a></li>
                            <li><a class="dropdown-item" href="pedidos.html">Pedidos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            

        </nav>
    </header>

    <section id="Home" class="espaçamento-conteudos">
        <div class="container bg-">
            <div class="row">
                <div class="col-md-6 d-flex"> 
                    <div class="align-self-center">
                        <h1 class="display-4">Roupas rústicas e casuais </h1>
                        <p>Mais de 1 milhão de vendas por semana, mostrando que nossos produtos é de qualidade com a maxima de sastifação. </p>

                        <form action="" class="mt-4 mb-4">
                            <div class="input-group input-group-lg">
                                <input type="text" placeholder="Seu Gmail" class="form-control">
                                    <button type="button" class="btn btn-primary ">Cadastre-se</button>
                            </div>
                        </form>

                        <p>Disponivel para
                            <a href="#" class="btn btn-outline-light transicao_color">
                                <i class="fa-brands fa-android fa-lg "></i>
                          
                            </a>

                            <a href="#" class="btn btn-outline-light transicao_color">
                              
                                <i class="fa-brands fa-apple fa-lg "></i>
                            </a>
                        </p>


                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img src="imagens/roupas-criadas-por-estilistas_8-removebg.png" alt="" class="" width="635px">
                    
                </div>

            </div>

        </div>
    </section>

    <!--</section id="produtos" class="">
        <div class="container">
            <div class="row espaçamento-conteudos">
                <div class="col-md-4 d-none d-md-block " >
                    <img src="imagens/3.png" alt="" class="img-fluid borda1">
                    <div class="card-img-overlay d-flex align-items-end justify-content-center">
                        <a href="" class="btn btn-outline-light btn-lg borda transicao_color ">Ver mais</a>
                    </div>
                </div>
                <div class="col-md-4 d-none d-md-block" >
                    <img src="imagens/1.png" alt="" class="img-fluid borda1">
                    <div class="card-img-overlay d-flex align-items-end justify-content-center">
                        <a href="" class="btn btn-outline-light btn-lg borda transicao_color">Ver mais</a>
                    </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <img src="imagens/2.png" alt="" class="img-fluid borda1">
                    <div class="card-img-overlay d-flex align-items-end justify-content-center">
                        <a href="" class="btn btn-outline-light btn-lg borda transicao_color">Ver mais</a>
                    </div>
                </div>
            </div>
            
        </div>
    <section >-->

    <section class="bg-light" id="sobre">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-none d-lg-block">
                    <img src="imagens/colorido.png" class="img-fluid img1" alt="">
                </div>
                <div class="col-lg-6 col-md-12">
                    <h1>Sobre</h1>
                    <h2>Nossa marca</h2>
                    <p>Nossa marca esta no mercado a 2 anos de muitas vitoria empresarial no ramo de roupas rusticas, trabalhada no estilo não padronizado.</p>
                    <h2>Historia</h2>
                    <p>Começamos com uma loja pequena na Bahia inalgurada na baixa do povo com 3 funcionarios, ao decorrer do tempo fomos reenventando em designer nunca visto antes na região.</p>
                    <h2>Produtos</h2>
                    <p >Nossos produtos são de alta qualidade entregada em qualquer região do brasil.</p>
                    
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5 mb-5 ">
                    <div class="d-flex justify-content-center card">
                        <img src="imagens/VS FESHION.png" class="img-fluid img2 d-flex justify-content-center" alt="">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <a href="" class="btn btn-light btn-lg bodradius ">Ver mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="info" class="bg-white">
        <div class="container">
            <div class="row justify-content-center align-items-center g-2 pt-5">
                <div class="col-lg-4 text-center" >
                    <i class="fa-solid fa-credit-card fa-3x mb-3 text-dark"></i>
                    <p class="text-dark" style="font-size: 24px;">Escolha como pagar</p>
                    <p class="pb-4 text-secondary">No VS Feshion você paga com cartão, boleto ou Pix. Você também pode pagar em até 12x no boleto.</p>

                </div>
                <div  class="col-lg-4 text-center">
                    <i class="fa-solid fa-truck-fast fa-3x mb-3 text-dark"></i>
                    <p class="text-center text-dark" style="font-size: 24px;">Frete grátis a partir de R$ 50</p>
                    <p class="pb-4 text-dark">Só por estar cadastrado no Mercado Livre, você tem frete grátis em milhares de produtos. É um benefício do Mercado Pontos.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa-solid fa-lock fa-3x mb-3 text-dark"></i>
                    <p class="text-center text-dark" style="font-size: 24px;">Segurança, do início ao fim</p>
                    <p class="pb-4 text-secondary">Você não gostou do que comprou? Devolva! No Mercado Livre não há nada que você não possa fazer, porque você está sempre protegido.</p>

                </div>
            
            </div>
        </div>
    </section>

    <footer class="bg-dark pt-5">
        <div class="container">
            <div class="row">
                <div id="contato" class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-4 posicao">
                    <ul>
                        <h4 class="tamanho-h4-lg tamanho-h4-xl ">Numeros de contato</h4>
                        <li><p class="tamanho-font-lg tamanho-font-xl">(71) 9136-7621</p></li>
                        <li><p class="tamanho-font-lg tamanho-font-xl">(71) 9136-7621</p></li>
                        <li><p class="tamanho-font-lg tamanho-font-xl">(71) 9136-7621</p></li>
                        <li><p class="tamanho-font-lg tamanho-font-xl">(71) 9136-7621</p></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 d-none col-md-3 d-md-block">
                    <ul class="">
                        <h4 class="tamanho-h4-lg tamanho-h4-xl">Compania</h4>
                        <li><a class="tamanho-font-lg tamanho-font-xl" href="">Sobre</a></li>
                        <li><a class="tamanho-font-lg tamanho-font-xl" href="">emprego</a></li>
                        <li><a class="tamanho-font-lg tamanho-font-xl" href="">Emprensa</a></li>
                        <li><a class="tamanho-font-lg tamanho-font-xl" href="">Novidades</a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 d-none col-md-3 d-md-block">
                    <ul>
                        <h4 class="tamanho-h4-lg tamanho-h4-xl">Novidades</h4>
                        <li><a class="tamanho-font-lg tamanho-font-xl" href="">Roupas</a></li>
                        <li><a class="tamanho-font-lg tamanho-font-xl" href="">Acesorios</a></li>
                        <li><a class="tamanho-font-lg tamanho-font-xl" href="">Calçados</a></li>
                        <li><a class="tamanho-font-lg tamanho-font-xl" href="">Moda</a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-8">
                    <div class="float-sm-right posicao mt-xs">
                        <a href=""><i class="fa-brands fa-facebook icon-xl icon-lg text-white"></i></a>
                        <a href=""><i class="fa-brands fa-instagram icon-xl icon-lg ml-4 text-white"></i></a>
                        <a href=""><i class="fa-brands fa-twitter icon-xl icon-lg ml-4 text-white"></i></a>
                    </div>
                    
                </div>
            </div>
        </div>
      
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>


</html>