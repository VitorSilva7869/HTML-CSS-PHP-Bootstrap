<?php
    

    include_once "php/conexao.php";
    session_start();

    //Condiçoes para não auterar a URL
    $idsArrey = array();
    for($i = 1; $i <= 50; $i++){
        $idsArrey[] = $i;

    }

    //var_dump($idsArrey);
    
    $trueOrFalse = false;
    if(isset($_GET['id_produto'])){
        $id = $_GET['id_produto'];
        foreach($idsArrey as $idRep){

            if($id == $idRep){
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

    //$pasta = ucfirst($estilo);
    $id = $_GET['id_produto'];

    $stmt = $pdo->prepare("SELECT * FROM produto WHERE id = :id");
    $stmt->bindParam(':id', $id);

    $stmt->execute();
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($resultados as $row) {
        $titulo = $row['titulo'];
        $descricao = $row['descricao'];
        $valor = $row['preco'];
        $genero = $row['genero'];
        $tamanho1 = $row['tamanho'];
        $estilo_roupa = $row['estilo_roupa'];
        $imagem = $row['name_imagem'];
        $quantidade = $row['quantidade'];
        $id_produto = $row['id'];
    }
    $tamanho = explode(",",$tamanho1);
    $pasta =  ucfirst($estilo_roupa);

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
    <link rel="stylesheet" href="css/estilo_tela_produto.css">

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

                            <?php
                                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){?>
                                    <li class="nav-item me-3" >
                                        <a id="nav-botão" class="btn btn-outline-light navbotao transicao_color" href="logar.php">Entrar</a>
                                    </li>

                                <?php }else{?>
                                    <li class="nav-item dropdown me-3">
                                        <a id="nav-botão" class=" btn btn-outline-light navbotao transicao_color dropdown-toggle" href="#" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
                                        
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                                            <li><a class="dropdown-item" href="conta.php">Conta</a></li>
                                            <li><a class="dropdown-item" href="pedidos.php">Pedidos</a></li>
                                            <li><a class="dropdown-item" href="meus_produtos.php">Meus produtos</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="php/deslog_cod.php">Sair</a></li>
                                        </ul>
                                    </li>
                            <?php } ?>
                        </ul>
                    </div> 

                
            </div>
        </nav>
    </header>

    
    <form action="php/compra_cod.php?idProduto=<?php echo $id_produto; ?>" method="post">
        <section class=" mt-10 " style="margin-bottom: 170px;">
            <div class="bg-style container">
                <div class="row">
                    <div class="col-md-4 mt-3 mb-3">
                        <img src="imagens/<?php echo $pasta; ?>/<?php echo $imagem; ?>" class="img-fluid" alt="">

                    </div>
                    <div class="col-md-4 mt-3 mb-3">
                        <h5 class="font-weight-bold text-muted"><?php echo $titulo; ?></h5>
                        <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning mb-2"></i>
                        <p class="text-secondary mb-no"><?php echo $descricao; ?></p>
                        <a href="#" class="text-dark">Mais informaçoes</a>

                        <p class="text-secondary mt-2 mb-no">Gênero: <span class="fw-bold"><?php echo $genero; ?></span></p>
                        <p class="text-secondary  mb-no">Produtos disponiveis: <span class="fw-bold"><?php echo $quantidade; ?></span></p>
                        <p class="text-secondary ">Tamanho: </p>
                        
                        <?php foreach($tamanho as $roww){$row = strtoupper($roww)?>
                            
                            <input type="radio" class="btn-check" name="tamanho" value="<?php echo $row; ?>" id="<?php echo $row; ?>" autocomplete="off" checked>
                            <label class="btn btn-outline-secondary" for="<?php echo $row; ?>"><?php echo $row; ?></label>
                        
                        <?php } ?>
                        


                    </div>
                    <div class="col-md-4 mt-3 mb-3">
                        <!--<p class="text-decoration-line-through mb-no text-secondary">R$ 78,99</p>-->
                        <h2 class=" fw-bold mb-no  text-success"><?php echo $valor; ?>R$</h2>
                        <p class="fw-bold mb-no">a vista no cartão</p>
                        <div class="d-flex altura_quantidade">
                            <i class="fa-solid fa-credit-card text-secondary mt-1" style="width: 18px; height: 18px;"></i><p class="text-secondary ms-3" style="line-break: 15px;">até 12X sem JUROS</p>
                        </div>
                        <h6 class="text-center">Quantidade:</h6>
                        <div class="" style="margin: 0 130px;">
                            <input class="form-control " type="number" id="quantidade" name="quantidade" min="1" max="100">
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-secondary" id="onClick" style="padding: 5px 80px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Comprar<i class="fa-sharp fa-solid fa-basket-shopping ms-2"></i>
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Continuar?</h1>
                    
                                    </div>
                                    <div class="modal-body">
                                        
                                        <p class="text-secondary">Avançar com a compra: <span class="fw-bold"><?php echo $titulo; ?></span></p>
                                        <p class="text-secondary d-flex ">Tamanho: <span class="fw-bold ms-1" id="resultadoTamaho"></span></p>
                                        <p class="text-secondary">Quantidade: <span id="resultadoUnidade" class="fw-bold"></span></p>

                                        <p class="text-secondary">Total:<span id="resultado" class="fw-bold ms-1"></span></p>
                                        <script>


                                        document.getElementById("onClick").addEventListener("click", function() {
                                            var numero1 = <?php echo $valor; ?>;
                                            var numero2 = parseInt(document.getElementById("quantidade").value);
                                            var resultado = numero1 * numero2;
                                            document.getElementById("resultado").textContent = resultado;

                                            document.getElementById("resultadoUnidade").textContent = numero2;

                                            var tamanho = document.getElementsByName("tamanho");
                                            for (var i = 0; i < tamanho.length; i++) {
                                                if (tamanho[i].checked) {
                                                    var resultado = document.getElementById('resultadoTamaho');
                                                    resultado.innerHTML = tamanho[i].value;
                                                    break;
                                                }
                                            }
                                        });

                                        </script>
                                        
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                    <input type="submit" class="btn btn-success" value="avançar">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <script>

            /*function exibir() {
                var tamanho = document.getElementsByName('tamanho');
            
                for (var i = 0; i < tamanho.length; i++) {
                    if (tamanho[i].checked) {
                        var resultado = document.getElementById('resultado');
                        resultado.innerHTML = '' + tamanho[i].value;
                        break;
                    }
                }
            }*/
        </script>
    </form>


    <footer class="bg-dark pt-5">
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

    <!--<script>
        let valor = 0;

        document.getElementById("mais").addEventListener("click", function() {
        valor++;
        document.getElementById("valor").textContent = valor;
        document.getElementById("input-valor").value = valor;
        });

        document.getElementById("menos").addEventListener("click", function() {
        if (valor > 0) {
            valor--;
            document.getElementById("valor").textContent = valor;
            document.getElementById("input-valor").value = valor;
        }
        });-->

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>