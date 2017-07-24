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
			$valor = $_GET["value"];
			echo " A raiz é ". number_format(sqrt($valor),2).". <br/>";
		?>
		<a href="/html-php/raiz/main.html">Voltar</a>
	</body>
</html>