<!DOCTYPE html>
<html lang="pt0br">
	<head>
		<meta charset="utf-8" />
		<style type="text/css">
		</style>
	</head>
	<body>
		<h1>Testando PHP</h1>
		<?php
			$n = $_GET["batata"];
			$n *= 7;
			$b = "Aurélio";
			$no = "Fábio"; 
			$no .= $b;
			$$no = "testei";
			$a = &$n;
			$a += 5;
			echo "$no, ". number_format($n,2) ."! $b<br/>"; 
			echo (($no xor $$no)? "TRUE" : "FALSE"); 

		?>
	</body>
</html>