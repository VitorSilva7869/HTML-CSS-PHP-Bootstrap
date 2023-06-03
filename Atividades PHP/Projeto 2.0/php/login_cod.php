<?php
// Inicialize a sessão
session_start();
 
// Incluir arquivo de configuração
require_once "conexao.php";
 
// Defina variáveis e inicialize com valores vazios
$email = $password = "";
$email_err = $password_err = $login_err = "";
 
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Verifique se o nome de usuário está vazio
    if(empty(trim($_POST["email"]))){
        $email_err = "Por favor, insira o email do usuário.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Verifique se a senha está vazia
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor, insira sua senha.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validar credenciais
    if(empty($email_err) && empty($password_err)){
        // Prepare uma declaração selecionada
        $sql = "SELECT id, email, password, name, cpf, telefone FROM Usuario WHERE email = :email";
        
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_email = trim($_POST["email"]);
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Verifique se o nome de usuário existe, se sim, verifique a senha
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $email = $row["email"];
                        $hashed_password = $row["password"];
                        $name = $row["name"];
                        $cpf = $row["cpf"];
                        $telefone = $row["telefone"];
                        //echo $hashed_password . '     ' . $password;

                        if($password == $hashed_password && $param_email == true){
                            // A senha está correta, então inicie uma nova sessão
                            
                            
                            // Armazene dados em variáveis de sessão
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;  
                            $_SESSION["nome"] = $name; 
                            $_SESSION["cpf"] = $cpf;
                            $_SESSION["telefone"] = $telefone;  

                            
                            
                            // Redirecionar o usuário para a página de boas-vindas
                            header("location: ../index.php");
                        } else{
                            // A senha não é válida, exibe uma mensagem de erro 
                            echo $login_err = "Nome de usuário ou senha inválidos.";
                            header("location: ../logar.php?Erro=errorPassword");
                        }
                    }
                } else{
                    // O nome de usuário não existe, exibe uma mensagem de erro genérica
                    $login_err = "Nome de usuário ou senha inválidos.";
                    header("location: ../logar.php?Erro=errorEmail");
                }
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Fechar conexão
    unset($pdo);
}
?>