<?php
	require_once "AcoesVideo.php";
	class Video implements AcoesVideo{
		private $titulo;
		private $avaliacao;
		private $views;
		private $curtidas;
		private $reproduzindo;

		public function __construct($titulo){
			$this->titulo = $titulo;
			$this->avaliacao = 1;
			$this->views = 0;
			$this->curtidas = 0;
			$this->reproduzindo = false;
		}

		public function getTitulo(){
			return $this->titulo;
		}
		public function setTitulo($value){
			$this->titulo = $value;
		}
		public function getAvaliacao(){
			return $this->avaliacao;
		}
		public function setAvaliacao($value){
			$media = ($this->avaliacao + $value)/2;
			$this->avaliacao = $media;
		}
		public function getViews(){
			return $this->views;
		}
		public function setViews($value){
			$this->views = $value;
		}
		public function getCurtidas(){
			return $this->curtidas;
		}
		public function setCurtidas($value){
			$this->curtidas = $value;
		}
		public function getReproduzindo(){
			return $this->reproduzindo;
		}
		public function setReproduzindo($value){
			$this->reproduzindo = $value;
		}

		public function play(){
			$this->setReproduzindo(true);
		}
		public function pause(){
			$this->setReproduzindo(false);
		}
		public function like(){
			$this->setCurtidas($this->getCurtidas() + 1);
		}

	}
?>
