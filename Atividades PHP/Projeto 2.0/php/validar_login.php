<?php
    session_start();
    $usuario_autenticado = null;


    $logar= array(
        array('id' => 1, 'email' => 'vitin7654@gmail.com', 'senha' => '21112004'),
        array('id' => 2, 'email' => 'lucas27@gmail.com', 'senha' => '21112004HG')
    );
    print_r($logar);


    $usuario_logado = false;
    foreach($logar as $logarusuario){
        if($logarusuario['email'] == $_POST['email'] && $logarusuario['senha'] == $_POST['senha']){
            $usuario_logado = true;
            $usuario_autenticado = true;

        }
    }

    if($usuario_logado){
        $_SESSION['autenticado'] = 'Sim';
        echo 'usuario logado';
        header('Location: index.php');
    }else{
        $_SESSION['autenticado'] = 'Não';
        echo 'usuario não logado';
        header('Location: logar.php?login=ERRO');
    }   

?>