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
    <link rel="stylesheet" href="css/estilo_adcionar_produto.css">

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
                                <a class="nav-link me-3" href="produtos.html">Produtos</a>
                            </li>
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
            </div>
        </nav>
    </header>

        <section class=" mt-10 " style="margin-bottom: 110px;">
            <h1 class=" fw-bold text-center" >Adcionar produtos</h1>
            <div class="bg-style container">
                <form action="php/adcionar_prod_cod.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4 mt-3 mb-3">
                            <!--<img src="imagens/Casaco/Casaco.png" class="img-fluid" alt="">-->
                            <div class="">
                                <label for="img_prod" class="form-label">Escolha uma imagem</label>
                                <input class="form-control" type="file" name="img_prod" id="img_prod" accept="image/png, image/jpeg" >
                            </div>
                            <label for="select_roupa" class="form-label fw-bold mt-2">Tipo da Roupa</label>
                            <select class="form-select ms-2" name="select_roupa" id="select_roupa" aria-label="Default select example">
                                <option value="camisa">Camisa</option>
                                <option value="calca">Calca</option>
                                <option value="moleton">Moleton</option>
                                <option value="short">Short</option>
                            </select>
                        </div>
                        <div class="col-md-4 mt-3 mb-3 ">
                            
                            <div class="mb-3">
                                <label for="titulo" class="form-label fw-bold">Titulo</label>
                                <input type="text" class="form-control ms-2" id="titulo" name="titulo" placeholder="Exemplo: Camisa Cinza" aria-describedby="emailHelp">
                                
                                <label for="descricao" class="form-label fw-bold mt-2">Descrição</label>
                                <textarea class="form-control ms-2 " id="descricao" name="descricao" rows="3" placeholder="Exemplo: camisa se otima qualidade e confiança..." aria-describedby="emailHelp"></textarea>
                                
                            </div>
                            <label for="select" class="form-label fw-bold">Genero</label>
                            <select class="form-select ms-2" name="genero" aria-label="Default select example">
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Unissex">Unissex</option>
                            </select>
                            
                        </div>
                        
                        <div class="col-md-4 mt-3 mb-3">
                            <label for="tamanho" class="form-label fw-bold mb-0 mt-2">Tamanho disponiveis</label>
                            
                            <div class="d-flex">
                                <div class="ms-2">
                                    <label for="gg">GG</label><br>
                                    <input class="form-check-input mt-0 ms-1" type="checkbox" value="gg" name="tamanho[]" id="gg">
                                </div>
                                <div class="ms-2">
                                    <label for="g" class="ms-1">G</label><br>
                                    <input class="form-check-input mt-0 ms-1" type="checkbox" value="g" name="tamanho[]" id="g">
                                </div>
                                <div class="ms-2">
                                    <label for="m" class="ms-1">M</label><br>
                                    <input class="form-check-input mt-0 ms-1" type="checkbox" value="m" name="tamanho[]" id="m">
                                </div>
                                <div class="ms-2">
                                    <label for="p" class="ms-1">P</label><br>
                                    <input class="form-check-input mt-0 ms-1" type="checkbox" value="p" name="tamanho[]" id="p">
                                </div>
                                <div class="ms-2">
                                    <label for="pp">PP</label><br>
                                    <input class="form-check-input mt-0 " type="checkbox" value="pp" name="tamanho[]" id="pp">
                                </div>
                            </div>
                            
                            
                            <label for="titulo" class="form-label fw-bold">Preço</label>
                            <div class="input-group flex-nowrap">
                                <label class="ms-2 align-self-center text-secondary" for="valor">R$ </label>
                                <input type="number" step="0.01" min="0.01" class="form-control ms-2 me-3" name="valor" id="valor" placeholder="Preço do produto" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
        
                            <h6 class="text-center mt-3 fw-bold">Quantidade</h6>
                            <div class="btn-group d-flex justify-content-start" role="group" aria-label="Basic outlined example">
                                <button type="button" id="mais" class="btn btn-outline-secondary ms-5" >+</button>
                                <input type="number" class="" style="width: 60px;" id="quantidade" name="quantidade" value="" class="">
                                <button type="button" id="menos" class="btn btn-outline-secondary me-5">-</button>       
                            </div>
                            
                            <div class="d-flex justify-content-center" style="margin-top: 22px;">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-secondary" style="padding: 5px 80px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Adcionar<i class="fas fa-store ms-2"></i>
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Adcionar esse produto?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-success">Avançar</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
        
                        
                        </div>
                    </div>
                </form>
            </div>
        </section>  
































    <footer class=" bg-dark pt-5">
        <div class="container">
            <div class="row">
                <div id="contato" class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-4 posicao">
                    <ul>
                        <h4 class="tamanho-h4-lg tamanho-h4-xl ">Contato</h4>
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

        <script>
            let valor = 0;
            document.getElementById("mais").addEventListener("click", function() {
                valor++;
                document.getElementById("valor").textContent = valor;
            });
    
            document.getElementById("menos").addEventListener("click", function() {
            if (valor > 0) {
                valor--;
                document.getElementById("valor").textContent = valor;
            }
            });
    
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>