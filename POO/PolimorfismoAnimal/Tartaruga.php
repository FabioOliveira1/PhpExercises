<?php
	require_once "Reptil.php";
	class Tartaruga extends Reptil{
		public function locomover(){
			echo "<br/>O reptil de $this->peso Kg, $this->idade anos, $this->membros membros e cor da escama $this->corEscama está andando beeeem devagar.";
		}
	}
?>