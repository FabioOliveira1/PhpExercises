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
			require_once "Visitante.php";
			echo "<br/>2";
			require_once "Aluno.php";
			echo "<br/>3";
			require_once "Bolsista.php";
			echo "<br/>4";
			require_once "Tecnico.php";
			echo "<br/>5";
			require_once "Professor.php";
			echo "<br/>6";

			$p = array();
			$p[] = new Visitante();
			$p[0]->setNome("Pedro");
			$p[0]->setIdade(25);
			$p[0]->setSexo("M");

			echo "<br/>";
			print_r($p[0]);
			echo "<br/>";


			$p[] = new Aluno();
			$p[1]->setNome("Rodrigo");
			$p[1]->setIdade(16);
			$p[1]->setSexo("M");
			$p[1]->setCurso("Matemática");
			$p[1]->setMatricula(0000);

			echo "<br/>";
			print_r($p[1]);
			$p[1]->pagarMensalidade();
			echo "<br/>";


			$p[] = new Bolsista();
			$p[2]->setNome("Rogério");
			$p[2]->setIdade(15);
			$p[2]->setSexo("M");
			$p[2]->setCurso("Matemática");
			$p[2]->setMatricula(0001);
			$p[2]->setBolsa(0000);

			echo "<br/>";
			print_r($p[2]);
			$p[2]->pagarMensalidade();
			$p[2]->renovarBolsa();
			echo "<br/>";


			$p[] = new Tecnico();
			$p[3]->setNome("Gustavo");
			$p[3]->setIdade(16);
			$p[3]->setSexo("M");
			$p[3]->setCurso("Mecânica");
			$p[3]->setMatricula(0002);
			$p[3]->setRegistroProfissional(0000);

			echo "<br/>";
			print_r($p[3]);
			$p[3]->praticar();
			echo "<br/>";


			$p[] = new Professor();
			$p[4]->setNome("Joel");
			$p[4]->setIdade(38);
			$p[4]->setSexo("M");
			$p[4]->setEspecialidade("Automação Industrial");
			$p[4]->setSalario(5500);

			echo "<br/>";
			print_r($p[4]);
			$p[4]->receberAum(600);
			echo "<br/>O salário do ".$p[4]->getNome()." aumentou para ".$p[4]->getSalario()." reais.";
			echo "<br/>";
		?>
		</pre>
	</body>
</html>