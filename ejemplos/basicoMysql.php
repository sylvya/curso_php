<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Acciones basicas con mySql</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Consulta</h1>
	<?
		echo "<p align=center>";
		echo "A continuación se muetsra el resultado de seleccionar todos los registros de la tablas usuarios.";

		include("conectar.php");
		mysql_select_db("ejemplo", $conectar);

		$consulta = "SELECT	nombre, apellidos FROM usuarios";
		$query = mysql_query ($consulta, $conectar);
		echo "<table align = center border=2 bgcolor = #6b6bff cellspacing=5>";
		while ($reg = mysql_fetch_row ($query)){
			echo "<tr>";
			echo "<br>";

			foreach ($reg as $cambia) {
			echo "<td>", $cambia, "</td>";

			}
		}
		echo "</table>";
		
	?>

	
</body>
</html>