<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contador de Visitas</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Contador de Visitas</h1>
	<?
		$cuenta ="visitas.txt";
		function contador ($cuenta)
		{
			$fp = fopen($cuenta, "rw");
			$num = fgets($fp, 5);
			$num += 1;
			print"Numero de visitas: ";
			echo "$num";
			exec("rm -rf $cuenta");
			exec("echo $num > $cuenta");
			if (!file_exists($cuenta)) 
			{
				exec("echo 1 > $cuenta");
			}
		}
	
		contador($cuenta);


	?>


	
</body>
</html>