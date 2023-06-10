<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Kit icones-->
    <script src="https://kit.fontawesome.com/8e383bc8aa.js" crossorigin="anonymous"></script>

    <!-- Estiolo link-->
    <link rel="stylesheet" href="css/estilo_logar.css">

    <!-- icone -->
    
    <link rel="icon" href="imagens/logo.png">

    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">

</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-personalit fixed-top ">
            <div class="container"> <!-- container; cria a grid-->
                <a href="index.php" class="navbar-brand"><img src="imagens/Vitinho.png" alt="" width="110"></a> <!-- Cria um pading alinhado-->
                <button class="navbar-toggler ml-auto ">
                    <span class="navbar-toggler-icon" data-toggle="collapse" data-target="#nav-principal"> 

                    </span>
                </button>
            </div>
            
            <div class="collapse navbar-collapse" id="nav-principal">
                <ul class="navbar-nav ml-auto bordabotom">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produtos.php">Produtos</a>
                    </li>
                    <?php
                    session_start(); 
                    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){?>
                 

                    <?php }else{?>
                    <li class="nav-item dropdown ms-2 me-3">
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
            
            
        </nav>
    </header>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
    </svg>
    
    <section class="m-top ">
        <div class="container">
            <div class="row">
                <div class="col-md-7 roxo-sinza">
                    
                    <?php
                    if(isset($_GET['concluido']) && $_GET['concluido'] == 'concluidoMsg'){
                    ?>
                    <div class="alert alert-success d-flex align-items-center" style="width: 356px;" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <div>
                            Cadastro efetuado com sucesso
                        </div>
                        </div>

                    <?php } ?>
                    <h2 class="bb_style txt_cent mb-5">login</h2><a href="cadastrar.php"><h2 class="h22_style">Cadastrar</h2></a>
                    <form action="php/login_cod.php" method="post" class="">
                        
                        <div class="sigle-inputs centrodiv">
                            <input required type="text" class="input"  name="email" id="email"/>
                            <label for="Lembrar">Email</label>
                        </div>
                        <?php
                        if(isset($_GET['Erro']) && $_GET['Erro'] == 'errorEmail'){?>
                            <p class=" mb-0 mt-0  text-danger" style="font-size: 14px; margin-right: 120px; margin-left: 4px;">Email invalido</p>
                        <?php } ?>
                        <div class="sigle-inputs centrodiv">
                            <input required type="password" class="input" name="password" id='password2' required /> <!-- Required obriga não estar vazio-->
                            <label for="Lembrar">Senha</label>
                        </div>
                        <?php
                        if(isset($_GET['Erro']) && $_GET['Erro'] == 'errorPassword'){?>
                            <p class=" mb-0 mt-0  text-danger" style="font-size: 14px; margin-right: 120px; margin-left: 4px;">Senha não é válida</p>
                        <?php } ?>
                        <div class="box centrodiv" >
                            <input id="checkbox" type="checkbox">
                            <label for="checkbox">Lembrar senha</label> <!-- Tem q ligar o "id" com o "For" nos imputs Box e Label-->
                        </div>
                        <div class="centrodiv">
                            <a href=""><i class="fa-brands fa-google fa-2x google transicao_color"></i></a>
                            <button type="submit" class="btn btn-outline-secondary transicao_color">Continuar</button>
                        </div>
                        <a href="administrador.php" class="txt-secodary">Entrar como administrador</a>
                        
                    </form>  
                </div>
                <div class="col-5  d-none d-md-block" >
                    <img src="imagens/logo_real.png" class="img-fluid center" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php
    include('rodape.php');
    ?>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>