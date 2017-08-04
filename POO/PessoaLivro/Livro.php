<?php
	require_once "Publicacao.php";
	class Livro implements Publicacao{
		private $titulo;
		private $autor;
		private $totPag;
		private $pagAtual;
		private $aberto;
		private $leitor;

		public function __construct($titulo, $autor, $totPag, $leitor){
			$this->setTitulo($titulo);
			$this->setAutor($autor);
			$this->setTotPag($totPag);
			$this->setPagAtual(0);
			$this->setAberto(false);
			$this->setLeitor($leitor);
		}

		public function getTitulo(){
			return $this->titulo;
		}
		public function setTitulo($value){
			$this->titulo = $value;
		}
		public function getAutor(){
			return $this->autor;
		}
		public function setAutor($value){
			$this->autor = $value;
		}
		public function getTotPag(){
			return $this->totPag;
		}
		public function setTotPag($value){
			$this->totPag = $value;
		}
		public function getPagAtual(){
			return $this->pagAtual;
		}
		public function setPagAtual($value){
			$this->pagAtual = $value;
		}
		public function getAberto(){
			return $this->aberto;
		}
		public function setAberto($value){
			$this->aberto = $value;
		}
		public function getLeitor(){
			return $this->leitor;
		}
		public function setLeitor($value){
			$this->leitor = $value;
		}

		public function detalhes(){
			print_r($this);
		}


		public function abrir(){
			$this->setAberto(true);
		}
		public function fechar(){
			$this->setAberto(false);
		}
		public function folhear($pag){
			if($pag > $this->getTotPag())
				$this->setPagAtual(0);
			else
				$this->setPagAtual($pag);
		}
		public function avancarPag(){
			$this->setPagAtual($this->getPagAtual() + 1);
		}
		public function voltarPag(){
			$this->setPagAtual($this->getPagAtual() - 1);
		}
	}
