<?
	$t ="ejemplo";
	$w ="Unión";
	$x ="de";
	$y ="cadena";
	$z =" ";
	$resultado1 = $t;
	$resultado2 = $t . $z . $w . $z . $x . $z . $x . $z . $y;
	echo '<b><h1>';
	echo $resultado1;
	echo "<hr>";
		/*Con esta linea insertamos una línea horizontal, que puede ser utilizada para dividir textos o imágenes
		en nuestra pagina web. En esta caso, la utilizamos para dividir un titular de la web, con el ejemplo de 
		unión de cadenas*/

	echo $resultado2;
		/*mostramos en pantalla el resultado de la variable $resultado2 que como podemos ver
		contiene la unión de la cadena de texto*/
	echo "</b></h1>";

?>
