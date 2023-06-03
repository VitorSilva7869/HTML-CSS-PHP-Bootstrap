<?php 

    require "conexao.php";




    // Incluir arquivo de configuração


    
    // Defina variáveis e inicialize com valores vazios
    $username = $password = $nome = $confirm_password = "";
    $username_err = $password_err = $confirm_password_err = "";
    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!preg_match('/^[a-zA-Z]{5,55}$/', trim($_POST["name"]))){
            header("location: ../cadastrar.php?Erro=errorName");
            $error_name = 'O nome de usuário pode conter apenas letras';
            
        }else{
            $sql = "SELECT id FROM Usuario WHERE name   = :name";

            if($stmt = $pdo->prepare($sql)){
                $stmt->bindParam(":name", $param_name, PDO::PARAM_STR);

                $param_name = trim($_POST["name"]);

                //executar
                if($stmt->execute()){
                    $nome = trim(($_POST["name"]));
                }else{
                    //header("location: ../cadastrar.php?name=errorNameNenhum");
                    $error_name = 'Ops! Algo deu errado. Por favor, tente novamente mais tarde.';
                    
                }

                // Fechar declaração
                unset($stmt);

            }
        }
    }
    //21112004
    // Processando dados do formulário quando o formulário é enviado
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        // Validar nome de usuário
        if(empty(trim($_POST["gmail"]))){
            $username_err = "Por favor coloque um Gmail.";
        }else{
            // Prepare uma declaração selecionada
            $sql = "SELECT id FROM Usuario WHERE email   = :email";
            
            if($stmt = $pdo->prepare($sql)){
                // Vincule as variáveis à instrução preparada como parâmetros
                $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
                
                // Definir parâmetros
                $param_email = trim($_POST["gmail"]);
                
                // Tente executar a declaração preparada
                if($stmt->execute()){
                    if($stmt->rowCount() == 1){
                        header("location: ../cadastrar.php?Erro=errorEmailExistente");
                        $username_err = "Este Email já é existente.";
                    }/*elseif(!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', trim($_POST["email"]))){
                        header("location: ../cadastrar.php?Erro=errorEmail");
                        $username_err = "O EMAIL do usuário digitado incorretamente, pode conter apenas letras minusculas sem simbolos como (/$@^~%&!)";
                    }*/else{
                        $username = trim($_POST["gmail"]);
                    }
                } else{
                    echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
                }

                // Fechar declaração
                unset($stmt);
            }
        }
        
        // Validar senha
        if(empty(trim($_POST["password"]))){
            $password_err = "Por favor insira uma senha.";     
        } elseif(strlen(trim($_POST["password"])) < 6){
            $password_err = "A senha deve ter pelo menos 6 caracteres.";
        } else{
            $password = trim($_POST["password"]);
            echo $password; 
        }
        
        // Validar e confirmar a senha
        if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = "Por favor, confirme a senha.";     
        } else{
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($password_err) && ($password != $confirm_password)){
                $confirm_password_err = "A senha não confere.";
            }
        }
        
        // Verifique os erros de entrada antes de inserir no banco de dados
        if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($error_name)){
            // Prepare uma declaração de inserção
            $sql = "INSERT INTO Usuario (name ,email, password) VALUES (:name, :email, :password)";
            
            if($stmt = $pdo->prepare($sql)){
                // Vincule as variáveis à instrução preparada como parâmetros
                $stmt->bindParam(":name", $param_name, PDO::PARAM_STR);
                $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
                $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
                
                // Definir parâmetros
                echo $nome;

                $param_name = ucfirst($nome);
                $param_email = $username;
                $param_password = $password; //password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
                
                // Tente executar a declaração preparada
                if($stmt->execute()){
                    // Redirecionar para a página de login
                    header("location: ../logar.php?concluido=concluidoMsg"); 
                } else{     
                    echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
                }

                // Fechar declaração
                unset($stmt);
            }
        }

        unset($pdo);
    }

?>