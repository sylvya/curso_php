<?
	/*EJEMPLO DE INSTRUCCIÓN REQUIRE
	require ("variables.php");

	print($y * $w);*/

	/* ESTE ES UN EJEMPLO DE INCLUDE
	include ("variables.php");

	print($x . $z . $y);*/

	//SWITCH

	$color = "Negro";

	switch ($color) {
		case 'Blanco':
			$sector = "claro";
			break;
		
		case "Naranja":
			$sector="Normal";
			break;
		case "Negro":
			$sector="Obscuro";
			break;
	}
	print($sector);
?>