
<?php
    require_once "conexao.php";
        session_start();
        //print_r($_SESSION);

        //Condiçoes para não auterar a URL
        $idsArrey = array();
        for($i = 1; $i <= 30; $i++){
            $idsArrey[] = $i;

        }
        $trueOrFalse = false;
        if(isset($_GET['idProduto'])){
            $id = $_GET['idProduto'];
            foreach($idsArrey as $idRep){

                if($id == $idRep){
                    $trueOrFalse = true;
                    break;
                }
            }
            if($trueOrFalse == false){
                header("location: ../produtos.php");
            }
        }else{
            header("location: ../produtos.php"); 
        }
        
        $idUsuario = null;
        $tamanhoProduto = null;
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            echo $idUsuario = $_SESSION['id'];
            echo $idProduto = $_GET['idProduto'];
            echo $quantidadeProduto = $_POST['quantidade'];
            echo $tamanhoProduto = $_POST['tamanho'];

            if(empty($tamanhoProduto) && $quantidade == null){
                echo 'Foi';
            }else{
                header("location: ../produtos.php?erro=erroUsuarioQuantidade");
            }

            //Buscar as informaçoes do produto
            $stmt = $pdo->prepare("SELECT * FROM produto WHERE id = :id");
            $stmt->bindParam(':id', $idProduto);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($resultados as $row) {
                $titulo = $row['titulo'];
                $descricao = $row['descricao'];
                $valor = $row['preco'];
                $genero = $row['genero'];
                $tamanho1 = $row['tamanho'];
                $estilo_roupa = $row['estilo_roupa'];
                $imagem = $row['name_imagem'];
                $id_produto = $row['id'];
                $quantidade = $row['quantidade'];
            }

            $total = $valor * $quantidadeProduto;


            if(!empty($_SESSION["adm"])){
                header("location: ../produtos.php?erro=erroUsuarioAdm");
            }

            if(empty($idUsuario)){
                header("location: ../produtos.php?erro=erroUsuarioDeslogado");
                echo 'Aqui';
            }else{
                if($quantidade){
    
                    if($quantidade >= $quantidadeProduto){
    
                        $sql = "INSERT INTO Venda (usuario_id, produto_id, quantidade, total, tamanho,  data_venda) VALUES (:usuario_id, :produto_id, :quantidade, :total, :tamanhoProduto, NOW())";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(":usuario_id", $idUsuario);
                        $stmt->bindParam(":produto_id", $idProduto);
                        $stmt->bindParam(":quantidade", $quantidadeProduto);
                        $stmt->bindParam(":total", $total);
                        $stmt->bindParam(":tamanhoProduto", $tamanhoProduto);
                        $stmt->execute();
                        $venda_id = $pdo->lastInsertId(); // Obter o ID da venda inserida
                        
    
                        $novo_estoque =  $quantidade - $quantidadeProduto;
                        $sql = "UPDATE produto SET quantidade = :novo_estoque WHERE id = :produto_id";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(":novo_estoque", $novo_estoque);
                        $stmt->bindParam(":produto_id", $idProduto);
                        $stmt->execute();
    
                        echo "Venda registrada com sucesso. ID da venda: " . $venda_id . ", Número do Protocolo: ";
                        header("location: ../pedidos.php");
    
                    }else {
                        echo "Estoque insuficiente. Quantidade disponível: " . $quantidade;
                    }
                }else{
                    echo "Produto não encontrado.";
                }
            }

            // Fechar conexão
            $pdo = null;
        }


?>