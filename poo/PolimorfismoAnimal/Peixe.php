<?php
	require_once "Animal.php";
	class Peixe extends Animal{
		private $corEscama;

		public function getCorEscama(){
			return $this->corEscama;
		}
		public function setCorEscama($value){
			$this->corEscama = $value;
		}

		public function locomover(){
			echo "<br/>O peixe de $this->peso Kg, $this->idade anos, $this->membros membros e cor da escama $this->corEscama está se locomovendo.";
		}
		public function alimentar(){
			echo "<br/>O peixe de $this->peso Kg, $this->idade anos, $this->membros membros e cor da escama $this->corEscama está se alimentando.";
		}
		public function emitirSom(){
			echo "<br/>O peixe de $this->peso Kg, $this->idade anos, $this->membros membros e cor da escama $this->corEscama não emite som.";
		}

		public function soltarBolha(){
			echo "<br/>O peixe de $this->peso Kg, $this->idade anos, $this->membros membros e cor da escama $this->corEscama está soltando bolhas.";
		}

	}
?>