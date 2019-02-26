<?php
	include_once("Animal.php");

	class Mamifero extends Animal{

		public $vel_max;


		public function __construct($peso, $comprimento, $altura, $cor_pred, $nome, $vel_max){

			parent::__construct($peso, $comprimento, $altura, $cor_pred, $nome);
			$this->vel_max = $vel_max;
		}





		public function exibe_mamifero(){
            		$this->exibe_animal();
            echo    "<b>Velocidade máxima: </b> $this->vel_max <br/>";
		}

	}



?>