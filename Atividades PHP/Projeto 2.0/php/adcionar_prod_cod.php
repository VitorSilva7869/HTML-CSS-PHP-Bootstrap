<?php

    require "conexao.php";

    if($_SERVER['REQUEST_METHOD' ] == "POST"){
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $genero = $_POST['genero'];
        $tamanho_antes = $_POST['tamanho'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];
        $tipoRoupa= $_POST['select_roupa'];

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

        $sql = "INSERT INTO produto (titulo, descricao, genero, tamanho, preco, quantidade, name_imagem, type_imagem, tmp_imagem, estilo_roupa) VALUE (:titulo, :descricao, :genero, :tamanho, :valor, :quantidade, :name_imagem, :type_imagem, :tmp_imagem, :estilo_roupa )";

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
            $stmt->bindParam(':tmp_imagem', $imagem_tmp, PDO::PARAM_LOB);

            if($stmt->execute()){
                echo "Certo";
                header("location: ../produtos.html?mensagem=mensagemSucesso");

            }else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }
        }
    }
    


?>