<?php
	require_once "Aluno.php";
	class Tecnico extends Aluno{
		private $registroProfissional;

		public function getRegistroProfissional(){
			return $this->registroProfissional;
		}
		public function setRegistroProfissional($value){
			$this->registroProfissional = $value;
		}

		public function praticar(){
			echo "<br/>O técnico ".$this->getNome()." está praticando.";
		}
	}
?>
