<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<style type="text/css">
		</style>
	</head>
	<body>
		<h1>Testando PHP</h1>
		<?php
			$valor = isset($_GET["valor"])? $_GET["valor"] : 10;
			$op = isset($_GET["op"])? $_GET["op"] : 1;
			switch ($op){
				case 1:
					echo "O quadrado de $valor é ".$valor*$valor.".";
					break;
				case 2:
					echo "O cubo de $valor é ".$valor*$valor*$valor.".";
					break;
				case 3:
					echo "A raiz quadrada de $valor é ".sqrt($valor).".";
			}
		?>
		<a href="/html-php/calculadora/main.html">Voltar</a>
	</body>
</html>