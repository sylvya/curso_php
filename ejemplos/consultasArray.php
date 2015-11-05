<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Devolver Consultas en un array</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Devolver Consultas en un Array</h1>

	<?
		echo"<p align =center>";
		include("conectar.php");
		mysql_select_db("ejemplo", $conectar);
		$consulta = "SELECT nombre, apellidos, edad FROM usuarios";
		$query = mysql_query($consulta, $conectar);
		$array = mysql_fetch_array($query);
		echo("Nombre: " . $array["nombre"]);
		echo($array["apellidos"]."<br>");
		echo("edad: " . $array["edad"]."<br>");
		
	?>
</body>
</html>