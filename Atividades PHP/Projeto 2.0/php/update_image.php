<?php

    require_once "conexao.php";
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // Salvando a imagem
        $imagem_name = $_FILES["avatar"]["name"];
        $imagem_type = $_FILES["avatar"]["type"];
        $imagem_tmp = $_FILES["avatar"]["tmp_name"];
        $temp_imagem_avatar = file_get_contents($imagem_tmp);

        // Imprimindo os arrays
        var_dump($_FILES["avatar"]);

        // Salvando o ID
        $id = $_SESSION["id"];

        // Preparando uma declaração
        $sql = "UPDATE usuario SET name_imagem = :name_imagem, type_imagem = :type_imagem, tmp_imagem = :tmp_imagem WHERE id = :id";

        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(':name_imagem', $imagem_name, PDO::PARAM_STR);
            $stmt->bindParam(':type_imagem', $imagem_type, PDO::PARAM_STR);
            $stmt->bindParam(':tmp_imagem', $imagem_tmp, PDO::PARAM_LOB);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            if($stmt->execute()){
                echo 'Sucesso!';  
            }else{
                echo 'Algo deu errado';
            }
        }
    }
?>
