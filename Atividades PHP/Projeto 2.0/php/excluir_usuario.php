<?php
    // Verifique se o ID do usuário foi fornecido
    include_once "conexao.php";

    if (isset($_GET['idUsuario'])) {
        echo $idUsuario = $_GET['idUsuario'];

        // Execute a lógica para excluir o usuário com o ID fornecido
        // Aqui você deve escrever o código adequado para excluir o usuário no banco de dados

        // Exemplo:
        $stmt = $pdo->prepare("DELETE FROM usuario WHERE id = :id");
        $stmt->bindParam(':id', $idUsuario);
        $stmt->execute();

        if ($stmt->errorCode() == '23000') {
            $errorInfo = $stmt->errorInfo();
            echo "Erro ao executar a consulta: " . $errorInfo[2];
        } else {
            // Retorne uma resposta adequada, por exemplo, uma mensagem de sucesso
            header("Location:   informaçoesUsuarios.php");
            exit;
        }

        // Retorne uma resposta adequada, por exemplo, uma mensagem de sucesso
        echo "Usuário excluído com sucesso!";
    } else {
        // Se o ID do usuário não foi fornecido, retorne uma mensagem de erro
        
        echo "ID do usuário não fornecido.";

    }
?>
