<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>POO PHP</title>
	</head>
	<body>
		<pre>
		<?php 
			require_once "Caneta.php";
			$c1 = new Caneta("BIC Cristal", "Azul", 0.5);
			$c2 = new Caneta("BIC", "Verde", 1.0);
			print_r($c1);
			echo "<br/>";
			print_r($c2);

		?>
		</pre>
	</body>
</html>