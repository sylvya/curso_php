<?	
	//Ejemplo 1
	echo "<h1>";
	function suma($x, $y)
	{
		$z = $x + $y;
		return $z;
	}
	$resultado = suma(5,12);
	echo "<br>";
	print($resultado);
	echo "</h1>";

	//Ejemplo 2

	function multiplicacion ($multiplicacion)
	{
		return $multiplicacion + $multiplicacion;// Creamos la funcion en este caso multiplicacion.
	}

	print("multiplicacion: " . multiplicacion(10));

?>