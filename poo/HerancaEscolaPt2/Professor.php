<?php
	require_once "Pessoa.php";
	class Professor extends Pessoa{
		private $especialidade;
		private $salario;

		public function getEspecialidade(){
			return $this->especialidade;
		}
		public function setEspecialidade($value){
			$this->especialidade = $value;
		}
		public function getSalario(){
			return $this->salario;
		}
		public function setSalario($value){
			$this->salario = $value;
		}

		public function receberAum($value){
			$this->setSalario($this->getSalario() + $value);
		}

	}
?>
