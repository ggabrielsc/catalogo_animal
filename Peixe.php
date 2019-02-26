<?php
	include_once("Animal.php");

	class Peixe extends Animal{

		public $temperatura_media;


		public function __construct($peso, $comprimento, $altura, $cor_pred, $nome, $temperatura_media){

			parent::__construct($peso, $comprimento, $altura, $cor_pred, $nome);
			$this->temperatura_media = $temperatura_media;
		}





		public function exibe_peixe(){
            		$this->exibe_animal();
            echo    "<b>Temperatura média de sobrevivência: </b> $this->temperatura_media <br/>";
		}

	}



?>