<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>POO PHP</title>
	</head>
	<body>
		<pre>
		<?php
			require_once "Conta.php";
			$c1 = new Conta;
			$c2 = new Conta;
			print_r($c1);
			echo "<br/>";
			print_r($c2);
			echo "<br/>";
			echo "<br/>";

			$c1->abrirConta("Jubileu", "Poupança");
			$c2->abrirConta("Cleusa", "Corrente");
			print_r($c1);
			echo "<br/>";
			print_r($c2);
			echo "<br/>";
			echo "<br/>";

			$c1->depositar(300);
			$c2->depositar(500);
			print_r($c1);
			echo "<br/>";
			print_r($c2);
			echo "<br/>";
			echo "<br/>";

			$c2->sacar(100);

			print_r($c2);
			echo "<br/>";

			$c1->pagarMensalidade();
			$c2->pagarMensalidade();
			print_r($c1);
			echo "<br/>";
			print_r($c2);
			echo "<br/>";
			echo "<br/>";

			$c1->sacar(430);
			$c2->sacar(438);
			print_r($c1);
			echo "<br/>";
			print_r($c2);
			echo "<br/>";
			echo "<br/>";

			$c1->fecharConta();
			$c2->fecharConta();
			print_r($c1);
			echo "<br/>";
			print_r($c2);
			echo "<br/>";
			echo "<br/>";
		?>
		</pre>
	</body>
</html>