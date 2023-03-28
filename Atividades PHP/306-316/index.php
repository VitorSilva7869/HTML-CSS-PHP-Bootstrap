<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    





    <?php 

        #____________Variaveis_____________
        /*//String
        $nome= 'Vitinho brocador';

        //Int
        $idade= 29;

        //float
        $peso= 61.20;

        //Boolean
        $fumante= true; //true(=1) or false(vazio);

        //logica altera o valor
        $idade= 30;*/

        #_____________Concatenação______________

        /*$nome= 'Vitor';
        $aparencia = 'Lindo';

        echo 'Ola '. $nome .' ,  vi que vc é '. $aparencia .'.'; //"." Seria um "+" para concatena
        echo "Ola $nome, vi que vc é  $aparencia ."; //Aspas duplas não precia do ponto especificando*/


        #__________________Variavel constante___________________
        /*define('DB_URL','endereço_bd_dev');
        define('DB_Usuario','ususario_dev');
        define('DB_Senha','senha_dev');

        echo DB_URL;
        echo DB_Senha;
        echo DB_Usuario;

        //Não tem como mudar os valores de uma constante quando já for pre definida*/

        #__________________Comparação______________________

        //== Se é iguaç
        //=== se é igual com o msmo tipos
        //!= ou <> Se é diferente
        //!== Não identico do tipo
        //< Se é menor
        //> Se é maior 
        //<= , >= Se é maior ou igual. Se é menor ou Igual.
        //

        if(2 === '2'){
            echo 'verdadeiro';
        }else{
            echo 'falso';
        }

    ?>
    <!--
    ________Variaveis___________
    <h1>Ficha cadastradal</h1>
    <br>
     
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>É fumante? <?= $fumante ?></p> -->
</body>
</html>