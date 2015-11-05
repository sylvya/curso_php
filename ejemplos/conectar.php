<?
	$host ="localhost";
	$usuario = "root";
	$password = "kasumy261211";
	$conectar = mysql_connect ($host, $usuario, $password) or die("el error es: " . mysql_error());// usar "or die" sólo para pruebas !!!! NO en producción.
?> 