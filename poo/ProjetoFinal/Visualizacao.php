<?php
	require_once "Gafanhoto.php";
	require_once "Video.php";
	class Visualizacao{
		private $espectador;
		private $filme;

		public function __construct($espectador, $filme){
			$this->espectador = $espectador;
			$this->filme = $filme;
			$this->filme->setViews($this->filme->getViews() + 1);
			$this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
		}

		public function getEspectador(){
			return $this->espectador;
		}
		public function setEspectador($value){
			$this->espectador = $value;
		}
		public function getFilme(){
			return $this->filme;
		}
		public function setFilme($value){
			$this->filme = $value;
		}

		public function avaliar(){
			$this->filme->setAvaliacao(5);
		}
		public function avaliarNota($value){
			$this->filme->setAvaliacao($value);
		}
		public function avaliarPorc($value){
			$nova = 0;
			if($value <= 20)
				$nova = 3;
			elseif($value <= 50)
				$nova = 5;
			elseif($value <= 90)
				$nova = 8;
			else
				$nova = 10;
			$this->filme->setAvaliacao($nova);
		}

	}
?>
