<?php

	class Animal{
		public $peso;
		public $comprimento;
		public $altura;
		public $cor_pre;
		public $nome;


		public function __construct($peso, $comprimento, $altura, $cor_pre, $nome){
		
			$this->peso = $peso;
			$this->comprimento = $comprimento;
			$this->altura = $altura;
			$this->cor_pre = $cor_pre;
			$this->nome = $nome;
		}


	public function exibe_animal(){
            echo "
                    <b>Peso: </b> $this->peso <br/>
                    <b>comprimento: </b> $this->comprimento <br/>
                    <b>altura: </b> $this->altura <br/>
                    <b>Cor Predominante: </b> $this->cor_pre <br/>

            ";
		}

}

?>