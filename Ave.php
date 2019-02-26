<?php
	include_once("Animal.php");

	class Ave extends Animal{

		public $altura_max;


		public function __construct($peso, $comprimento, $altura, $cor_pred, $nome, $altura_max){

			parent::__construct($peso, $comprimento, $altura, $cor_pred, $nome);
			$this->altura_max = $altura_max;
		}





		public function exibe_ave(){
            		$this->exibe_animal();
            echo    "<b>Altura máximo de voo: </b> $this->altura_max <br/>";
		}

	}



?>