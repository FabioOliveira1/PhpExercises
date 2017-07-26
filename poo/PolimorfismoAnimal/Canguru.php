<?php
	require_once "Mamifero.php";
	class Canguru extends Mamifero{
		public function usarBolsa(){
			echo "<br/>O mamífero de $this->peso Kg, $this->idade anos, $this->membros membros e cor do pelo $this->corPelo está usando a bolsa.";
		}

		public function locomover(){
			echo "<br/>O mamífero de $this->peso Kg, $this->idade anos, $this->membros membros e cor do pelo $this->corPelo está saltando.";
		}

	}
?>