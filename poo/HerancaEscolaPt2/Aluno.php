<?php
	require_once "Pessoa.php";
	class Aluno extends Pessoa{
		private $matricula;
		private $curso;

		public function getCurso(){
			return $this->curso;
		}
		public function setCurso($value){
			$this->curso = $value;
		}
		public function getMatricula(){
			return $this->matricula;
		}
		public function setMatricula($value){
			$this->matricula = $value;
		}

		public function pagarMensalidade(){
			echo "<br/>A mensalidade do aluno ".$this->getNome()." foi paga.";
		}

	}
?>
