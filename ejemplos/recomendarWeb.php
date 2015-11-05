<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recomendad Web</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Recomendar Nuestra Web a un Amigo.</h1>
	<?
	$asunto = "Te recomiendo visitar este portal.";
	$mensaje = "Hola" . $nombreAmigo . ", soy " .$tuNombre ." y te recomiendo visitar. wwww.tudominio.com, un portal en el que podras encontrar informacion de tu interes. Si es de tu agrado firma el libro de visitas.";
	mail($emailAmigo, $asunto, $mensaje, "From: " .$tuEmail);
	?>
</body>
</html>