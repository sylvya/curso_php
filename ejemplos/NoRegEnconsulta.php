<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registros Obtenidos en una Consulta</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Numero de Registros Obtenidos en una consulta</h1>
	<?
		echo "<p align = center>";

		include ("conectar.php");
		mysql_select_db("ejemplo", $conectar);

		$consulta = "SELECT nombre, apellidos FROM usuario";
		$query = mysql_query($consulta, $conectar);
		echo "<table align = center border = 2 bgcolor=#6B6BFF cellspacing = 5>";

		while($reg = mysql_fetch_row ($query))
		 {
			echo "<br>";
			echo "<tr>";
			foreach ($reg as $cambia)
			{
				echo "<td>",$cambia,"</td>";
			}
		}
		echo "</table>";
		echo "<br>";
		print ("y aquí se muestra el número de registros encontrados");
		echo "<br><br>";
		$numregistros = mysql_num_rows($query);
		print("Registros encontrados: ". $numregistros);
	?>
</body>
</html>
