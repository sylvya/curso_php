<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Frases Aleatorias</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Frases Aleatorias Para Recibir a los Usuarios</h1>
	<?
	$frases = array 
	(
		1 => "Hola Chavo Ruco",
		2 => "Bienvenido A mi web",
		3 => "Gracias Por visitarnos",
		4 => "Visita Nuestro Foro",
		5 => "Nuevas Sorpresas",
		6 => "Adios Chavo RUCO",
	
	);
	$aleatorio = rand(1,6);
	echo "$frases[$aleatorio]";
	?>
</body>
</html>