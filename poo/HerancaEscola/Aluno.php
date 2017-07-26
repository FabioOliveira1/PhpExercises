<?php
	require_once "Pessoa.php";
	class Aluno extends Pessoa{
		private $matr;
		private $curso;

		public function getCurso(){
			return $this->curso;
		}
		public function setCurso($value){
			$this->curso = $value;
		}
		public function getMatr(){
			return $this->matr;
		}
		public function setMatr($value){
			$this->matr = $value;
		}

		public function cancelarMatr(){
			$this->setMatr(false);
		}

	}
?>
