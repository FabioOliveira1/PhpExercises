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
			$v = array("A", "J", "M", "X", "K");
			echo "<strong>Criado: </strong>";
			print_r($v);
			echo "<br/>-----------<br/>";
			echo "<strong>array_push: </strong>";
			array_push($v, "O");
			print_r($v);
			echo "<br/>";
			echo "<strong>array_pop: </strong>";
			array_pop($v);
			print_r($v);
			echo "<br/>-----------<br/>";
			echo "<strong>array_unshift: </strong>";
			array_unshift($v, "O");
			print_r($v);
			echo "<br/>";
			echo "<strong>array_shift: </strong>";
			array_shift($v);
			print_r($v);
			echo "<br/>-----------<br/>";
			echo "<strong>sort: </strong>";
			sort($v);
			print_r($v);
			echo "<br/>";
			echo "<strong>rsort: </strong>";
			rsort($v);
			print_r($v);
			echo "<br/>-----------<br/>";
			echo "<strong>asort: </strong>";
			asort($v);
			print_r($v);
			echo "<br/>";
			echo "<strong>arsort: </strong>";
			arsort($v);
			print_r($v);
			echo "<br/>-----------<br/>";
			echo "<strong>ksort: </strong>";
			ksort($v);
			print_r($v);
			echo "<br/>";
			echo "<strong>krsort: </strong>";
			krsort($v);
			print_r($v);
			echo "<br/>-----------<br/>";
		?>
		</pre>
	</body>
</html>