<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8 " />
	<title>Fecha y Hora</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Fecha y Hora en nuestras Páginas</h1>
	<?
		
		echo "Hoy es día: ".date("d/m/Y"),"y la hora actual es: "."",date("h:i:s"),"<br><br>Queremos dar la bienvenida a nuestro portal.";
		echo "<br>";
	


		echo date("d/m/Y"), "----". Date("h:i");
	?>
	
</body>
</html>