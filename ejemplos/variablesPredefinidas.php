<?
	echo "Bienvenido a nuestro portal.";
	echo "<br><br>";
	print("Usted usa el navegador de");
	echo $HTTP_USER_AGENT;
	echo "<br><br>";
	print("Su direción  IP es:");
	echo $REMOTE_ADDR;
	echo "<br><br>";
	print("El puerto que utiliza para conectarse al servidor web es: ");
	echo $SERVER_PORT;
	echo "<br><br>";
	print("Y viene de visitar: ");
	echo $HTTP_REFERER;
	echo "<br><br>";
	print("El nombre del servidor al que se conecta es: ");
	echo $SERVER_NAME;
	echo "<br><br>";
	print("El directorio donde se almacenan los ficheros es: ");
	echo $DOCUMENT_ROOT;
	echo "<br><br>";
	print("El fichero php que está ejecutando se llama: ");
	echo $SCRIPT_NAME;
	echo "<br><br>";
	print("El correo del administrador del servidor es: ");
	echo $SERVER_ADMIN;
	echo "<br><br>";
	print("Versión del servidor  y nombre del servidor virtual: ");
	echo $SERVER_SIGNATURE;
	echo "<br><br>";
	echo "Sistema Operativo que esta utilizando es: ";
	echo $OS;
?>