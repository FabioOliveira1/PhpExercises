<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$link = mysqli_connect('localhost', 'root', 'b4t4t4123')
			    or die('Could not connect: ' . mysqli_error());
			echo '<br/>Connected successfully';
			mysqli_select_db($link, 'cadastro') or die('Could not select database');
			echo '<br/>Database successfully';
			mysqli_set_charset($link,'utf8');
			echo '<br/>Charset successfully';

			// Performing SQL query
			$query = 'SELECT g.nome, c.nome FROM gafanhotos as g join rel_gaf_curs as r on r.idgaf = g.id join cursos as c on r.idcurso = c.idcurso order by g.nome';
			// $query = 'SELECT * FROM gafanhotos as g where nome="abcdasdas"';
			$result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error());
			echo '<br/>Query successfully';

			if (mysqli_num_rows($result) > 0) {
				// Printing results in HTML
				echo "<table>\n";
				while ($line = mysqli_fetch_row($result)) {
	    			echo "\t<tr>\n";
				    foreach ($line as $col_value) {
	        			echo "\t\t<td>$col_value</td>\n";
				    }
	    			echo "\t</tr>\n";
				}
				echo "</table>\n";
			}

			// Free resultset
			mysqli_free_result($result);

			// Closing connection
			mysqli_close($link);
		?>
	</body>
</html>