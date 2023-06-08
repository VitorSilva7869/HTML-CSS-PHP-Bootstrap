<?php

    require_once "conexao.php";
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // Salvando a imagem
        $imagem_name = $_FILES["avatar"]["name"];
        $imagem_type = $_FILES["avatar"]["type"];
        $imagem_tmp = $_FILES["avatar"]["tmp_name"];


        // Imprimindo os arrays
        var_dump($_FILES["avatar"]);

        // Salvando o ID
        $id = $_SESSION["id"];

        // Preparando uma declaração
        $sql = "UPDATE usuario SET name_imagem = :name_imagem, type_imagem = :type_imagem WHERE id = :id";

        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(':name_imagem', $imagem_name, PDO::PARAM_STR);
            $stmt->bindParam(':type_imagem', $imagem_type, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            move_uploaded_file($imagem_tmp, '../imagens/Avatar/'.$imagem_name);
            $_SESSION['vatar'] = true;
            $_SESSION['imagenAvatar'] = $imagem_name;

            if($stmt->execute()){
                echo 'Sucesso!'; 
                header("location: ../conta.php"); 
            }else{
                echo 'Algo deu errado';
            }
        }
    }
?>
