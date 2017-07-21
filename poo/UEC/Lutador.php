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

		private function getNome(){
			return $this->nome;
		}
		private function setNome($value){
			$this->nome = $value;
		}
		private function getNacionalidade(){
			return $this->nacionalidade;
		}
		private function setNacionalidade($state){
			$this->nacionalidade = $state;
		}
		private function getIdade(){
			return $this->idade;
		}
		private function setIdade($state){
			$this->idade = $state;
		}
		private function getAltura(){
			return $this->altura;
		}
		private function setAltura($value){
			$this->altura = $value;
		}
		private function getPeso(){
			return $this->peso;
		}
		private function setPeso($state){
			$this->peso = $state;
			$this->setCategoria($state);
		}
		private function getCategoria(){
			return $this->categoria;
		}
		private function setCategoria($state){
			if($state < 52.2)
				$this->categoria = "Inválido";
			else if($state <= 70.3)
				$this->categoria = "Leve";
			else if($state <= 83.9)
				$this->categoria = "Médio";
			else if($state <= 120.2)
				$this->categoria = "Pesado";
			else
				$this->categoria = "Inválido";
		}
		private function getVitorias(){
			return $this->vitorias;
		}
		private function setVitorias($value){
			$this->vitorias = $value;
		}
		private function getDerrotas(){
			return $this->derrotas;
		}
		private function setDerrotas($state){
			$this->derrotas = $state;
		}
		private function getEmpates(){
			return $this->empates;
		}
		private function setEmpates($state){
			$this->empates = $state;
		}

		public function apresentar(){
			print_r($this);
		}
		public function status(){
			echo "<br/>"
			echo "<br/>nome: ".($this->getNome())."<br/>"
			echo "<br/>Vitorias: ".($this->getVitorias())."<br/>"
			echo "<br/>Derrotas: ".($this->getDerrotas())."<br/>"
			echo "<br/>Empates: ".($this->getEmpates())."<br/>"
			echo "<br/>Categoria: ".($this->getCategoria())."<br/>"
			echo "<br/>"
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
