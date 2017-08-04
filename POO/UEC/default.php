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
			require_once "Lutador.php";
			require_once "Luta.php";
			$lutadores = array();
			$dados = array();
			$dados["nome"] = "Pretty Boy";
			$dados["nacionalidade"] = "França";
			$dados["idade"] = 31;
			$dados["altura"] = 1.75;
			$dados["peso"] = 68.9;
			$dados["vitorias"] = 11;
			$dados["derrotas"] = 2;
			$dados["empates"] = 1;
			$lutadores[] = new Lutador($dados);

			$dados["nome"] = "Putscript";
			$dados["nacionalidade"] = "Brasil";
			$dados["idade"] = 29;
			$dados["altura"] = 1.68;
			$dados["peso"] = 57.8;
			$dados["vitorias"] = 14;
			$dados["derrotas"] = 2;
			$dados["empates"] = 3;
			$lutadores[] = new Lutador($dados);

			$dados["nome"] = "Snapshadow";
			$dados["nacionalidade"] = "EUA";
			$dados["idade"] = 35;
			$dados["altura"] = 1.65;
			$dados["peso"] = 80.9;
			$dados["vitorias"] = 12;
			$dados["derrotas"] = 2;
			$dados["empates"] = 1;
			$lutadores[] = new Lutador($dados);

			$dados["nome"] = "Dead Code";
			$dados["nacionalidade"] = "Australia";
			$dados["idade"] = 28;
			$dados["altura"] = 1.93;
			$dados["peso"] = 81.6;
			$dados["vitorias"] = 13;
			$dados["derrotas"] = 0;
			$dados["empates"] = 2;
			$lutadores[] = new Lutador($dados);

			$dados["nome"] = "Ufocobol";
			$dados["nacionalidade"] = "Brasil";
			$dados["idade"] = 37;
			$dados["altura"] = 1.70;
			$dados["peso"] = 119.3;
			$dados["vitorias"] = 5;
			$dados["derrotas"] = 4;
			$dados["empates"] = 2;
			$lutadores[] = new Lutador($dados);

			$dados["nome"] = "Nerdaard";
			$dados["nacionalidade"] = "EUA";
			$dados["idade"] = 30;
			$dados["altura"] = 1.81;
			$dados["peso"] = 105.7;
			$dados["vitorias"] = 12;
			$dados["derrotas"] = 2;
			$dados["empates"] = 4;
			$lutadores[] = new Lutador($dados);
			// print_r($lutadores);
			// foreach ($lutadores as $lutador) {
			// 	echo "______________";
			// 	$lutador->apresentar();
			// 	echo "--------------";
			// 	$lutador->status();
			// 	echo "______________";
			// }
			$uec01 = new Luta();
			$uec01->marcarLuta($lutadores[0], $lutadores[0]);
			$uec01->lutar();
		?>
		</pre>
	</body>
</html>