<?php
	require_once "Mamifero.php";
	class Cachorro extends Mamifero{
		public function enterrarOsso(){
			echo "<br/>O mamífero de $this->peso Kg, $this->idade anos, $this->membros membros e cor do pelo $this->corPelo está enterrando o osso.";
		}
		public function abanarRabo(){
			echo "<br/>O mamífero de $this->peso Kg, $this->idade anos, $this->membros membros e cor do pelo $this->corPelo está abanando o rabo.";
		}

		public function emitirSom(){
			echo "<br/>O mamífero de $this->peso Kg, $this->idade anos, $this->membros membros e cor do pelo $this->corPelo está latindo.";
		}
	}
?>