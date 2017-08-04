<?php
	function initDB(){
		// Open connection
		$link = mysqli_connect('localhost', 'root', 'b4t4t4123') or die('<br/>Could not connect.');
		
		mysqli_set_charset($link,'utf8');

		$query = 'CREATE DATABASE IF NOT EXISTS escola';
		treatQuery($link, $query);
		mysqli_select_db($link, 'escola') or die('<br/>Could not select database');;

		$query = 'CREATE TABLE IF NOT EXISTS alunos(
			id int not null auto_increment,
			name varchar(30) not null,
			birthday date,
			gender enum("M","F"),
			picture text,
			primary key(id)
		)DEFAULT CHARSET = utf8';
		treatQuery($link, $query);

		$query = 'CREATE TABLE IF NOT EXISTS cursos(
			id int not null auto_increment,
			name varchar(30) not null,
			classes int,
			carga int,
			logo text,
			primary key(id)
		)DEFAULT CHARSET = utf8';
		treatQuery($link, $query);

		$query = 'CREATE TABLE IF NOT EXISTS rel_alunos_cursos(
			id int not null auto_increment,
			idAluno int not null,
			idCurso int not null,
			createdAt date,
			primary key(id),
			foreign key(idAluno) references alunos(id),
			foreign key(idCurso) references cursos(id)
		)DEFAULT CHARSET = utf8';
		treatQuery($link, $query);

		// Closing connection
		mysqli_close($link);
	}

	function treatQuery($link, $query){
		$result = mysqli_query($link, $query);

		if(!$result){
			die('<br/>Query "'. $query .'" failed.');
		}

		// Free resultset
		mysqli_free_result($result);
	}
?>