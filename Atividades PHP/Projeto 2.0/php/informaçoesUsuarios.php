<!DOCTYPE html>
<html lang="en">
    <?php
    
    session_start();
    include_once "conexao.php";

    $adm = $_SESSION['adm'];

    $stmt = $pdo->prepare("SELECT id,name,email,cpf,telefone FROM usuario");

    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
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
    <link rel="stylesheet" href="../css/estilo_conta.css">

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
                                <a class="nav-link" href="../index.php" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-3" href="../produtos.php">Produtos</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="nav-botão" class=" btn btn-outline-light navbotao transicao_color dropdown-toggle" href="#" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
                                
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="../conta.php">Conta</a></li>
                                    <li><a class="dropdown-item" href="../pedidos.php">Pedidos</a></li>
                                    <li><a class="dropdown-item" href="../meus_produtos.php">Meus produtos</a></li>
                                    <?php if($adm){ ?>
                                    <li><a class="dropdown-item disabled" href="informaçoesUsuarios.php">Infromaçoes Usuario</a></li>
                                    <?php } ?>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="deslog_cod.php">Sair</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div> 
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row ">
            <div class="col">
                <h2 class="text-center" style="margin-top: 130px;">Informaçoes dos Usuarios</h2>
                <table class="table table-dark table-striped table-bordered" style="margin-bottom: 100px;">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">CPF</th>
                            <th scope="col">TELEFONE</th>
                            <th scope="col "></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resultado as $row){
                            $idUsuario = $row['id'];
                            $nomeUsuario = $row['name'];
                            $emailUsuario = $row['email'];
                            $cpfUsuario = $row['cpf'];
                            $telefoneUsuario = $row['telefone'];
                            ?>
                            <tr>
                            <th scope="row"><?php echo $idUsuario ?></th>
                                <td><?php echo $nomeUsuario ?></td>
                                <td><?php echo $emailUsuario ?></td>
                                <td><?php echo $cpfUsuario ?></td>
                                <td><?php echo $telefoneUsuario ?></td>
                                <td><div class="d-flex justify-content-center excluir-usuario"><button class="btn btn-outline-secondary excluir-btn" data-id="<?php echo $idUsuario ?>"><i class="fa-solid fa-trash text-danger "></i></button></div></td>
                                <script>

                                        var excluirButtons = document.getElementsByClassName("excluir-btn");
                                        for (var i = 0; i < excluirButtons.length; i++) {
                                            excluirButtons[i].addEventListener("click", function() {
                                                var idUsuario = this.getAttribute('data-id');
                                                window.location.href = "excluir_usuario.php?idUsuario=" + idUsuario;
                                            });
                                        }

                                </script>
                            </tr>
                            
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    
    



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