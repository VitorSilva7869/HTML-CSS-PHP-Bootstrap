<?php

    require_once "conexao.php";
    session_start();
    //print_r($_SESSION);
    

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //Verifica se a variavel esta vazio, se SIM ele adciona a variavel guardada na sessao
        if(empty(trim($_POST["name"]))){
            $name = $_SESSION["nome"];
        }else{
            $name = trim($_POST["name"]);
        }
        if(empty(trim($_POST["email"]))){
            $email = $_SESSION["email"];
        }else{
            $email = trim($_POST["email"]);
        }
        if(empty(trim($_POST["cpf"]))){
            $cpf = $_SESSION["cpf"];
        }else{
            $cpf = trim($_POST["cpf"]);
        }

        
        $telefone = trim($_POST["telefone"]);
        //$imagem_avatar = $_FILES["avatar"];
        //$temp_imagem_avatar = file_get_contents($imagem_avatar['tmp_name']);
        

        //var_dump($imagem_avatar);
        //Salvando o ID
        $id = $_SESSION["id"];

        //Preparando uma declaração
        $sql = "UPDATE usuario SET name = :name, email = :email, cpf = :cpf, telefone = :telefone WHERE id = :id";

        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(':name', $param_name, PDO::PARAM_STR);
            $stmt->bindParam(':email', $param_email, PDO::PARAM_STR);
            $stmt->bindParam(':cpf', $param_cpf, PDO::PARAM_STR);
            $stmt->bindParam(':telefone', $param_telefone, PDO::PARAM_STR);
            $stmt->bindParam(':id', $param_id, PDO::PARAM_STR);
            //$stmt->bindParam(':imagem', $param_imagemAvatar, PDO::PARAM_LOB);

            $param_name = $name;
            $param_email = $email;
            $param_cpf = $cpf;
            $param_telefone = $telefone;
            $param_id = $id;
            //$param_imagemAvatar = $temp_imagem_avatar;

            //Atualizar sessão
            $_SESSION['nome'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['cpf'] = $cpf;
            $_SESSION['telefone'] = $telefone;
            //$_SESSION['imagem'] = $imagem_avatar;
            
            

            // Tente executar a declaração preparada
            if($stmt->execute()){
                echo 'certo';

                header("location: ../conta.php?concluido=concluidoMsg"); 
            } else{     
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            unset($stmt);
        }
        unset($pdo);
    }

?>