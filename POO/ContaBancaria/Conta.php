<?php
	class Conta{
		public $numConta;
		private $titular;
		protected $tipo;
		private $saldo;
		private $status;

		public function __construct(){
			$this->status = false;
			$this->saldo = 0;
		}

		public function abrirConta($tt, $tp){
			if(!$this->getStatus()){
				$this->setStatus(true);
				$this->setNumConta(time()*rand());
				$this->setTitular($tt);
				$this->setTipo($tp);
				if($tp == "Poupança")
					$this->setSaldo(150);
				else if($tp == "Corrente")
					$this->setSaldo(50);

				echo "Seu numero de conta é: ".($this->getNumConta())."<br/><br/>";
			}
			else
				echo "Não foi possível realizar a operação.";
		}
		public function fecharConta(){
			if($this->getSaldo() == 0)
				$this->status = false;
			else
				echo "Não foi possível realizar a operação.";
		}
		public function sacar($vl){
			if($this->getSaldo() >= $vl && $this->getStatus())
				$this->setSaldo($this->getSaldo() - $vl);
			else
				echo "Não foi possível realizar a operação.";
		}
		public function depositar($vl){
			if($this->getStatus())
				$this->setSaldo($this->getSaldo() + $vl);
			else
				echo "Não foi possível realizar a operação.";
		}
		public function pagarMensalidade(){
			if($this->getStatus()){
				if($this->tipo == "Poupança")
					$this->setSaldo($this->getSaldo() - 20);
				else
					$this->setSaldo($this->getSaldo() - 12);
			}
			else
				echo "Não foi possível realizar a operação.";
		}

		public function getNumConta(){
			if($this->getStatus())
				return $this->numConta;
			else
				echo "Não foi possível realizar a operação.";
		}
		public function setNumConta($nc){
			if($this->getStatus())
				$this->numConta = $nc;
			else
				echo "Não foi possível realizar a operação.";
		}
		public function getTitular(){
			if($this->getStatus())
				return $this->titular;
			else
				echo "Não foi possível realizar a operação.";
		}
		public function setTitular($tt){
			if($this->getStatus())
				$this->titular = $tt;
			else
				echo "Não foi possível realizar a operação.";
		}
		public function getTipo(){
			if($this->getStatus())
				return $this->tipo;
			else
				echo "Não foi possível realizar a operação.";
		}
		public function setTipo($tp){
			if($this->getStatus())
				$this->tipo = $tp;
			else
				echo "Não foi possível realizar a operação.";
		}
		public function getSaldo(){
			if($this->getStatus())
				return $this->saldo;
			else
				echo "Não foi possível realizar a operação.";
		}
		public function setSaldo($sd){
			if($this->getStatus())
				$this->saldo = $sd;
			else
				echo "Não foi possível realizar a operação.";
		}
		public function getStatus(){
			return $this->status;
		}
		public function setStatus($st){
			$this->status = $st;
		}
	}
