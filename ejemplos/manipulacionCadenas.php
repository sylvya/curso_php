<?	//Funcion "substr": Su misión es sustraer una parte del texto que nos interesa mostrar.
	/*EJEMPLO
	print(substr("Bienvenidos al portal de coches: ", 14));
	echo ("<br>");
	print(substr("Bienvenidos al portal de coches: ", 10));
	*/
	//Funcion "ord": su misión es convertir codigo ASCII a caracteres.
	/*EJEMPLO
	for ($i=1; $i <=255 ; $i++) { 
		print("ASCII: ".$i."-< caracter: ".chr($i)."<br>");
	}
	*/
	//Funciones printf() y sprintf(): Estas dos isntrucciones tienen la misna función 
	//de construir cadenas de texto en función de las instrucciones b,d,c,f,s respectivamente
	//b: Devuelve entero binario
	//d: Devuelve entero decimal
	//c: Devuelve caracter ASCII correspondiente
	//f: Devuelve decimal(utiliza signo decmal)
	//s: Devuelve cadena

	//EJEMPLO:
	/*
	$edad="25 años";
	printf("%d",$edad);
	*/
	//Función str() y strtoupper()
	//Estas dos funciones tienen como misión convertir en 
	//mayúsculas(strtoupper()) y en minúscula(strtolower()), una cadena de texto.
	/*
	$var = "Pepito";

	print(strtoupper($var)."<br>");
	print(strtolower($var))
	*/

	//Funciones ereg() y eregi()
	//El uso de estas dos funciones es muy interesante, en especial en el uso de formularios a la hora de introducir
	// el e-mail, poruqe no ponen bien el símbolo @ entre otras formas de aplicarlas.
	//La diferencia es que eregi() no diferencia  entre mayúsculas y minúsculas, algo que a la hora de rellenar
	//un formulario nos puede ser indiferente, ya que loq ue nos interesa es obtener un texto legible.

	//EJEMPLO:
	/*
	$mail = "silvia@sdominio.com";// En este ejemplo sólo almacenamos en una variable el e-mail
	// pero lo normal es que este tipo de información se obtiene de un formulario.

	if (eregi("@", $mail)) {
		print("Los datos insertados en el formulario son correctos");
	}
	else{
		print("La dirección no es correcta, por favor vuelve a introducirla");
	}*/
	//print(phpinfo()); para saber las variables predefinidas que se pueden usas por php







	
?>
