<?php
	include_once("Animal.php");

	class Anfibio extends Animal{

		public $temp_maxsub;


		public function __construct($peso, $comprimento, $altura, $cor_pred, $nome, $temp_maxsub){

			parent::__construct($peso, $comprimento, $altura, $cor_pred, $nome);
			$this->temp_maxsub = $temp_maxsub;
		}





		public function exibe_anfibio(){
            		$this->exibe_animal();
            echo    "<b>Tempo máximo submerso em água: </b> $this->temp_maxsub <br/>";
		}

	}



?>