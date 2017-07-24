<?php
	require_once "Acts.php";
	class Lutador implements Acts{
		private $nome;
		private $nacionalidade;
		private $idade;
		private $altura;
		private $peso;
		private $categoria;
		private $vitorias;
		private $derrotas;
		private $empates;

		public function __construct($novoLutador){
			$this->nome = $novoLutador["nome"];
			$this->nacionalidade = $novoLutador["nacionalidade"];
			$this->idade = $novoLutador["idade"];
			$this->altura = $novoLutador["altura"];
			$this->setPeso($novoLutador["peso"]);
			$this->vitorias = $novoLutador["vitorias"];
			$this->derrotas = $novoLutador["derrotas"];
			$this->empates = $novoLutador["empates"];
		}

		public function getNome(){
			return $this->nome;
		}
		public function setNome($value){
			$this->nome = $value;
		}
		public function getNacionalidade(){
			return $this->nacionalidade;
		}
		public function setNacionalidade($state){
			$this->nacionalidade = $state;
		}
		public function getIdade(){
			return $this->idade;
		}
		public function setIdade($state){
			$this->idade = $state;
		}
		public function getAltura(){
			return $this->altura;
		}
		public function setAltura($value){
			$this->altura = $value;
		}
		public function getPeso(){
			return $this->peso;
		}
		public function setPeso($state){
			$this->peso = $state;
			$this->setCategoria();
		}
		public function getCategoria(){
			return $this->categoria;
		}
		private function setCategoria(){
			if($this->peso < 52.2)
				$this->categoria = "Inválido";
			else if($this->peso <= 70.3)
				$this->categoria = "Leve";
			else if($this->peso <= 83.9)
				$this->categoria = "Médio";
			else if($this->peso <= 120.2)
				$this->categoria = "Pesado";
			else
				$this->categoria = "Inválido";
		}
		public function getVitorias(){
			return $this->vitorias;
		}
		public function setVitorias($value){
			$this->vitorias = $value;
		}
		public function getDerrotas(){
			return $this->derrotas;
		}
		public function setDerrotas($state){
			$this->derrotas = $state;
		}
		public function getEmpates(){
			return $this->empates;
		}
		public function setEmpates($state){
			$this->empates = $state;
		}

		public function apresentar(){
			echo "<br/>";
			echo "<br/>nome: ".($this->getNome())."<br/>";
			echo "<br/>Nacionalidade: ".($this->getNacionalidade())."<br/>";
			echo "<br/>Idade: ".($this->getIdade())."<br/>";
			echo "<br/>Altura: ".($this->getAltura())."<br/>";
			echo "<br/>Peso: ".($this->getPeso())."<br/>";
			echo "<br/>";
		}
		public function status(){
			echo "<br/>";
			echo "<br/>nome: ".($this->getNome())."<br/>";
			echo "<br/>Vitorias: ".($this->getVitorias())."<br/>";
			echo "<br/>Derrotas: ".($this->getDerrotas())."<br/>";
			echo "<br/>Empates: ".($this->getEmpates())."<br/>";
			echo "<br/>Categoria: ".($this->getCategoria())."<br/>";
			echo "<br/>";
		}
		public function ganharLuta(){
			$this->setVitorias($this->getVitorias() + 1);

		}
		public function perderLuta(){
			$this->setDerrotas($this->getDerrotas() + 1);

		}
		public function empatarLuta(){
			$this->setEmpates($this->getEmpates() + 1);
		}
}
