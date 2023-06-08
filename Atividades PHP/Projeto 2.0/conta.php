<!DOCTYPE html>
<html lang="en">
    <?php
    
    session_start();
    $adm = $_SESSION['adm'];
    
    ?>
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
    <link rel="stylesheet" href="css/estilo_conta.css">

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
                                <a class="nav-link me-3" href="produtos.php">Produtos</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="nav-botão" class=" btn btn-outline-light navbotao transicao_color dropdown-toggle" href="#" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
                                
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                                    <li><a class="dropdown-item disabled" href="conta.php">Conta</a></li>
                                    <li><a class="dropdown-item" href="pedidos.php">Pedidos</a></li>
                                    <li><a class="dropdown-item" href="meus_produtos.php">Meus produtos</a></li>
                                    <?php if($adm){ ?>
                                    <li><a class="dropdown-item" href="php/informaçoesUsuarios.php">Infromaçoes Usuario</a></li>
                                    <?php } ?>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="php/deslog_cod.php">Sair</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div> 
                </div>
            </div>
        </nav>
    </header>
    <?php
    
    require_once 'php/conexao.php';

    $email_sess = $_SESSION['email'];
    $nome_sess = $_SESSION['nome'];
    $cpf_sess = $_SESSION['cpf'];
    $tell_sess = $_SESSION['telefone'];
    $adm = $_SESSION['adm'];
    echo $imgAvatar = $_SESSION['imagenAvatar'];



    ?>
    <section class=" mt-10 mb-5 ">
        <div class="bg-style container">
            <div class="row">
                <div class="col mt-4 mb-4 ms-4 me-4">
                    <?php if($adm){?>
                        <h4 class="mb-no fw-bold">Conta administrativa</h4>
                    <?php }else{ ?>
                        <h4 class="mb-no fw-bold">Meu perfil</h4>
                    <?php } ?>
                    <p class="p-style mb-6" >Informaçoes sobre a conta</p>
                    <div class="row ">
                        <div class=" col-8 " >
                            <form action="php/update_cod.php" method="post">
                                <div class="input-group flex-nowrap">
                                    <label class="ms-4 align-self-center text-secondary" for="nome">Nome do usuario </label>
                                    <input type="text" class="form-control ms-3 me-5" name="name" id="name" placeholder="<?php echo $nome_sess ?>" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <div class="input-group flex-nowrap mt-3 mb-3 " style="margin-left: 120px;">
                                    <label class="align-self-center text-secondary" for="cpf">CPF</label>
                                    <?php if($cpf_sess == null){ ?>
                                        <input type="number" class="form-control ms-3 " style="margin-right: 167px;" name="cpf" id="cpf" placeholder="Adcionar CPF" aria-label="Username" aria-describedby="addon-wrapping">
                                    <?php }else{ ?>
                                        <p class="ms-3 pt-3 text-secondary"><?php echo $cpf_sess ?></p> 
                                    <?php } ?>    
                                </div>
                                <div class="input-group flex-nowrap">
                                    <label class="align-self-center text-secondary" style="margin-left: 112px;" for="email">Email </label>
                                    <input type="email" class="form-control ms-3 me-5" name="email" id="email" placeholder="<?php echo $email_sess ?>" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <div class="input-group flex-nowrap mt-3" style="margin-left: 11px;">
                                    <label class="align-self-center text-secondary" for="tel">Numero do Usuario</label>
                                    <input type="number" class="form-control ms-3" style="margin-right: 59px;" name="telefone" id="telefone" placeholder="<?php if($tell_sess == null){ ?>Adcionar numero de telefone<?php }else{ ?><?php echo $tell_sess; } ?>" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                
                                <input class="btn btn-outline-success float-end me-5 mt-4" type="submit" value="Salvar alteraçoes">
                            </form>
                        </div>
                        <div class="col-4 bo-style">
                            <div class="d-flex justify-content-center mt-3">
                                <?php if(isset($_SESSION['vatar']) == false){?>
                                    <div class="rounded-circle bg-danger" style="width: 120px; height: 120px;"></div>
                                <?php }else{ ?>
                                    <!--<div class="rounded-circle" style="width: 120px; height: 120px; background: #D9D9D9 url(imagens/Avatar/<?php echo $imgAvatar ?>);"></div>-->
                                    <img class="rounded-circle" style="width: 120px; height: 120px;" src="imagens/Avatar/<?php echo $imgAvatar ?>" alt="">

                                <?php } ?>    
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#modalForm">Trocar imagem</button>
                                <div class="modal fade" id="modalForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form action="php/update_image.php" method="post" enctype="multipart/form-data" >
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="avatar" class="form-label">Escolha uma imagem</label>
                                                        <input class="form-control" type="file" name="avatar" id="avatar" accept="image/png, image/jpeg" >
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Feixar</button>
                                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center text-secondary mt-2">Imagens com maximo de 2M</p>
                        </div>
                    </div>
                    
                    <div class="mt-4" style="border-top: 1px solid #ddd6d6;">
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-store mt-4 me-2"></i><h2 class="text-center mt-3">adcionar produto</h2><i class="fas fa-store mt-4 ms-2"></i>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="adcionar_produto.php" class="btn btn-outline-secondary btn-lg mt-2">Adicionar</a>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>