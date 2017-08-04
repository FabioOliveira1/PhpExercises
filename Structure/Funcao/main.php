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
			include "func.php";
			$a = 10;
			echo soma(1,2,3,4,5,6,7,8,9, 10)."<br/>";
			mult(1,2,3);
			val($a);
			ref($a);
			echo "a mudou para $a!<br/>";
			
		?>
	</body>
</html>