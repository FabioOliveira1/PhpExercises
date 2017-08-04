<?php
	require_once "Controlador.php";
	class Controle implements Controlador{

		private $volume;
		private $ligado;
		private $tocando;

		public function __construct(){
			$this->setVolume(50);
			$this->setLigado(false);
			$this->setTocando(false);
		}

		private function getVolume(){
				return $this->volume;
		}
		private function setVolume($value){
				$this->volume = $value;
		}
		private function getLigado(){
				return $this->ligado;
		}
		private function setLigado($state){
				$this->ligado = $state;
		}
		private function getTocando(){
				return $this->tocando;
		}
		private function setTocando($state){
				$this->tocando = $state;
		}

		public function ligar(){
			if(!$this->getLigado())
				$this->setLigado(true);
		}
		public function desligar(){
			if($this->getLigado())
				$this->setLigado(false);
		}
		public function abrirMenu(){
			echo "<br/>Ligado: " . ($this->getLigado() ? "SIM" : "NÃO");
			echo "<br/>Tocando: " . ($this->getTocando() ? "SIM" : "NÃO");
			echo "<br/>Volume: ";
			for($i = 0; $i < $this->getVolume(); $i+=10)
				echo "|";
			echo "<br/>";
		}
		public function fecharMenu(){
			echo "<br/>Fechando Menu. . .";
		}
		public function maisVolume(){
			if($this->getLigado())
				$this->setVolume($this->getVolume() + 5);
		}
		public function menosVolume(){
			if($this->getLigado())
				$this->setVolume($this->getVolume() - 5);
		}
		public function ligarMudo(){
			if($this->getLigado() && $this->getVolume() > 0)
				$this->setVolume(0);
		}
		public function desligarMudo(){
			if($this->getLigado() && $this->getVolume() == 0)
				$this->setVolume(50);
		}
		public function play(){
			if($this->getLigado() && !$this->getTocando())
				$this->setTocando(true);
		}
		public function pause(){
			if($this->getLigado() && $this->getTocando())
				$this->setTocando(false);
		}
	}
