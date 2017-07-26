<?php
	require_once "Animal.php";
	class Mamifero extends Animal{
		private $corPelo;

		public function getCorPelo(){
			return $this->corPelo;
		}
		public function setCorPelo($value){
			$this->corPelo = $value;
		}

		public function locomover(){
			echo "<br/>O mamífero de $this->peso Kg, $this->idade anos, $this->membros membros e cor do pelo $this->corPelo está se locomovendo.";
		}
		public function alimentar(){
			echo "<br/>O mamífero de $this->peso Kg, $this->idade anos, $this->membros membros e cor do pelo $this->corPelo está se alimentando.";
		}
		public function emitirSom(){
			echo "<br/>O mamífero de $this->peso Kg, $this->idade anos, $this->membros membros e cor do pelo $this->corPelo está emitindo som.";
		}

	}
?>