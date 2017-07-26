<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>POO PHP</title>
		<style type="text/css">
			html{ color: white; background-color: black;}
		</style>
	</head>
	<body>
		<pre>
		<?php
			echo "<br/>0";
			require_once "Animal.php";
			echo "<br/>1";
			require_once "Mamifero.php";
			echo "<br/>2";
			require_once "Reptil.php";
			echo "<br/>3";
			require_once "Peixe.php";
			echo "<br/>4";
			require_once "Ave.php";
			echo "<br/>5";

			$a = array();
			$a[] = new Mamifero();
			$a[0]->setPeso(15);
			$a[0]->setIdade(5);
			$a[0]->setMembros(4);
			$a[0]->setCorPelo("Marrom");

			echo "<br/>";
			print_r($a[0]);
			$a[0]->locomover();
			$a[0]->alimentar();
			$a[0]->emitirSom();
			echo "<br/>";


			$a[] = new Reptil();
			$a[1]->setPeso(30);
			$a[1]->setIdade(8);
			$a[1]->setMembros(0);
			$a[1]->setCorEscama("Verde escura");

			echo "<br/>";
			print_r($a[1]);
			$a[1]->locomover();
			$a[1]->alimentar();
			$a[1]->emitirSom();
			echo "<br/>";


			$a[] = new Peixe();
			$a[2]->setPeso(20);
			$a[2]->setIdade(4);
			$a[2]->setMembros(2);
			$a[2]->setCorEscama("Dourada");

			echo "<br/>";
			print_r($a[2]);
			$a[2]->locomover();
			$a[2]->alimentar();
			$a[2]->emitirSom();
			$a[2]->soltarBolha();
			echo "<br/>";


			$a[] = new Ave();
			$a[3]->setPeso(2);
			$a[3]->setIdade(3);
			$a[3]->setMembros(4);
			$a[3]->setCorPena("Branca");

			echo "<br/>";
			print_r($a[3]);
			$a[3]->locomover();
			$a[3]->alimentar();
			$a[3]->emitirSom();
			$a[3]->fazerNinho();
			echo "<br/>";
		?>
		</pre>
	</body>
</html>