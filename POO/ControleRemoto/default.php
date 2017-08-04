<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>POO PHP</title>
	</head>
	<body>
		<pre>
		<?php
			require_once "Controle.php";
			$c = new Controle();
			$c->abrirMenu();
			$c->ligar();
			$c->abrirMenu();
		?>
		</pre>
	</body>
</html>