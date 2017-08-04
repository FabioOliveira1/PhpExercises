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
			echo "<br/>0, ";
			require_once "Gafanhoto.php";
			echo "1, ";
			require_once "Video.php";
			echo "2, ";
			require_once "Visualizacao.php";
			echo "3<br/>";

			$v = array();
			$v[] = new Video("Aula 1 de POO");
			$v[] = new Video("Aula 12 de PHP");
			$v[] = new Video("Aula 15 de HTML5");

			// print_r($v);

			$g = array();
			$g[] = new Gafanhoto("Pedro", 18, "M", "Pedro01");
			$g[] = new Gafanhoto("Julia", 19, "F", "Julia01");

			// print_r($g);

			$vz = array();
			$vz[] = new Visualizacao($g[0], $v[0]);
			$vz[] = new Visualizacao($g[1], $v[0]);
			$vz[] = new Visualizacao($g[0], $v[0]);

			$vz[0]->avaliar();
			$vz[1]->avaliarNota(10);
			$vz[2]->avaliarPorc(60);

			print_r($vz);
		?>
		</pre>
	</body>
</html>