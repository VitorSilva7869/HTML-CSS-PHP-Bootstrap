<?php

    require_once "conexao.php";
    session_start();
    $id = $_SESSION["id"];


    $stmt = $pdo->prepare("SELECT name_imagem, type_imagem, tmp_imagem FROM usuario WHERE id = :id");
    $stmt->bindParam(':id', $id);

    $stmt->execute();
    $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);

    
    var_dump($resultado);
    foreach ($resultado as $resultado) {
        $nome = $resultado['name_imagem'];
        $tipo = $resultado['type_imagem'];
        $conteudo = $resultado['tmp_imagem'];

    
        // Exiba a imagem
        //header("Content-type: $tipo");
        //header("Content-Disposition: inline; filename=$nome");

    }
    /*if ($resultado) {
        $imagem = $resultado['tmp_imagem'];
    }*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <img src="data:image/jpeg;base64,<?php echo base64_encode($conteudo); ?>" alt="Imagem">

</body>
</html>
