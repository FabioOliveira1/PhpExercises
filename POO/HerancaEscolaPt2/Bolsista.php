<?php
	require_once "Aluno.php";
	class Bolsista extends Aluno{
		private $bolsa;

		public function getBolsa(){
			return $this->bolsa;
		}
		public function setBolsa($value){
			$this->bolsa = $value;
		}

		public function renovarBolsa(){
			echo "<br/>A bolsa do aluno ".$this->getNome()." foi renovada.";
		}
		public function pagarMensalidade(){
			echo "<br/>A mensalidade do bolsista ".$this->getNome()." foi paga.";
		}
	}
?>
