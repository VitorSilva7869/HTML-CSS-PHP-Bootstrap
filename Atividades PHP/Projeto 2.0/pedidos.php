<?php
    require_once "php/conexao.php";
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
    <link rel="stylesheet" href="css/estilo_pedido.css">

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
                <a href="index.php" class="navbar-brand"><img src="imagens/Vitinho.png" alt="" width="110"></a> <!-- Cria um pading alinhado-->
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
                                    <li><a class="dropdown-item" href="conta.php">Conta</a></li>
                                    <li><a class="dropdown-item disabled" href="pedidos.php">Pedidos</a></li>
                                    <li><a class="dropdown-item" href="meus_produtos.php">Meus produtos</a></li>
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

    <section class=" mt-10 mb-5 ">
        <h1 class=" fw-bold text-center" >Pedidos</h1>
        <div class="bg-style container">
            <div class="row">
                <div class="col">
                    <?php  
                        //Consultar SQL
                        $id_Usuario = $_SESSION['id'];

                        $sql ='SELECT v.id, p.titulo, p.name_imagem, p.estilo_roupa, v.quantidade, v.total, v.tamanho, v.produto_id
                            FROM venda v
                            INNER JOIN produto p ON v.produto_id = p.id
                            WHERE v.usuario_id = :usuario_id';

                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(':usuario_id', $id_Usuario);
                        $stmt->execute();

                        if ($stmt->rowCount() > 0) {
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $estilo_roupa = $row['estilo_roupa'];
                                $pasta =  ucfirst($estilo_roupa);
                    ?>
                    <div class=" d-flex mt-4 mb-4 ms-1 me-5 " >
                        <div class=" me-4">
                            <img src="imagens/<?php echo $pasta; ?>/<?php echo $row['name_imagem'] ?>" class="" style="width: 100px; height: 100px;" alt="">
                        </div>
                        <div class="">
                            <h4 class="text-secondary fw-bold mb-no"><?php echo $row['titulo'] ?></h4>
                            <p class="text-secondary mb-no">Tamanho: <span class="fw-bold"><?php echo $row['tamanho'] ?></span></p>
                            <p class="text-secondary mb-no">Quantidade: <span class="fw-bold"><?php echo $row['quantidade'] ?> Unidades</span></p>
                            <p class="text-secondary mb-no">Valor total: <span class="fw-bold"><?php echo $row['total'] ?></span></p>

                        </div>
                        <div class="ms-auto align-self-center ">
                            <a href="tela_produto.php?id_produto=<?php echo $row['produto_id'] ?> " class="btn btn-outline-secondary" style="padding: 5px 10px;">
                                Comprar mais<i class="fa-sharp fa-solid fa-basket-shopping ms-2"></i>
                            </a>
                            
                        </div>
                    </div>
                    <?php }}else{?>
                        <div class="" style="margin: 60px 0;" role="alert">
                            <h2 class="text-center">Nenhum produto comprado</h2>
                        </div>
                    <?php } ?> 
                </div>
            </div>
        </div>
    </section>
    
    <footer style="margin-top: 130px;" class=" bg-dark pt-5">
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