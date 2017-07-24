<?php
	class Luta {
		private $desafiado;
		private $desafiante;
		private $rounds;
		private $aprovada;

		public function getDesafiado(){
			return $this->desafiado;
		}
		public function setDesafiado($value){
			$this->desafiado = $value;
		}
		public function getDesafiante(){
			return $this->desafiante;
		}
		public function setDesafiante($state){
			$this->desafiante = $state;
		}
		public function getRounds(){
			return $this->rounds;
		}
		public function setRounds($state){
			$this->rounds = $state;
		}
		public function getAprovada(){
			return $this->aprovada;
		}
		public function setAprovada($value){
			$this->aprovada = $value;
		}

		public function marcarLuta($l1, $l2){
			if($l1->getCategoria() === $l2->getCategoria() && $l1->getNome() != $l2->getNome()){
				$this->setAprovada(true);
				$this->setDesafiado($l1);
				$this->setDesafiante($l2);
			}
			else{
				$this->setAprovada(false);
				$this->setDesafiado(false);
				$this->setDesafiante(false);
			}

		}
		public function lutar(){
			if($this->getAprovada()){
				$this->getDesafiado()->apresentar();
				$this->getDesafiante()->apresentar();

				$vencedor = rand(0, 2);
				switch ($vencedor) {
					case 0:
						echo "<br/>";
						echo "<br/>".($this->getDesafiado()->getNome())." empatou com ".($this->getDesafiante()->getNome())."<br/>";
						echo "<br/>";
						$this->getDesafiado()->empatarLuta();
						$this->getDesafiante()->empatarLuta();
						break;
					case 1:
						echo "<br/>";
						echo "<br/>Vencedor: ".($this->getDesafiado()->getNome())."<br/>";
						echo "<br/>Perdedor: ".($this->getDesafiante()->getNome())."<br/>";
						echo "<br/>";
						$this->getDesafiado()->ganharLuta();
						$this->getDesafiante()->perderLuta();
						break;
					case 2:
						echo "<br/>";
						echo "<br/>Vencedor: ".($this->getDesafiante()->getNome())."<br/>";
						echo "<br/>Perdedor: ".($this->getDesafiado()->getNome())."<br/>";
						echo "<br/>";
						$this->getDesafiado()->perderLuta();
						$this->getDesafiante()->ganharLuta();
						break;
				}
				$this->getDesafiado()->status();
				$this->getDesafiante()->status();
			}
			else{
				echo "<br/>Essa luta não pode acontecer!<br/>";
			}
		}
	}
