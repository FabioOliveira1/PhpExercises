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
			$nome = isset($_GET["nome"])? $_GET["nome"] : "abc";
			$ano = isset($_GET["ano"])? $_GET["ano"] : "abc";
			$sexo = isset($_GET["sexo"])? $_GET["sexo"] : "abc";
			$idade = date("Y") - $ano;
			echo "$nome, $sexo, que tem $idade anos de idade.<br/>";
		?>
		<a href="/html-php/registro/main.html">Voltar</a>
	</body>
</html>