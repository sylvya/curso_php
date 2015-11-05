<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Imagen segun el día de la semana</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Cambiar imagen según el día de la semana</h1>
	
	<?
		$fecha = date ("l");
		$fecha = $fecha. "..monday.jpg";
		echo "<img src = \"$fecha\">";
	?>
</body>
</html>