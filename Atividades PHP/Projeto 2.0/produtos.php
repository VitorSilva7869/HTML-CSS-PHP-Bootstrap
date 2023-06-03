
<?php

    include_once "php/conexao.php";
    session_start();
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
                                    <a class="nav-link" href="index.php" aria-current="page">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active me-3" href="produtos.php">Produtos</a>
                                </li>
                                <form action="" class="d-flex icon-mgl me-3"> <!--- form-inline deixa os elementos na msma linha-->
                                    <input type="text" class="form-control bordal" placeholder="pesquisar..."> <!-- Form-control formata o input para um estilo-->
                                    <button class="btn btn-outline-light bordar"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                                <li class="nav-item dropdown">
                                    <a id="nav-botão" class=" btn btn-outline-light navbotao transicao_color dropdown-toggle" href="#" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
                                    
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                                        <li><a class="dropdown-item" href="conta.php">Conta</a></li>
                                        <li><a class="dropdown-item" href="pedidos.php">Pedidos</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="php/deslog_cod.php">Sair</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> 

                    
                </div>
            </nav>
        </header>

        <section id="produtos" class="mb-mx">
            <div class="container">
                <h1 class="text-marrom">Casacos</h1>
                <div class="row espaçamento-conteudos">
                    <div class="col-xs-12">
                        <div id="Carrosel1" class="carousel slide" data-bs-ride="carousel"> <!--Inicio Carrosel-->
                            <div class="carousel-inner">
                                <?php
                                $camisa = 'camisa';
                                $stmt = $pdo->prepare("SELECT * FROM produto where estilo_roupa = :camisa");
                                $stmt->bindParam(':camisa', $camisa);

                                $stmt->execute();
                                $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
                                                $id_produto = $row['id'];
                                                

                                                echo '<div class="card">';
                                                    echo '<a href="tela_produto.php?id_produto='. $id_produto .'" class="text-decoration-none">';
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

                            <button type="button" data-bs-target="#Carrosel1" class="carousel-control-prev prev-style-marrom" data-bs-slide="prev">
                                <i class="fa-solid fa-circle-chevron-left fa-3x" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button type="button" data-bs-target="#Carrosel1" class="carousel-control-next prev-style-marrom" data-bs-slide="next">
                                <i class="fa-solid fa-circle-chevron-right fa-3x" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <a href="mais_produto.php?estilo_roupa=camisa" class="btn btn-outline-dark  ">Ver mais</a>
                </div>
            </div>
        </section>

        <section id="produtos" class="mb-5">
            <div class="container">
                <h1 class="text-dark">Casacos</h1>
                <div class="row espaçamento-conteudos">
                    <div class="col-xs-12">
                        <div id="Carrosel2" class="carousel slide" data-bs-ride="carousel"> <!--Inicio Carrosel-->
                            <div class="carousel-inner">
                                <?php

                                $estilo = 'moleton';
                                $stmt = $pdo->prepare("SELECT * FROM produto where estilo_roupa = :moleton");
                                $stmt->bindParam(':moleton', $estilo);

                                $stmt->execute();
                                $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
                                                $id_produto = $row['id'];
                                                

                                                echo '<div class="card">';
                                                    echo '<a href="tela_produto.php?id_produto='. $id_produto .'" class="text-decoration-none">';
                                                        ?><img class="card-img-top" src="imagens/Moleton/<?php echo $imagem; ?>" alt="Card image cap"><?php
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

                            <button type="button" data-bs-target="#Carrosel2" class="carousel-control-prev prev-style-cinza" data-bs-slide="prev">
                                <i class="fa-solid fa-circle-chevron-left fa-3x" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button type="button" data-bs-target="#Carrosel2" class="carousel-control-next prev-style-cinza" data-bs-slide="next">
                                <i class="fa-solid fa-circle-chevron-right fa-3x" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <a href="mais_produto.php?estilo_roupa=moleton" class="btn btn-outline-dark  ">Ver mais</a>
                </div>
            </div>
        </section>

        <section id="produtos" class="mb-5">
            <div class="container">
                <h1 class="text-azul">Casacos</h1>
                <div class="row espaçamento-conteudos">
                    <div class="col-xs-12">
                        <div id="Carrosel3" class="carousel slide" data-bs-ride="carousel"> <!--Inicio Carrosel-->
                            <div class="carousel-inner">
                                <?php

                                $estilo = 'calca';
                                $stmt = $pdo->prepare("SELECT * FROM produto where estilo_roupa = :calca");
                                $stmt->bindParam(':calca', $estilo);

                                $stmt->execute();
                                $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
                                                $id_produto = $row['id'];

                                                echo '<div class="card">';
                                                    echo '<a href="tela_produto.php?id_produto='. $id_produto .'" class="text-decoration-none">';
                                                        ?><img class="card-img-top" src="imagens/Calca/<?php echo $imagem; ?>" alt="Card image cap"><?php
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

                            <button type="button" data-bs-target="#Carrosel3" class="carousel-control-prev prev-style-azul" data-bs-slide="prev">
                                <i class="fa-solid fa-circle-chevron-left fa-3x" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button type="button" data-bs-target="#Carrosel3" class="carousel-control-next prev-style-azul" data-bs-slide="next">
                                <i class="fa-solid fa-circle-chevron-right fa-3x" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <a href="mais_produto.php?estilo_roupa=calca" class="btn btn-outline-dark  ">Ver mais</a>
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
        

    </body>
</html>