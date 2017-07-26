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

		public function reagirFrase($frase){
			if($frase == "Comida" || $frase == "Ola")
				echo "<p>Abanar<p/>";
			else
				echo "<p>Rosnar<p/>";
		}
		public function reagirHora($hora, $min){
			if($hora < 12)
				echo "<p>Abanar<p/>";
			elseif($hora >= 18)
				echo "<p>Ignorar<p/>";
			else
				echo "<p>Abanar e latir<p/>";
		}
		public function reagirDono($dono){
			if($dono)
				echo "<p>Abanar<p/>";
			else
				echo "<p>Rosnar e latir<p/>";
		}
		public function reagirIdadePeso($idade, $peso){
			if($idade < 5)
				if($peso < 10)
					echo "<p>Abanar<p/>";
				else
					echo "<p>Latir<p/>";
			else
				if($peso < 10)
					echo "<p>Rosnar<p/>";
				else
					echo "<p>Ignorar<p/>";
		}
	}
?>