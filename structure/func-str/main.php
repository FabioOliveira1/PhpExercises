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
			$p = "Leite";
			$pr = 2.45;
			echo "<strong>printf(expression): </strong>";
			printf("O %s custa R$ %.2f.<br/><br/>", $p, $pr);

			$v = [4,8,3];
			echo "<strong>print_r(expression): </strong>";
			print_r($v);
			echo "<br/>";
			echo "<strong>var_dump(expression): </strong>";
			var_dump($v);
			echo "<br/>";
			echo "<strong>var_export(expression): </strong>";
			var_export($v);
			echo "<br/><br/>";

			$txt = "Essa é uma string gigante criada pelo Fabio para mostrar a função wordwrap.";
			//wordwrap(string, n colunas, O que tem na quebra (e.g."<br/>\n"), quebra de palavra true or false);
			$result = wordwrap($txt, 40, "<br/>\n", false);
			echo "<strong>wordwrap(expression): </strong> $result <br/><br/>";

			$txt = "    Fabio Oliveira    ";
			echo "<strong>strlen($txt): </strong>";
			echo(strlen($txt));
			echo "<br/>";
			$newTxt = trim($txt);
			echo "<strong>strlen($newTxt): </strong>";
			echo(strlen($newTxt));
			echo "<br/><br/>";

			$frase = "conte essas palavras";
			$cont = str_word_count($frase, 0);
			echo "<strong>str_word_count($frase, 0): </strong>$cont<br/>";
			$cont = str_word_count($frase, 1);
			echo "<strong>str_word_count($frase, 1): </strong>";
			print_r($cont);
			echo "<br/>";
			$cont = str_word_count($frase, 2);
			echo "<strong>str_word_count($frase, 3): </strong>";
			print_r($cont);
			echo "<br/><br/>";

			$letra = chr(67);
			echo "<strong>chr(67): </strong>$letra<br/>";
			$cod = ord($letra);
			echo "<strong>ord($letra): </strong>$cod<br/><br/>";

			$nome = "Fabio Aurelio";
			echo "<strong>strtolower($nome): </strong>".strtolower($nome)."<br/>";
			echo "<strong>strtoupper($nome): </strong>".strtoupper($nome)."<br/>";
			echo "<strong>strrev($nome): </strong>".strrev($nome)."<br/>";
			$nome = "fabio aUrelio";
			echo "<strong>ucfirst($nome): </strong>".ucfirst($nome)."<br/>";
			echo "<strong>ucwords($nome): </strong>".ucwords($nome)."<br/><br/>";

			$frase = "encontrando a posição de um conjunto de letras nessa frase";
			$conj = "um";
			echo "<strong>strrpos($frase, $conj): </strong>".strrpos($frase, $conj)."<br/>";
			$conj = "UM";
			echo "<strong>strripos($frase, $conj): </strong>".strripos($frase, $conj)."<br/><br/>";

			$site = "https://www.testeseusite.com.br/";
			$start = 0;
			$end = 10;
			echo "<strong>substr($site, $start, $end): </strong>".substr($site, $start, $end)."<br/>";
			echo "<strong>substr($site, $end): </strong>".substr($site, $end)."<br/>";
			echo "<strong>substr($site, -5): </strong>".substr($site, -5)."<br/>";
			echo "<strong>substr($site, -5, 2): </strong>".substr($site, -5, 2)."<br/><br/>";

			$nome = "Fabio Aurelio";
			$novo = str_pad($nome, 40,"|", STR_PAD_BOTH);
			print("<strong>str_pad(expression): </strong>$novo.<br/><br/>");

			$txt = str_repeat("vezes ", 5);
			echo "<strong>str_repeat(vezes , 5): repetir 5 </strong>$txt<br/><br/>";

			$frase = "O Zé acha PHP bom. Mas eu acho muito Bom";
			echo "<strong>str_replace(bom, ruim, $frase): </strong>".str_replace("bom", "ruim", $frase)."<br/>";
			echo "<strong>str_ireplace(BOM, ruim, $frase): </strong>".str_ireplace("BOM", "ruim", $frase)."<br/>";
		?>
	</body>
</html>