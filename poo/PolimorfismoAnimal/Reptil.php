<?php
	require_once "Animal.php";
	class Reptil extends Animal{
		private $corEscama;

		public function getCorEscama(){
			return $this->corEscama;
		}
		public function setCorEscama($value){
			$this->corEscama = $value;
		}

		public function locomover(){
			echo "<br/>O reptil de $this->peso Kg, $this->idade anos, $this->membros membros e cor da escama $this->corEscama está rastejando.";
		}
		public function alimentar(){
			echo "<br/>O reptil de $this->peso Kg, $this->idade anos, $this->membros membros e cor da escama $this->corEscama está comendo vegetais.";
		}
		public function emitirSom(){
			echo "<br/>O reptil de $this->peso Kg, $this->idade anos, $this->membros membros e cor da escama $this->corEscama está emitindo som.";
		}

	}
?>