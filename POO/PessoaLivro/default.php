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
			echo "<br/>Nada Certo";
			require_once "Pessoa.php";
			echo "<br/>Quase Certo";
			require_once "Livro.php";
			echo "<br/>Tudo Certo";

			$p = array();
			$p[] = new Pessoa("Pedro", 18, "M");
			$p[] = new Pessoa("José", 20, "M");
			$p[] = new Pessoa("Carlos", 32, "M");
			$p[] = new Pessoa("Lívia", 19, "F");
			$p[] = new Pessoa("Paula", 27, "F");

			$l = array();
			$l[] = new Livro("Diário de um banana", "Carlinhos", 250, $p[0]);
			$l[] = new Livro("Coisas cortadas ao meio", "Discovery", 300, $p[0]);
			$l[] = new Livro("Motopeças: Não consertamos motos", "Geo_vane", 500, $p[1]);
			$l[] = new Livro("O caminho das pedras", "Caio Rolando da Rocha", 350, $p[1]);
			$l[] = new Livro("Desafiando a Justiça", "Ǵeraldinho", 430, $p[3]);

			$l[0]->detalhes();

			$l[0]->folhear(200);

			$l[0]->detalhes();

		?>
		</pre>
	</body>
</html>