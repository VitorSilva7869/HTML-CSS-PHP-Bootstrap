<?php

    //_________________________________________________364- Pilar da abstração_________________________________________________

    //modelo
    /*class Funcionario{

        //atributos
        public $nome= 'José';
        public $numero = '(11)9 9136-6331';
        public $numFilhos = 2;
         
        //metodos
        function resumirCardFunc(){
            return "O nome do usuario é $this->nome. Contato $this->numero. Quantidade de fulhos é $this->numFilhos"; //this chama a variavel ""
        }

        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto 
            $this->numFilhos = $numFilhos;
        }
    }
    $y = new Funcionario; //cria uma variavel para ter acesso aos metodos
    echo $y->resumirCardFunc();//Acessa o metodo
    $y->modificarNumFilhos(3);//Passando um novo metodo
    echo $y->resumirCardFunc();

    echo '<hr/>';

    //Objetos iguais mas dados destintos
    $x = new Funcionario;
    echo $x->resumirCardFunc();
    $x->modificarNumFilhos(1);
    echo $x->resumirCardFunc();*/

    //_________________________________________________365- Getters e Setters_________________________________________________

    /*class Funcionario{

        //atributos
        public $nome= null;
        public $numero = null;
        public $numFilhos = null;
         
        //Getters e Setters

        function setNome($nome){ //Metodo set recebem valor e manipulam, atualizando os valores.
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos){//Retorna o Valor 
            $this->numFilhos = $numFilhos;
        }

        function getNome(){
            return $this->nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }
        //metodos
        function resumirCardFunc(){
            return "O nome do usuario é $this->nome. Contato $this->numero. Quantidade de fulhos é $this->numFilhos"; //this chama a variavel ""
        }

        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto 
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    $y->setNome('Maria');
    $y->setNumFilhos(4);
    echo $y->resumirCardFunc();

    echo '<br />';

    $x = new Funcionario();
    $x->setNome('Maria');
    $x->setNumFilhos(4);
    echo $x->getNome() . ' Tem ' . $x->getNumFilhos() . ' Filhos';*/



    //_________________________________________________366- Getters e Setters magicos(Overloading)_________________________________________________


    /*class Funcionario{

        //atributos
        public $nome= null;
        public $numero = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;


         
        //Getters e Setters (Overloading sobra carga)

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }
        
        //metodos
        function resumirCardFunc(){ //chamando metodos no proprio metodo
            return "O nome do usuario é ". $this->__get('nome') . " Contato $this->numero . Quantidade de filhos é " . $this->__get('numFilhos'); //this chama a variavel ""
        }

        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto 
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    $y->__set('nome','Maria');
    $y->__set('numFilhos', 4);
    echo $y->resumirCardFunc();

    echo '<br />';

    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('numFilhos', 4);
    echo $x->__get('nome') . ' Tem ' . $x->__get('numFilhos') . ' Filhos';*/

    //_________________________________________________368- Metodo construtor e Destrutor_________________________________________________

    /*class Pessoa {

		public $nome = null;

		function __construct($nome) {
			echo 'Objeto iniciado';
			$this->nome = $nome;
		}

		function __destruct() {
			echo 'Objeto removido';
		}

		function __get($atributo) {
			return $this->$atributo;
		}

		function correr() {
			return $this->__get('nome') . ' está correndo';
		}
	}

	$pessoa = new Pessoa('Jorge');
	echo '<br />Nome: ' . $pessoa->__get('nome');
	echo '<br />' . $pessoa->correr();

	echo '<br />';
	//unset($pessoa); //proposital*/

    //_________________________________________________369- Pilas de Herança_________________________________________________

    /*class Carro extends Veiculo { //extends sere para usar o PAI
		public $teto_solar = true;

		function __construct($placa, $cor) { //Chamando as variaveis do PAI
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function abrirTetoSolar() {
			echo 'Abrir teto solar';
		}

		function alterarPosicaoVolante() {
			echo 'Alterar posição volante';
		}
	}

	class Moto extends Veiculo {
		public $contraPesoGuidao = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar() {
			echo 'Empinar';
		}
	}

	class Veiculo { //Herança criada
		public $placa = null;
		public $cor = null;

		function acelerar() {
			echo 'Acelerar';
		}

		function freiar() {
			echo 'Freiar';
		}
	}

	$carro = new Carro('ABC1234', 'Branco');
	$moto = new Moto('DEF1122', 'Preto');

	echo '<pre>';
	print_r($carro);
	echo '<br /><br />';
	print_r($moto);
	echo '</pre>';
	echo '<hr />';

	$carro->abrirTetoSolar();
	echo '<br />';
	$carro->acelerar(); //usando o metodo do PAI
	echo '<br />';
	$carro->freiar();

	echo '<hr />';

	$moto->empinar();
	echo '<br />';
	$moto->acelerar();
	echo '<br />';
	$moto->freiar();*/

    //_________________________________________________370- Pilar Polimorfismo_________________________________________________

	/*class Carro extends Veiculo {
		public $teto_solar = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function abrirTetoSolar() {
			echo 'Abrir teto solar';
		}

		function alterarPosicaoVolante() {
			echo 'Alterar posição volante';
		}
	}

	class Moto extends Veiculo {
		public $contraPesoGuidao = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar() {
			echo 'Empinar';
		}

		function trocarMarcha() { //sobscrevemos o metodo comum por não fazer sentido na Mooto
			echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
		}
	}

	class Veiculo {
		public $placa = null;
		public $cor = null;

		function acelerar() {
			echo 'Acelerar';
		}

		function freiar() {
			echo 'Freiar';
		}

		function trocarMarcha() { //Criamos um metodo comum
			echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
		}
	}

	class Caminhao extends Veiculo {}

	$carro = new Carro('ABC1234', 'Branco');
	$moto = new Moto('DEF1122', 'Preto');
	$caminhao = new Caminhao();

	$carro->trocarMarcha();
	echo '<br />';
	$moto->trocarMarcha();
	echo '<br />';
	$caminhao->trocarMarcha();*/

	//_________________________________________________371- Pilar do Encapsulamento_________________________________________________

    /*class Pai {
        private $nome = 'Jorge'; //disponível para o proprio obj(class)
        protected $sobrenome = 'Silva'; //disponível para o proprio obj(class)
        public $humor = 'Feliz';
    
    
        // public function getNome(){
        //     //somente com métodos que acesso os atributos private e protected
        //     return $this->nome;
        // }
        // public function getSobrenome()
        // {
        //     //somente com métodos que acesso os atributos private e protected
        //     return $this->sobrenome;
        // }
    
        // public function setNome($value)
        // {
        //     $this->nome = $value;
        // }
    
        // public function setSobrenome($value)
        // {
        //     if (strlen($value) >= 3) {
        //         $this->sobrenome = $value;
        //     }
        // }
    
        public function __get($atr) {
            return $this->$atr;
        }
        public function __set($atr, $value) {
           $this->$atr = $value;
        }
    
        private function executarMania() {
            echo 'Assobiar';
        }
    
        protected function responder() {
            echo 'Oi';
        }
    
        public function executarAcao() {
            $x = rand(1, 10);
    
            if ($x >= 1 && $x <= 8) {
                $this->executarMania();
            } else {
                $this->responder();
            }
        }
    }
        class Filho extends Pai {
    
            public function __construct() {
                echo '<pre>';
                print_r(get_class_methods($this));
                echo '</pre>';
            }
    
            private function executarMania() {
                echo 'Cantar';
            }
    
            public function x() {
                $this->executarMania();
            }
    
            protected function responder() {
                echo 'Olá';
            }
        
    
          /*   public function getAtributo ($attr) {
                return $this->$attr;
            }
    
            public function setAtributo ($attr, $value) {
                $this->$attr = $value;
            } */
    
           /*  public function __get($atr) {
                return $this->$atr;
            }
            public function __set($atr, $value) {
               $this->$atr = $value;
            } */
        /*
        }
    
    $filho = new Filho();
    //$pai = new Pai();
    
    
        echo '<pre>';
        print_r($filho);
        echo '</pre>';
    
        /* echo $filho->getAtributo('nome');
        echo '<br />';
        $filho->setAtributo('nome', 'Pereira');
        echo '<pre>';
        print_r($filho);
        echo '</pre>';
        echo '<br />';
        echo $filho->getAtributo('nome'); */
    
        //exibir os métodos do objeto
        // echo '<pre>';
        // print_r(get_class_methods($filho));
        // echo '</pre>';
    
       /*  echo $filho->__get('nome');
    
        $filho->__set('nome', 'Jamilton');
        echo '<br />';
        echo $filho->__get('nome');
    
        echo '<pre>';
        print_r($filho);
        echo '</pre>'; */
        /*
        $fiho->executarMania();
        echo '<br/>';
        $filho->x();*/

    //_________________________________________________373- Atribultos e metodos estaticos_________________________________________________
    
    /*class Exemplos{
        public static $atributo1 = "Eu sou um atributo estatico";
        public $atributo2 = "En não sou estatico";

        public static function metodo1(){
            echo "Eu sou um atributo estatico";
        }

        public function modelo2(){
            echo "Eu sou um atributo estatico";
        }
    }

    $x = new Exemplos;
    echo Exemplos::$atributo1; // Mostra o atributo statico //ele é acessado diretamente pela classe em si.
    Exemplos::metodo1(); //mostra o metodo statico*/

    //_________________________________________________374- Interfaces_________________________________________________

    /*
    interface EquipamentoEletronicoInterface {
		public function ligar();
		public function desligar();
	}

	//-----------------------------

	class Geladeira implements EquipamentoEletronicoInterface {
		public function abrirPorta() {
			echo 'Abrir a porta';
		}

		public function ligar(){
			echo 'Ligar';
		}

		public function desligar() {
			echo 'Desligar';
		}
	}


	class TV implements EquipamentoEletronicoInterface {
		public function trocarCanal() {
			echo 'Trocar canal';
		}

		public function ligar() {
			echo 'Ligar';
		}

		public function desligar() {
			echo 'Desligar';
		}
	}

	$x = new Geladeira();
	$y = new TV();
	

	//-------------------------

	interface MamiferoInterface {
		public function respirar();
	}

	interface TerrestreInterface {
		public function andar();
	}

	interface AquaticoInterface {
		public function nadar();
	}

	class Humano implements MamiferoInterface, TerrestreInterface {
		public function andar() {
			echo 'Andar';
		}

		public function respirar() {
			echo 'Respirar';
		}

		public function conversar() {
			echo 'Conversar';
		}
	}

	class Baleia implements MamiferoInterface, AquaticoInterface {
		public function respirar() {
			echo 'Respirar';
		}

		public function nadar() {
			echo 'Nadar';
		}

		protected function esguichar() {
			echo 'Esguichar';
		}
	}

	//-----------------------------

	interface AnimalInterface {
		public function comer();
	}

	interface AveInterface extends AnimalInterface {
		public function voar();
	}

	class Papagaio implements AveInterface {
		public function voar() {
			echo 'Voar';
		}

		public function comer() {
			echo 'Comer';
		}
	}*/

    //_________________________________________________375- Namespaces_________________________________________________

    /*
    #parte1
    //Serve para usar a msma clases
    namespace A;

	class Cliente implements \B\CadastroInterface {
		public $nome = 'Jorge';

		public function __construct() {
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($attr) {
			return $this->$attr;
		}

		public function salvar() {
			echo 'Salvar';
		}

		public function remover() {
			echo 'Remover';
		}
	}

	interface CadastroInterface {
		public function salvar();
	}



	namespace B;

	class Cliente implements \A\CadastroInterface {
		public $nome = 'Jamilton';

		public function __construct() {
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($attr) {
			return $this->$attr;
		}

		public function remover() {
			echo 'Remover';
		}

		public function salvar() {
			echo 'Salvar';
		}
	}

	interface CadastroInterface {
		public function remover();
	}


	//---------------

	$c = new \B\Cliente();
	print_r($c);
	echo $c->__get('nome');
    */

    #parte2
    /*
    require "./lib1/lib1.php";
	require "./lib2/lib2.php";

	use A\Cliente as C1; //C1 cria um apelido para usar ele
	use B\Cliente as C2;

    //Usando as clases
	$c = new C1();
	print_r($c);
	echo $c->__get('nome');

	$c = new C2();
	print_r($c);
	echo $c->__get('nome');
    */

    //_________________________________________________375- Tratamento de erros_________________________________________________
    //É importante para achar erros da sua alicação ou nomear erros

    /*
    //tenha um lógica
	try {

		//tenha um lógica onde possa ocorrer um potencial erro (exceção)
		echo '<h3> *** Try *** </h3>';

		//$sql = 'Select * from clientes';
		//mysql_query($sql); //Erro

		if(!file_exists('require_arquivo_a.php')) {
			throw new Exception('O arquivo em questão deveria estar disponível as ' . date('d/m/Y H:i:s') . ' mas não estava. Vamos seguir mesmo assim!');
		}

	} catch (Error $e) { //Erro nomeada pelo PHP 
		echo '<h3> *** Catch Error *** </h3>';
		echo '<p style="color: red">' . $e . '</p>';
		//armazenando esse erro em banco de dados

	} catch (Exception $e) { //Erro criado por nos 
		echo '<h3> *** Catch Exception *** </h3>';
		echo '<p style="color: red">' . $e . '</p>';
		//armazenando esse erro em banco de dados

	} finally {
		echo '<h3> *** Finally *** </h3>';
	}
    */

    //_________________________________________________375- Tratamento de erros MAIS personalizado_________________________________________________

    /*
    class MinhaExceptionCustomizada extends Exception {

		private $erro = '';

		public function __construct($erro) {
			$this->erro = $erro;
		}

		public function exibirMensagemErroCustomizada() {
			echo '<div style="border: solid 1px #000; padding: 15px; background-color: red; color: white;">';
				echo $this->erro;
			echo '</div>';
		}
	}

	try {

		throw new Error('Esse é um erro de teste');

		//Error (php)
		//Exception (programadores)
		//Customizadas (programadores)

	} catch (Error $e) {
		$e->exibirMensagemErroCustomizada();
	}
    */

    
?>