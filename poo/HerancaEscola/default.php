<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>POO PHP</title>
		<style type="text/css">
			html{ color: white; background-color: black;}
		</style>
	</head>
	<body>
		<pre>
		<?php
			echo "<br/>0";
			require_once "Pessoa.php";
			echo "<br/>1";
			require_once "Aluno.php";
			echo "<br/>2";
			require_once "Professor.php";
			echo "<br/>3";
			require_once "Funcionario.php";
			echo "<br/>4";

			$p = array();
			$p[] = new Pessoa();
			$p[] = new Aluno();
			$p[] = new Professor();
			$p[] = new Funcionario();

			$p[0]->setNome("Pedro");
			$p[1]->setNome("Maria");
			$p[2]->setNome("João");
			$p[3]->setNome("Fabiana");

			$p[0]->setSexo("M");
			$p[1]->setSexo("F");
			$p[2]->setSexo("M");
			$p[3]->setSexo("F");

			$p[0]->setIdade(rand(18,45));
			$p[1]->setIdade(rand(18,45));
			$p[2]->setIdade(rand(18,45));
			$p[3]->setIdade(rand(18,45));

			$p[1]->setCurso("Informática");
			$p[1]->setMatr(rand()*time());

			$p[2]->setSalario(3000);
			$p[2]->setEspecialidade("Matemática");

			$p[3]->setSetor("Recepção");
			$p[3]->setTrabalhando(true);

			print_r($p);

			$p[1]->cancelarMatr();

			$p[2]->receberAum(500);

			$p[3]->mudarTrabalho();

			print_r($p);
		?>
		</pre>
	</body>
</html>