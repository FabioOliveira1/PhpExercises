<?php
	require_once "Animal.php";
	class Ave extends Animal{
		private $corPena;

		public function getCorPena(){
			return $this->corPena;
		}
		public function setCorPena($value){
			$this->corPena = $value;
		}

		public function locomover(){
			echo "<br/>A ave de $this->peso Kg, $this->idade anos, $this->membros membros e cor da pena $this->corPena está se locomovendo.";
		}
		public function alimentar(){
			echo "<br/>A ave de $this->peso Kg, $this->idade anos, $this->membros membros e cor da pena $this->corPena está se alimentando.";
		}
		public function emitirSom(){
			echo "<br/>A ave de $this->peso Kg, $this->idade anos, $this->membros membros e cor da pena $this->corPena está emitindo som.";
		}

		public function fazerNinho(){
			echo "<br/>A ave de $this->peso Kg, $this->idade anos, $this->membros membros e cor da pena $this->corPena está fazendo ninho.";
		}

	}
?>