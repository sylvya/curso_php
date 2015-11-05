<?
	$tiempo = microtime();
	$tiempo = explode(" ", $tiempo);
	$tiempo = $tiempo[1] + $tiempo[0];
	$tiempoInicial = $tiempo;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tiempo de cargar</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Mostrar el Tiempo de Carga de Nuestras Páginas</h1>
	<figure><img src="../img/1.jpg"></figure>
	<figcaption>una imagen cualquiera.</figcaption>

	<?//Tiempo de carga agregando un bucle del 1 al 1000. Quitando el bucle 
	//sólo se muestra el tiempo de carga de la pagina con una imagen, archivo css externo. y ya.....
		$i=1;
		while ($i < 1000)
		{
			print("Número ". $i);
			echo "<br>";
			$i++;
		}

	?>
	<?
		echo "<br><br><br>";
		$tiempo = microtime();
		$tiempo = explode(" ", $tiempo);
		$tiempo = $tiempo[1] + $tiempo[0];
		$tiempoFinal = $tiempo;
		$tiempoTotal = ($tiempoFinal - $tiempoInicial);
		echo "La página tardó en crearse ".$tiempoTotal."segundos";
	?>

</body>
</html>