<?php

    include_once "php/conexao.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Kit icones-->
    <script src="https://kit.fontawesome.com/8e383bc8aa.js" crossorigin="anonymous"></script>

    <!-- Estiolo link-->
    <link rel="stylesheet" href="css/estilo-produtos.css">

    <!-- icone -->
    
    <link rel="icon" href="imagens/logo.png">

    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-personalit fixed-top"> <!-- Navbar; cria uma navegação barra. navbar-expand-md; deixa responsivel -->
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand"><img src="imagens/Vitinho.png" alt="" width="110"></a> <!-- Cria um pading alinhado-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-principal" aria-controls="nav-principal" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
          
                <div class="collapse navbar-collapse" id="nav-principal">
                    <div class="ms-auto"  > <!-- Collapse; esconde os itens. Navbar-collapse; conecta deixando bonitinho -->
                        <ul class="navbar-nav me-2 bordabotom">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active me-3" href="produtos.html">Produtos</a>
                            </li>
                            <form action="" class="d-flex icon-mgl me-3"> <!--- form-inline deixa os elementos na msma linha-->
                                <input type="text" class="form-control bordal" placeholder="pesquisar..."> <!-- Form-control formata o input para um estilo-->
                                <button class="btn btn-outline-light bordar"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                            <li class="nav-item dropdown">
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

                
            </div>
        </nav>
    </header>

    <section id="produtos" class="mb-mx">
        <div class="container">
            <h1 class="text-dark">Casacos</h1>
            <div class="row espaçamento-conteudos">
                <div class="col-xs-12">
                    <?php
                    $stmt = $pdo->prepare("SELECT * FROM produto");
                    $stmt->execute();
                    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    ?>
                    <div id="Carrosel1" class="carousel slide" data-bs-ride="carousel"> <!--Inicio Carrosel-->
                        <div class="carousel-inner">
                            <?php
                            $chunked_results = array_chunk($resultados, 5); // Divide o array de resultados em pedaços de tamanho 4
                            $active = true; // Flag para determinar se o item do carrossel é ativo ou não

                            foreach ($chunked_results as $chunk) {
                                echo '<div class="carousel-item ' . ($active ? 'active' : '') . '">'; // Definindo a classe 'active' para o primeiro item

                                    echo '<div class="card-group">';

                                        foreach ($chunk as $row) {
                                            $titulo = $row['titulo'];
                                            $descricao = $row['descricao'];
                                            $valor = $row['preco'];
                                            $imagem = $row['name_imagem'];
                                            

                                            echo '<div class="card">';
                                                echo '<a href="tela_produto.html" class="text-decoration-none">';
                                                    ?><img class="card-img-top" src="imagens/Camisa/<?php echo $imagem; ?>" alt="Card image cap"><?php
                                                    echo '<div class="card-body">';
                                                        echo '<h4 class="card-title text-center text-dark estilo-card-h4">' . $titulo . '</h4>';
                                                        echo '<p class="card-text text-muted estilo-card-p">Preço <span class="text-success h6 estilo-card-p">' . $valor . ' R$</span> <br> <small class="">12X sem juros</small></p>';
                                                    echo '</div>';
                                                echo '</a>';
                                            echo '</div>';
                                        }

                                    echo '</div>';
                                echo '</div>';

                                $active = false; // Desativa a classe 'active' para os próximos itens
                            }
                            ?>
                            
                        </div>

                        <button type="button" data-bs-target="#Carrosel1" class="carousel-control-prev prev-style-cinza" data-bs-slide="prev">
                            <i class="fa-solid fa-circle-chevron-left fa-3x" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button type="button" data-bs-target="#Carrosel1" class="carousel-control-next prev-style-cinza" data-bs-slide="next">
                            <i class="fa-solid fa-circle-chevron-right fa-3x" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-center mt-2">
                <a href="#" class="btn btn-outline-dark ">Ver mais</a>
            </div>
        </div>
    </section>
    
    
    
    
    
    
    
    <section id="produtos" class=" mb-mx">
        
        <div class="container"> <!-- Inicio container-->
            <h1 class="text-dark">Casacos</h1>
            <div class="row espaçamento-conteudos">
                
                <div class="col-xs-12" > <!-- Inicio colunas-->

                    <div id="Carrosel1" class="carousel slide" data-bs-ride="carousel"> <!--Inicio Carrosel-->
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <!-- Inicio item Carrosel-->
                                <div class="card-group" > <!-- Inicio Grup Card-->
                                    <div class="card "> <!--Inicio Card -->
                                        <a href="tela_produto.html" class="text-decoration-none" > <!--Inicio Card infomaçoes -->
                                            <img class="card-img-top " src="imagens/Casaco/Casaco.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center  text-dark estilo-card-h4">Smile</h4>
                                                <p class="card-text text-muted estilo-card-p"> <del class="text-danger h6 estilo-card-p">78R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small class="">12X sem juros</small> </p>
                                            </div>
                                        </a> <!-- Fim Card Informaçoes-->
                                    </div><!--Fim Card -->
                                    <div class="card ">
                                        <a href="tela_produto.html" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Casaco/Casaco4.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-dark estilo-card-h4" >Smiles</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">80R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="tela_produto.html" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Casaco/Casaco1.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Rabbit</h4>
                                                <p class="card-text text-decoration-none text-muted estilo-card-p"> <del class="text-danger h6 estilo-card-p">100R$</del> por <span class="text-success h6 estilo-card-p">80R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="tela_produto.html" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Casaco/Casaco2.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >American</h4>
                                                <p class="card-text text-decoration-none text-muted estilo-card-p "> <del class="text-danger h6 estilo-card-p">99R$</del> por <span class="text-success h6 estilo-card-p">80R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="tela_produto.html" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Casaco/Casaco3.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Social</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">59R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>                                            
                                </div> <!-- Fim Grup Card-->

                            </div><!-- Fim item Carrosel-->
                            <div class="carousel-item"> <!-- Inicio item Carrosel-->
                                <div class="card-group" > <!-- Inicio Grup Card-->
                                    <div class="card "> <!--Inicio Card -->
                                        <a href="" class="text-decoration-none" > <!--Inicio Card infomaçoes -->
                                            <img class="card-img-top img-fluid" src="imagens/Casaco/Casaco5.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Smile</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">78R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a> <!-- Fim Card Informaçoes-->
                                    </div><!--Fim Card -->
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Casaco/Casaco6.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Smiles</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">80R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Casaco/Casaco7.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Rabbit</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">100R$</del> por <span class="text-success h6 estilo-card-p">80R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Casaco/Casaco8.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >American</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">99R$</del> por <span class="text-success h6 estilo-card-p">80R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Casaco/Casaco9.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Social</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">59R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>                                            
                                </div> <!-- Fim Grup Card-->
                            </div><!-- Fim item Carrosel-->



                            <!-- Comandos JS carrosel-->
                            
                        </div>

                        <button  type="button" data-bs-target="#Carrosel1" class="carousel-control-prev prev-style-cinza"  data-bs-slide="prev">
                                
                            <i class="fa-solid fa-circle-chevron-left fa-3x" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button type="button" data-bs-target="#Carrosel1" class="carousel-control-next prev-style-cinza"   data-bs-slide="next">
                            <i class="fa-solid fa-circle-chevron-right fa-3x" aria-hidden="true"></i>

                            <span class="sr-only">Next</span>
                        </button>

                    </div> <!--Fim Carrosel-->

                    
                    
                </div><!-- Fim colunas-->
                
            </div>
        </div> <!-- Fim container-->
        
    </section >

    <section id="produtos2" class="mt-5 mb-5">
        
        <div class="container"> <!-- Inicio container-->
            <h1 class="text-marrom">Camisas</h1>
            <div class="row espaçamento-conteudos">
                
                <div class="col-xs-12" > <!-- Inicio colunas-->

                    <div id="Carrosel2" class="carousel slide" data-bs-ride="carousel"> <!--Inicio Carrosel-->
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <!-- Inicio item Carrosel-->
                                <div class="card-group" > <!-- Inicio Grup Card-->
                                    <div class="card "> <!--Inicio Card -->
                                        <a href="" class="text-decoration-none" > <!--Inicio Card infomaçoes -->
                                            <img class="card-img-top " src="imagens/Camisa/1.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Smile</h4>
                                                <p class="card-text text-muted estilo-card-p"> <del class="text-danger h6 estilo-card-p">78R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small class="">12X sem juros</small> </p>
                                            </div>
                                        </a> <!-- Fim Card Informaçoes-->
                                    </div><!--Fim Card -->
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Camisa/2.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Smiles</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">80R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Camisa/3.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Rabbit</h4>
                                                <p class="card-text text-decoration-none text-muted estilo-card-p"> <del class="text-danger h6 estilo-card-p">100R$</del> por <span class="text-success h6 estilo-card-p">80R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Camisa/4.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >American</h4>
                                                <p class="card-text text-decoration-none text-muted estilo-card-p "> <del class="text-danger h6 estilo-card-p">99R$</del> por <span class="text-success h6 estilo-card-p">80R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Camisa/5.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Social</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">59R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>                                            
                                </div> <!-- Fim Grup Card-->

                            </div><!-- Fim item Carrosel-->
                            <div class="carousel-item"> <!-- Inicio item Carrosel-->
                                <div class="card-group" > <!-- Inicio Grup Card-->
                                    <div class="card "> <!--Inicio Card -->
                                        <a href="" class="text-decoration-none" > <!--Inicio Card infomaçoes -->
                                            <img class="card-img-top img-fluid" src="imagens/Camisa/6.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Smile</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">78R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a> <!-- Fim Card Informaçoes-->
                                    </div><!--Fim Card -->
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Camisa/7.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Smiles</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">80R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Camisa/8.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Rabbit</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">100R$</del> por <span class="text-success h6 estilo-card-p">80R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Camisa/9.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >American</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">99R$</del> por <span class="text-success h6 estilo-card-p">80R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Camisa/10.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Social</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">59R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>                                            
                                </div> <!-- Fim Grup Card-->
                            </div><!-- Fim item Carrosel-->



                            <!-- Comandos JS carrosel-->
                            
                        </div>

                        <button  type="button" data-bs-target="#Carrosel2" class="carousel-control-prev prev-style-marrom" data-bs-slide="prev">
                                
                            <i class="fa-solid fa-circle-chevron-left fa-3x" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button  type="button" data-bs-target="#Carrosel2" class="carousel-control-next prev-style-marrom" data-bs-slide="next">
                            <i class="fa-solid fa-circle-chevron-right fa-3x" aria-hidden="true"></i>

                            <span class="sr-only">Next</span>
                        </button>

                    </div> <!--Fim Carrosel-->

                    
                    
                </div><!-- Fim colunas-->
                
            </div>
        </div> <!-- Fim container-->
        
    </section >

    <section id="produtos2" class="mt-5 mb-5">
        
        <div class="container"> <!-- Inicio container-->
            <h1 class="text-azul    ">Camisas</h1>
            <div class="row espaçamento-conteudos">
                
                <div class="col-xs-12" > <!-- Inicio colunas-->

                    <div id="Carrosel3" class="carousel slide" data-bs-ride="carousel"> <!--Inicio Carrosel-->
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <!-- Inicio item Carrosel-->
                                <div class="card-group" > <!-- Inicio Grup Card-->
                                    <div class="card "> <!--Inicio Card -->
                                        <a href="" class="text-decoration-none" > <!--Inicio Card infomaçoes -->
                                            <img class="card-img-top " src="imagens/Calças/2.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Smile</h4>
                                                <p class="card-text text-muted estilo-card-p"> <del class="text-danger h6 estilo-card-p">78R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small class="">12X sem juros</small> </p>
                                            </div>
                                        </a> <!-- Fim Card Informaçoes-->
                                    </div><!--Fim Card -->
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Calças/3.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Smiles</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">80R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Calças/4.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Rabbit</h4>
                                                <p class="card-text text-decoration-none text-muted estilo-card-p"> <del class="text-danger h6 estilo-card-p">100R$</del> por <span class="text-success h6 estilo-card-p">80R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Calças/5.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >American</h4>
                                                <p class="card-text text-decoration-none text-muted estilo-card-p "> <del class="text-danger h6 estilo-card-p">99R$</del> por <span class="text-success h6 estilo-card-p">80R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Calças/6.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Social</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">59R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>                                            
                                </div> <!-- Fim Grup Card-->

                            </div><!-- Fim item Carrosel-->
                            <div class="carousel-item"> <!-- Inicio item Carrosel-->
                                <div class="card-group" > <!-- Inicio Grup Card-->
                                    <div class="card "> <!--Inicio Card -->
                                        <a href="" class="text-decoration-none" > <!--Inicio Card infomaçoes -->
                                            <img class="card-img-top img-fluid" src="imagens/Calças/7.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Smile</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">78R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a> <!-- Fim Card Informaçoes-->
                                    </div><!--Fim Card -->
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Calças/8.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Smiles</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">80R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Calças/9.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Rabbit</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">100R$</del> por <span class="text-success h6 estilo-card-p">80R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Calças/10.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >American</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">99R$</del> por <span class="text-success h6 estilo-card-p">80R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="card ">
                                        <a href="" class="text-decoration-none" >
                                            <img class="card-img-top img-fluid" src="imagens/Calças/1.png"  alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title text-center text-decoration-none text-dark estilo-card-h4" >Social</h4>
                                                <p class="card-text text-decoration-none text-muted  estilo-card-p"> <del class="text-danger h6 estilo-card-p">59R$</del> por <span class="text-success h6 estilo-card-p">50R$</span> <br> <small>12X sem juros</small> </p>
                                            </div>
                                        </a>
                                        
                                    </div>                                            
                                </div> <!-- Fim Grup Card-->
                            </div><!-- Fim item Carrosel-->



                            <!-- Comandos JS carrosel-->
                            
                        </div>

                        <button  type="button" data-bs-target="#Carrosel3" class="carousel-control-prev prev-style-azul" data-bs-slide="prev">
                                
                            <i class="fa-solid fa-circle-chevron-left fa-3x" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button  type="button" data-bs-target="#Carrosel3" class="carousel-control-next prev-style-azul" data-bs-slide="next">
                            <i class="fa-solid fa-circle-chevron-right fa-3x" aria-hidden="true"></i>

                            <span class="sr-only">Next</span>
                        </button>

                    </div> <!--Fim Carrosel-->

                    
                    
                </div><!-- Fim colunas-->
                
            </div>
        </div> <!-- Fim container-->
        
    </section >
    
    
    
    
    
    
    
    
    
    <?php
        $stmt = $pdo->prepare("SELECT * FROM produto");
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <section id="produtos" class="mb-mx">
        <div class="container">
            <h1 class="text-marrom mb-3">Camisa</h1>
            <div class="row row-cols-1 row-cols-sm-4 g-4">
                <?php
                    $contador = 0;
                    foreach ($resultados as $row) {
                        if($contador >= 8){
                            break;
                        }
                        $id = $row['id'];
                        $titulo = $row['titulo'];
                        $descricao = $row['descricao'];
                        $valor = $row['preco'];
                        $imagem = $row['name_imagem'];
                        

                        echo '<div class="col">';
                            echo '<div class="card">';
                                echo '<a href="tela_produto.html" class="text-decoration-none">';
                                    ?><img class="card-img-top" src="imagens/Camisa/<?php echo $imagem; ?>" alt="Card image cap"><?php
                                    echo '<div class="card-body">';
                                        echo '<h4 class="card-title text-center text-dark estilo-card-h4">' . $titulo . '</h4>';
                                        echo '<p class="card-text text-muted estilo-card-p">Preço <span class="text-success h6 estilo-card-p">' . $valor . ' R$</span> <br> <small class="">12X sem juros</small></p>';
                                    echo '</div>';
                                echo '</a>';
                            echo '</div>';
                        echo '</div>';
                        $contador++;
                    } 
                ?>
                
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="#" class="btn btn-outline-dark ">Ver menos</a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
    