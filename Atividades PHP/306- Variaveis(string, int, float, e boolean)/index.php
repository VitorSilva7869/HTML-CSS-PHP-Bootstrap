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

        /*if(2 === '2'){
            echo 'verdadeiro';
        }else{
            echo 'falso';
        }

        if('a' != 'a') //Sem os {} leva a segunda opção a falsa
            echo 'Verdadeiro';
            echo 'Seguda instrução';
            echo 'Terceira opçao';*/

        #=Operaddores logicos=

        //(AND ou &&) - Verdadeiro as expressoes forem verdadeiro
        //(OR ou ||) - Verdadeiro e se pelo menos umas daa expessoes for verdadeiro
        //(XOR) - Verdadeiro apenas se uma das expressoes for verdadeira, mas não ambas 
        //(!) - Iverte o resultado das expresão
        //() - Estabelecer precedencia 

        /*if(!( 2 == 9 and 10>9)){
            echo 'Verdade';
        }else{
            echo 'Falso';
        }*/
        
        #Atividade LojaVITIN

        /*$possui_cartão = true;
        $valor_compra = 25.9;

        $valor_frete = 50;
        $recebeu_desconto_frete = true;
        if( $possui_cartão == true && $valor_compra >= 400){
            $valor_frete = 0;
            
        } elseif( $possui_cartão == true && $valor_compra >= 300){
            $valor_frete = 10;
            
    
        }elseif( $possui_cartão == true && $valor_compra >= 100){
            $valor_frete = 25;
        }else{
            $recebeu_desconto_frete = false;
        }
        */

        //______________Operador termario_______________
        //vc pode bodar as condiçoes no proprio <p> exemplo: <p> $Recebeu_desconto ? 'SIM' : 'NÃO';
        //

        //_____________Switch-Case_______________
        
        /*$parametro = 'a';
        switch ($parametro) {
            case 1 == $parametro:
                echo 'Entrou no case 1';
                break;
            
            case 'abc' == $parametro:
                echo 'Entrou no case 2';
                break;
            
            case false == $parametro:
                echo 'Entrou no case 3';
                break;
            
            default:
                echo 'Nenhum resultado default';
                break;
        }*/
        
        //__________Gasting de tipos_____________
        
        #gettype () => retorneo tipoda variavel
        /*$valor = 20;
        $valor2 = (double) $valor; //muda o valor da variavel
        echo gettype($valor); //mostra o valor da variavel
        echo gettype($valor2);*/


        //______________Operador aritmetico_____________

        #Adição (+)
        #Subtração (-)
        #Multiplicação (*)
        #Divisão (/)
        #Modulo(%) Resto da divisão

        /*$x = 10;
        #$x = $x + 5; 
        $x += 5; #Os dois são a msma coisa // +=, -=, %=, /=, *=

        echo $x;
        */

        //___________________Operadoes de incremento/Decremento_________________

        #Pre-incremento (++$a) - Adiciona uma unidade antes de retornar $a
        #Pos-incremento ($a++) - Retorna $a e dps adiciona uma unidade
        #Pre-decremento (--$a) - diminui uma unidade antes de retornar $a
        #Pos-decremento ($a--) - Retorna $a e dps diminui uma unidade
        /*$a = 7;
        echo "O valor contido em a é $a <br />";
        echo "O valor contido em a após o incremento é " . $a++ . "<br/>";
        echo "O valor atualizado é $a";

        $a = 7;
        echo "O valor contido em a é $a <br />";
        echo "O valor contido em a pré o incremento é " . ++$a . "<br/>";
        echo "O valor atualizado é $a";

        $a = 7;
        echo "O valor contido em a é $a <br />";
        echo "O valor contido em a após o decremento é " . $a-- . "<br/>";
        echo "O valor atualizado é $a";

        $a = 7;
        echo "O valor contido em a é $a <br />";
        echo "O valor contido em a pré o decremento é " . --$a . "<br/>";
        echo "O valor atualizado é $a";*/

        //____________________Funçoes__________________

        /*function exibirBoasVindas(){
            echo 'Bem vindo meu caro aluno AMADO (; ';
        }  
        exibirBoasVindas(); #Chamando funçoes

        function calcularAreaTerreno($largura, $comprimento){ #Dentro dos paragrafo seria os paramentros(Assinatura para ussar)
            $area = $largura * $comprimento;
            return $area;
        } #Usar retorn quando for dinamico.

        $resultado = calcularAreaTerreno(20, 50);
        echo $resultado;*/

        //______________Manipulas strings____________________

        #strtolower($text) - Tranforma todas as palavras em maiusculas
        #strtoupper($text) - - Tranforma todas as palavras em minusculas
        #ucfirst($text) - Transforma a primaira palavra em maiuscula
        #strlen($text) - Conta a quantidades de caracter de uma Strin
        #str_replace(<procurar_por>,<substituir_por>, $text) - Substitui uma cadeia de carcteres por outra de uma string
        #substr($text, <posiçao_inicial>,<quantidade_caracter>) - Retornar parte de uma string

        /*$text = 'PHP é uma linguagem de programação muito ultilizado hj em dia';
        $result = str_replace('PHP', 'JavaScript', $text);
        echo $result;

        $result1 = substr($text,1,9);
        echo $result1*/

        //____________Funçoes nativas matemarica_______________
        #$numero = 66575.1;

        #echo ceil($numero); //- Arredona o valor para cima
        #echo floor($numero); //- Arredona o valor para baixo
        #echo round($numero); //- Arrendona os valores na base das casas decimais
        #echo rand(); //- Gera um inteiro aleatorio
        #echo sqrt($numero); //- Retorna a raiz quebrada

        #getrandmax(); //Exibe quantos numero maximo q o computador suporta
        
        //_____________Função para manipular datas_______________________

        #echo date('d/m/Y H:i'); // Recupera a data atual-- Ir no site PHP date para ver as especificaçoes
        #echo date_default_timezone_get() // Recupera o timezone default da aplicação -- 
        #echo date_default_timezone_set('America/Sao_Paulo'); // Atualiza o timezone default da aplicação -- NO Xamp ir nas configuraçoes pode mudar o timezone do PHP
        #echo strtotime(data) // Transforma datas textuais em segundos
        /*$data_inicia = '01-01-2023';
        $data_final = '24-03-2023';

        //Time tramp
        //01/01/1970 leva em consideração essa data

        $time_inicia = strtotime($data_inicia);
        $time_final = strtotime($data_final);

        echo $segundo = abs($time_inicia - $time_final); //abs retorna o valor absoluto (positivo)*/

        //__________________________ARREY Basico_____________________________

        #Sequencia numerica
        //$lista_fruta = array('Banana','Maça','Macacheira','Laranja','Goiaba');
        /*$lista_fruta = ['Banana','Maça','Macacheira','Laranja','Goiaba']; //Msma coisa de cima
        $lista_fruta[] = 'Abacaxi'; //Atribui um novo valor

        var_dump($lista_fruta); //Exibir a lista e o tipo das variaveis
        print_r($lista_fruta); //Exibir a lista mais compacta

        echo $lista_fruta[1]; //Imprimir mais especificado 

        $lista_fruta = array('Banana',
        'a' => 'Maça',
        'b' => 'Macacheira',
        'c' =>'Laranja',
        'd' => 'Goiaba');
        var_dump($lista_fruta); */

        //_______________________Arrey Multidimensionais_________________________

        /*$lista_coisas = [];
        $lista_coisas['frutas'] = ['Banana','Maça','Macacheira','Laranja','Goiaba'];
        $lista_coisas['pessoas'] = ['Vitão',"Licia",'Amarela','Felipe','Wesley'];
        print_r($lista_coisas);

        echo $lista_coisas['frutas'][3];*/

        //_____________________Arrey de pesquisa____________________

        /*$lista_fruta = ['Banana','Maça','Macacheira','Laranja','Goiaba'];

        echo in_array('quiui', $lista_fruta); // Procurar se existe essa varievel (1 = True. 'Vazio' = False)
        echo in_array('quiui', $lista_coisa[$lista_fruta]); //Procura de uma lista MULTIDIMENCIONAIS

        echo array_search('quiui', $lista_fruta); //Mostra qual o indice(Chave) da variavel buscado. (Null 'vazio')*/

        //_____________________False Null Empaty_____________________

        //false (true/false) - tipo variável boolean
        //null e empty - valores especiais

        /*$funcionario1 = null; //somente pode ser null
        $funcionario2 = ''; //pode ser null ou vazio
        $funcionario3 = false; //pode ser false ou vazio

        //valores null
        if(is_null($funcionario1)){ 
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, a variável não é null';
        }
        echo '<br />';
        if(is_null($funcionario2)){ 
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, a variável não é null';
        }
        echo '<hr />';
        //valores vazios
        if(empty($funcionario1)){ 
            echo 'Sim, a variável é vazia';
        } else {
            echo 'Não, a variável não é vazia';
        }

        echo '<br />';
        if(empty($funcionario2)){ 
            echo 'Sim, a variável é vazia';
        } else {
            echo 'Não, a variável não é vazio';
        }

        echo '<br />';
        if(empty($funcionario3)){ 
            echo 'Sim, a variável é vazia';
        } else {
            echo 'Não, a variável não é vazia';
        }*/

        //____________________Funçoes para ARREY______________________

        #is_array($lista_coisa); //Verifica se o parametro é um arrey
        #array_keys($lista_coisa); //Retorna todas as chaves de um arrey
        #sort($lista_coisa); //Ordena uma arrey e reajusta seus indiices hordem alfabetica
        #asort($lista_coisa); //Ordena os itens preservando os indices hordem alfabetica
        #count($lista_coisa); //Conta a quantidade de elemento de um arrey
        #array_merge($lista_coisa); //Funde um ou mais array
        #explode($lista_coisa); //Divide uma string baseado em um delimitador
        #implode($lista_coisa); //Junta um elementode um array em uma string

        /*$array = array('Banana','Maça','Macacheira','Laranja','Goiaba');
        $lista_f = ['Banana','Maça','Macacheira','Laranja','Goiaba'];
        $lista_p = ['Vitão',"Licia",'Amarela','Felipe','Wesley'];*/

        #1
        /*$retorno = is_array($array);
        if($retorno){
            echo 'É um array';
        }else{ echo 'não é um array';}*/

        #2
        /*$retorno = array_keys($array);
        print_r($retorno);*/

        #3
        /*sort($array); //True or False
        print_r($array);*/

        #4
        /*asort($array); //True or False
        print_r($array)*/

        #5
        /*print_r($array);
        echo count($array);*/

        #6
        /*$novo_array = array_merge($lista_f, $lista_p);
        print_r($novo_array);*/

        #7
        /*$string = '26/01/1987';
        $retorno =  explode('/', $string);
        print_r($retorno);
        echo $retorno[2].'-'. $retorno[1].'-'. $retorno[0];*/

        #8
        /*$string_retornno = implode(', ', $array);
        echo $string_retornno;*/
        
        //_______________________Loops While_______________________

        //Se for False ele fica em um loop infinito
        /*$condicao= 0;
        echo 'inicios do loop';
        while( true){
            echo $condicao.'<br/>';
            $condicao += 5;
            #$condicao++; //Adciona +1 a condicao

            if($condicao > 100){
                break;
            }

            #continue; //pula os criterios abaixo

        }
        echo 'fim do loop';*/

        //_________________________Loops DO WHILE_________________________

        //Se for False ele repete 1 vez
        /*$x = 1;
        do {
            echo 'X = '.$x.'<br/>';

            $x++;
        }while($x < 9);*/

        //____________________________Loops For__________________________

        //Se for False ele não repete
        #for(variavel;condicao;incremento;) 

        /*for($x = 0; $x <10; $x++){
            echo $x.'<br/>';
        }*/

        /*for($x = 1;true; $x++){
            if($x >= 11){
                break;
            }
            echo $x.'<br/>';
        }*/

        //___________________________Arraey com laços________________________

        /*$registros = array('Titulo noticia 1','Titulo noticia 2','Titulo noticia 3');
        $indx = 0;
        while($indx < 3){
            echo $registros[$indx];
            echo '<hr />';
            $indx++;
        }*/

        /*$registros = array(
            array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
            array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
            array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
            array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4'),
        );
    
        echo '<pre>';
        print_r($registros);
        echo '</pre>';
        echo '<br /><br /><br />';
        // $idx = 0;
    
        //count -> conta a quantidade de elementos de array
        echo 'O array possui ' . count($registros) . ' registros';*/
        /* 
        while ($idx < count($registros)) {
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
    
            echo '<hr />';
    
            $idx++;
        }
     */
        /* do {
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
    
            echo '<hr />';
    
            $idx++;
        } while ($idx < count($registros)); */
    
        /*for ($idx = 0; $idx < count($registros); $idx++) {
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
    
            echo '<hr />';
        }*/

        //___________________________Loops Foreach_______________________________

        /*$array = array('Banana','Maça','Macacheira','Laranja','Goiaba');
        foreach($array as $array){ //Percorre o Arrey 
            echo $array;
            echo '<br/>';
            if($array == 'Maça'){
                echo 'Compre mais maça familia';
            }
        }*/

        /*$funcionarios = array(
            array('nome' => 'João', 'salario'=> 2500, 'data_nascimento' => "06/03/1970"),
            array('nome' => 'Maria', 'salario'=> 3000),
            array('nome' => 'Júlia', 'salario'=> 2200)
        );
    
        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';
    
        /* foreach($funcionarios as $idx => $nome_funcionario){
            echo "ID {$idx} - Nome: {$nome_funcionario}  <br />";
            
        } */
        /*foreach($funcionarios as $idx => $nome_funcionario){
            foreach($nome_funcionario as $idx2 => $valor){
                echo "$idx2 - $valor <br />";
            }
            echo "<hr />";
        }*/

    
        //_____________ATIVIDADE1_____________
        /*$peso = 80;
        $idade= 10;
        if (($idade >= 16 && $idade <= 69) && $peso >=50){
            $resultado = 'PODE';
        } 
        else{
            $resultado = 'NÃO PODE';
        }*/

        //___________________Atividade 2___________________
        $numero = array();
        while(count($numero) <= 5){
            $num = rand(1,60);
            if(!in_array($num, $numero)){
                $numero[] = $num;
            }
        }
        print_r($numero)
    ?>
    <!-- ___________Atividade1__________-->
    <!--<p>O usuario <?= $resultado ?> dor sangue </p>-->



    <!--image.png
    ________Variaveis___________
    <h1>Ficha cadastradal</h1>
    <br>
     
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>É fumante? <?= $fumante ?></p> -->


    <!-- LojaVITIN -->
    <!--<h1>Loja</h1>
    <p>Possui cartão da loja?
        <?php
        if($possui_cartão == true){
            echo 'Sim';
        }else{
            echo 'Não';
        }
        ?>
    </p>
    <p>
        valor da compra: <?= $valor_compra ?>
    </p>
    <p>Recebeu desconto no frete?
        <?php
        if($recebeu_desconto_frete == true){
            echo 'Sim';
        }else{
            echo 'Não';
        }

        ?>
    </p>
    <p>
        valor do frete: <?= $valor_frete ?>
    </p>-->

</body>
</html>