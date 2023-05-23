<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Bootstrap link -->
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
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top"> <!-- Navbar; cria uma navegação barra. navbar-expand-md; deixa responsivel -->
            <a href="index.html" class="navbar-brand"><img src="imagens/Vitinho.png" alt="" width="110"></a> <!-- Cria um pading alinhado-->
            <button class="navbar-toggler ml-auto  ">
                <span class="navbar-toggler-icon" data-toggle="collapse" data-target="#nav-principal"> 
                </span>
            </button>
      
      
            <div class="collapse navbar-collapse" id="nav-principal"> <!-- Collapse; esconde os itens. Navbar-collapse; conecta deixando bonitinho -->
                <ul class="navbar-nav ml-auto bordabotom">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produtos.html">Produtos</a>
                    </li>
                </ul>
            </div>      

    </header>

    <section class="m-top">
        <div class="container">
            <div class="row">
                <div class="col-md-7 roxo-sinza">
                    <a href="logar.html"><h2 class="h22_style">login</h2></a><h2 class=" bb_style txt_cent">Cadastrar</h2>
                    <form action="php/cadastrar_cod.php" method="post" class="">
                        <div class="sigle-inputs centrodiv">
                            <input required type="text" class="input" name="name" id='name' required /> <!-- Required obriga não estar vazio-->
                            <label for="Lembrar">Nome do Usuario</label>
                            
                        </div>
                        <?php
                        if(isset($_GET['Erro']) && $_GET['Erro'] == 'errorName'){?>
                            <p class=" mb-0 mt-0 mx-1 text-danger" style="font-size: 14px;">O nome do usuário pode conter apenas letras</p>
                        <?php } ?>

                        <div class="sigle-inputs centrodiv">
                            <input required type="text" class="input"  name="gmail" id="email" required/>
                            <label for="Lembrar">Email</label>
                        </div>
                        
                        <?php
                        if(isset($_GET['Erro']) && $_GET['Erro'] == 'errorEmailExistente'){?>
                            <p class=" mb-0 mt-0  text-danger" style="font-size: 14px; margin-right: 120px; margin-left: 4px;">Este Email já é existente.</p>
                        <?php } ?>
                        <?php
                        if(isset($_GET['Erro']) && $_GET['Erro'] == 'errorEmail'){?>
                            <p class=" mb-0 mt-0  text-danger" style="font-size: 14px; margin-right: 120px; margin-left: 4px;">O EMAIL do usuário foi digitado incorretamente, pode conter apenas letras minusculas sem simbolos como (/$@%&!^~).</p>
                        <?php } ?>
                        <div class="sigle-inputs centrodiv">
                            <input required type="password" class="input" name="password" id='password' required /> <!-- Required obriga não estar vazio-->
                            <label for="Lembrar">Senha</label>
                        </div>
                        <div class="sigle-inputs centrodiv">
                            <input required type="password" class="input" name="confirm_password" id='confirm_password' required /> <!-- Required obriga não estar vazio-->
                            <label for="Lembrar">Repetir Senha</label>
                        </div>
                        <div class="box centrodiv" >
                            <input id="checkbox" type="checkbox">
                            <label for="checkbox">Lembrar senha</label> <!-- Tem q ligar o "id" com o "For" nos imputs Box e Label-->
                        </div>
                        <div class="centrodiv">
                            <a href=""><i class="fa-brands fa-google fa-2x google transicao_color"></i></a>
                            <button type="submit" class="btn btn-outline-secondary transicao_color">Continuar</button>
                        </div>
                        
                    </form>  
                </div>
                <div class="col-5  d-none d-md-block" >
                    <img src="imagens/logo_real.png" class="img-fluid center" alt="">
                </div>
            </div>
        </div>
    </section>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html