<?php
	class Caneta{
		public $modelo;
		public $cor;
		private $ponta;
		protected $carga;
		protected $tampada;

		public function __construct($m, $c, $p){
			$this->tampar();
			$this->modelo = $m;
			$this->cor = $c;
			$this->ponta = $p;
		}

		public function escrever(){
			if ($this->tampada)
				echo "<p>Não posso escrever!</p>";
			else
				echo "<p>Estou escrevendo!</p>";
		}
		public function rabiscar(){
			if ($this->tampada)
				echo "<p>Não posso rabiscar!</p>";
			else
				echo "<p>Estou rabiscando!</p>";
		}
		public function tampar(){
			$this->tampada = true;
		}
		public function destampar(){
			$this->tampada = false;
		}

		public function getModelo(){
			return $this->modelo;
		}
		public function setModelo($m){
			$this->modelo = $m;
		}
		public function getPonta(){
			return $this->ponta;
		}
		public function setPonta($p){
			$this->ponta = $p;
		}
	}
