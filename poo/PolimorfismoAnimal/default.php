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
			echo "1, ";
			require_once "Mamifero.php";
			echo "2, ";
			require_once "Reptil.php";
			echo "3, ";
			require_once "Peixe.php";
			echo "4, ";
			require_once "Ave.php";
			echo "5, ";
			require_once "Canguru.php";
			echo "6, ";
			require_once "Cachorro.php";
			echo "7, ";
			require_once "Cobra.php";
			echo "8, ";
			require_once "Tartaruga.php";
			echo "9, ";
			require_once "GoldFish.php";
			echo "10, ";
			require_once "Arara.php";
			echo "11.<br/>";

			$a = array();
			$a[] = new Mamifero();
			$a[0]->setPeso(200);
			$a[0]->setIdade(5);
			$a[0]->setMembros(4);
			$a[0]->setCorPelo("Branco");

			echo "<br/>";
			print_r($a[0]);
			$a[0]->locomover();
			$a[0]->alimentar();
			$a[0]->emitirSom();
			echo "<br/>";

			$a[] = new Canguru();
			$a[1]->setPeso(40);
			$a[1]->setIdade(6);
			$a[1]->setMembros(4);
			$a[1]->setCorPelo("Marrom");

			echo "<br/>";
			print_r($a[1]);
			$a[1]->locomover();
			$a[1]->alimentar();
			$a[1]->emitirSom();
			$a[1]->usarBolsa();
			echo "<br/>";

			$a[] = new Cachorro();
			$a[2]->setPeso(15);
			$a[2]->setIdade(3);
			$a[2]->setMembros(4);
			$a[2]->setCorPelo("Preto");

			echo "<br/>";
			print_r($a[2]);
			$a[2]->locomover();
			$a[2]->alimentar();
			$a[2]->emitirSom();
			$a[2]->abanarRabo();
			$a[2]->enterrarOsso();
			echo "<br/>";


			$a[] = new Reptil();
			$a[3]->setPeso(160);
			$a[3]->setIdade(10);
			$a[3]->setMembros(4);
			$a[3]->setCorEscama("Verde musgo");

			echo "<br/>";
			print_r($a[3]);
			$a[3]->locomover();
			$a[3]->alimentar();
			$a[3]->emitirSom();
			echo "<br/>";

			$a[] = new Cobra();
			$a[4]->setPeso(30);
			$a[4]->setIdade(8);
			$a[4]->setMembros(0);
			$a[4]->setCorEscama("Verde escura");

			echo "<br/>";
			print_r($a[4]);
			$a[4]->locomover();
			$a[4]->alimentar();
			$a[4]->emitirSom();
			echo "<br/>";

			$a[] = new Tartaruga();
			$a[5]->setPeso(60);
			$a[5]->setIdade(6);
			$a[5]->setMembros(4);
			$a[5]->setCorEscama("Marrom");

			echo "<br/>";
			print_r($a[5]);
			$a[5]->locomover();
			$a[5]->alimentar();
			$a[5]->emitirSom();
			echo "<br/>";


			$a[] = new Peixe();
			$a[6]->setPeso(20);
			$a[6]->setIdade(4);
			$a[6]->setMembros(2);
			$a[6]->setCorEscama("Dourada");

			echo "<br/>";
			print_r($a[6]);
			$a[6]->locomover();
			$a[6]->alimentar();
			$a[6]->emitirSom();
			$a[6]->soltarBolha();
			echo "<br/>";

			$a[] = new GoldFish();
			$a[7]->setPeso(0.01);
			$a[7]->setIdade(0.1);
			$a[7]->setMembros(2);
			$a[7]->setCorEscama("Dourada");

			echo "<br/>";
			print_r($a[7]);
			$a[7]->locomover();
			$a[7]->alimentar();
			$a[7]->emitirSom();
			$a[7]->soltarBolha();
			echo "<br/>";


			$a[] = new Ave();
			$a[8]->setPeso(1);
			$a[8]->setIdade(2);
			$a[8]->setMembros(4);
			$a[8]->setCorPena("Branca");

			echo "<br/>";
			print_r($a[8]);
			$a[8]->locomover();
			$a[8]->alimentar();
			$a[8]->emitirSom();
			$a[8]->fazerNinho();
			echo "<br/>";

			$a[] = new Arara();
			$a[9]->setPeso(2);
			$a[9]->setIdade(3);
			$a[9]->setMembros(4);
			$a[9]->setCorPena("Azul");

			echo "<br/>";
			print_r($a[9]);
			$a[9]->locomover();
			$a[9]->alimentar();
			$a[9]->emitirSom();
			$a[9]->fazerNinho();
			echo "<br/>";


			$k = new Cachorro();

			$k->reagirFrase("Ola");
			$k->reagirFrase("Vai apanhar");

			$k->reagirHora(11,45);
			$k->reagirHora(21,00);
			$k->reagirFrase("Vai apanhar");

			$k->reagirDono(true);
			$k->reagirDono(false);

			$k->reagirIdadePeso(2, 12.5);
			$k->reagirIdadePeso(17, 4.5);
		?>
		</pre>
	</body>
</html>