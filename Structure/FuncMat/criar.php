<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<style type="text/css">
		</style>
	</head>
	<body>
		<h1>Testando PHP</h1>
		<pre>
		<?php
			$n = array(4,5,7,9);
			echo "<strong>array(4,5,7,9): </strong>";
			print_r($n);
			echo "<br/>";
			$n[] = 120;
			echo "<strong>n[] = 120: </strong>";
			print_r($n);
			echo "<br/><br/>";

			$c = range(5,20,2);
			echo "<strong>range(inicio,fim,passo): </strong>";
			print_r($c);
			echo "<br/>";

			echo "<strong>range(inicio,fim,passo): </strong>";
			foreach ($c as $valor) {
				echo "$valor ";
			}
			echo "*foreach<br/>";

			$v = array(1 => "A", 3 => "B", 6 => "C", 8 => "D");
			echo "<strong>array(1 => A, 3 => B, 6 => C, 8 => D): </strong>";
			print_r($v);
			echo "<br/>";
			$v[] = "E";
			echo "<strong>v[] = E: </strong>";
			print_r($v);
			echo "<br/>";
			unset($v[9]);
			echo "<strong>unset(v[9]): </strong>";
			print_r($v);
			echo "<br/>";

			$cad = array(
				"nome" => "Carlos",
				"idade" => 35,
				"peso" => 70
			);
			$cad["trabalhando"] = true;
			echo "<strong>foreach associativo: </strong><br/>";
			foreach ($cad as $campo => $valor) {
				echo "\t$campo: $valor <br/>";
			}
			echo "<br/>";

			$m = array(
				array(6,4),
				array(4,9),
				array(3,2),
			);
			echo "<strong>matriz: </strong>";
			print_r($m);
			echo "<br/>";
		?>
		</pre>
	</body>
</html>