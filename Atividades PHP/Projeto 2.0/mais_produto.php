<?php
    

    include_once "php/conexao.php";
    session_start();

    //Condiçoes para não auterar a URL
    $tipos = array('camisa', 'moleton', "calca");
    
    $trueOrFalse = false;
    if(isset($_GET['estilo_roupa'])){
        $estilo = $_GET['estilo_roupa'];
        foreach($tipos as $tipoArrey){

            if($estilo == $tipoArrey){
                $trueOrFalse = true;
                break;
            }
        }
        if($trueOrFalse == false){
            header("location: produtos.php");
        }
    }else{
        header("location: produtos.php"); 
    }
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
                                    <a class="nav-link active me-3" href="produtos.php">Produtos</a>
                                </li>
                                <form action="pesquisa_especifico.php?estilo=<?php echo $estilo;?>" method="post" class="d-flex icon-mgl me-3"> <!--- form-inline deixa os elementos na msma linha-->
                                    <input type="text" class="form-control bordal" value="" name="pesquisa" placeholder="pesquisar..."> <!-- Form-control formata o input para um estilo-->
                                    <button type="submit" class="btn btn-outline-light bordar"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                                <li class="nav-item dropdown">
                                    <a id="nav-botão" class=" btn btn-outline-light navbotao transicao_color dropdown-toggle" href="#" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
                                    
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                                        <li><a class="dropdown-item" href="conta.php">Conta</a></li>
                                        <li><a class="dropdown-item" href="pedidos.php">Pedidos</a></li>
                                        <li><a class="dropdown-item" href="meus_produtos.php">Meus produtos</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="php/deslog_cod.php">Sair</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> 

                    
                </div>
            </nav>
        </header>

        <?php
        //Botar em maiusculo para procurar pasta imagem
        $pasta = ucfirst($estilo);

        $stmt = $pdo->prepare("SELECT * FROM produto WHERE estilo_roupa = :estilo");
        $stmt->bindParam(':estilo', $estilo);

        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <section id="produtos" class="mb-mx">
            <div class="container">
                <h1 class="text-dark mb-3"><?php echo $pasta;?></h1>
                <div class="row row-cols-1 row-cols-sm-4 g-4">
                    <?php
                        //$contador = 0;
                        foreach ($resultados as $row) {
                            /*if($contador >= 8){
                                break;
                            }*/

                            $id = $row['id'];
                            $titulo = $row['titulo'];
                            $descricao = $row['descricao'];
                            $valor = $row['preco'];
                            $imagem = $row['name_imagem'];
                            

                            echo '<div class="col">';
                                echo '<div class="card">';
                                    echo '<a href="tela_produto.php?id_produto='. $id .'" class="text-decoration-none">';
                                        ?><img class="card-img-top" src="imagens/<?php echo $pasta; ?>/<?php echo $imagem; ?>" alt="Card image cap"><?php
                                        echo '<div class="card-body">';
                                            echo '<h4 class="card-title text-center text-dark estilo-card-h4">' . $titulo . '</h4>';
                                            echo '<p class="card-text text-muted estilo-card-p">Preço <span class="text-success h6 estilo-card-p">' . $valor . ' R$</span> <br> <small class="">12X sem juros</small></p>';
                                        echo '</div>';
                                    echo '</a>';
                                echo '</div>';
                            echo '</div>';
                            //$contador++;
                        } 
                    ?>
                    
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a href="produtos.php" class="btn btn-outline-dark ">Ver menos</a>
                </div>
            </div>
        </section>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        

    </body>
</html>