<?php
	class Pessoa{
		private $nome;
		private $idade;
		private $sexo;

		public function getNome(){
			return $this->nome;
		}
		public function setNome($value){
			$this->nome = $value;
		}
		public function getIdade(){
			return $this->idade;
		}
		public function setIdade($value){
			$this->idade = $value;
		}
		public function getSexo(){
			return $this->sexo;
		}
		public function setSexo($value){
			$this->sexo = $value;
		}

		public function fazerAniver(){
			$this->setIdade($this->getIdade() + 1);
		}

	}
?>
