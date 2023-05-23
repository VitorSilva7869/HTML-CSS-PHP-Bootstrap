<?php

    /*class Conexao {
        private $host = 'localhost';
        private $dbname = 'vssFeshion';
        private $user = 'root';
        private $pass = '';

        public function conectar(){
            try{
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                );

                return $conexao;
                
            }catch(PDOException $e){
                echo '<p>' . $e->getMessage().'</p>';
            }
        }

    }*/
    
    
    // Credenciais do banco de dados. Supondo que você esteja executando o MySQL servidor com configuração padrão (usuário 'root' sem senha)
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'vssFeshion');
    
    //Tentativa de conexão com o banco de dados MySQL
    try{
        $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        // Defina o modo de erro PDO para exceção
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        die("ERROR: Não foi possível conectar." . $e->getMessage());
    }
?>

