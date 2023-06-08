<?php

    require "conexao.php";
    session_start();

    if($_SERVER['REQUEST_METHOD' ] == "POST"){
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $genero = $_POST['genero'];
        $tamanho_antes = $_POST['tamanho'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];
        $tipoRoupa= $_POST['select_roupa'];
        $adm = $_SESSION['adm'];
        if($adm){
            $iD = $_SESSION["id"];
            $tlvz = "UPDATE produto set administrador_id = :idAdministrador where titulo =:titulo";
            echo 'ADM';
        }else{
            $iD = $_SESSION["id"];
            $admID = 1;
            $tlvz = "UPDATE produto SET usuario_id = :idUsuario, administrador_id = :idAdministrador WHERE titulo = :titulo";
            echo 'Usuario';
        }

        $tamanho = implode(', ', $tamanho_antes);

        // Salvando a imagem
        $imagem_name = $_FILES["img_prod"]["name"];
        $imagem_type = $_FILES["img_prod"]["type"];
        $imagem_tmp = $_FILES["img_prod"]["tmp_name"];
        $temp_imagem_avatar = file_get_contents($imagem_tmp);
        echo $tamanho;

        /*foreach($tamanho as $tamanho){
            echo $tamanho;
        }*/

        $sql = "INSERT INTO produto (titulo, descricao, genero, tamanho, preco, quantidade, name_imagem, type_imagem, estilo_roupa) VALUE (:titulo, :descricao, :genero, :tamanho, :valor, :quantidade, :name_imagem, :type_imagem, :estilo_roupa )";
        
        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":titulo", $titulo, PDO::PARAM_STR);
            $stmt->bindParam(":descricao", $descricao, PDO::PARAM_STR);
            $stmt->bindParam(":genero", $genero, PDO::PARAM_STR);
            $stmt->bindParam(":tamanho", $tamanho, PDO::PARAM_STR);
            $stmt->bindParam(":valor", $valor, PDO::PARAM_STR);
            $stmt->bindParam(":quantidade", $quantidade, PDO::PARAM_STR);
            $stmt->bindParam(":estilo_roupa", $tipoRoupa, PDO::PARAM_STR);

            
            $stmt->bindParam(':name_imagem', $imagem_name, PDO::PARAM_STR);
            $stmt->bindParam(':type_imagem', $imagem_type, PDO::PARAM_STR);

            echo $imagem_name;
            echo $pasta = ucfirst($tipoRoupa);
            
            move_uploaded_file($imagem_tmp, '../imagens/'. $pasta .'/'.$imagem_name);

            if($stmt->execute()){
                echo "Certo";
            }else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            if($stmtt = $pdo->prepare($tlvz)){
                if($adm){
                    $stmtt->bindParam(":idAdministrador", $iD, PDO::PARAM_STR);
                    $stmtt->bindParam(":titulo", $titulo, PDO::PARAM_STR);
                }else{
                    $stmtt->bindParam(":idUsuario", $iD, PDO::PARAM_STR);
                    $stmtt->bindParam(":idAdministrador", $admID, PDO::PARAM_STR);
                    $stmtt->bindParam(":titulo", $titulo, PDO::PARAM_STR);
                }
                if($stmtt->execute()){
                    echo "Certo";
                    header("location: ../produtos.php?mensagem=mensagemSucesso");
    
                }else{
                    echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
                }
            }

        }
    }
    


?>